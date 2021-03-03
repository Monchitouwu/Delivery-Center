<?php
require_once 'DBconnect.php';
session_start();
if(isset($_SESSION["Administrador"])) //Condicion admin
{
header("location: ./vista/homeadmin.php"); 
}
if(isset($_SESSION["Sede"])) //Condicion personal
{
header("location: ./vista/homesede.php"); 
}
if(isset($_SESSION["Central"])) //Condicion Usuarios
{
header("location: ./vista/homeCentral.php");
}

if(isset($_REQUEST['btn_login'])) 
{
$email =$_REQUEST["usuario"]; //textbox nombre "txt_email"
$password =$_REQUEST["password"]; //textbox nombre "txt_password"
$role =$_REQUEST["Rol"]; //select opcion nombre "txt_role"

if(empty($email)){ 
$errorMsg[]="Por favor ingrese Email"; //Revisar email
}
else if(empty($password)){
$errorMsg[]="Por favor ingrese Password"; //Revisar password vacio
}
else if(empty($role)){
$errorMsg[]="Por favor seleccione rol "; //Revisar rol vacio
}
else if($email AND $password AND $role)
{
try
{
$select_stmt=$db->prepare("SELECT  correo, contraseña, nombreRol
FROM  empleados, roles as e
JOIN roles AS r
ON r.nombreRol=e.id_rol
Where email=:uemail AND password=:upassword AND role=:urole"); 
$select_stmt->bindParam(":uemail",$email);
$select_stmt->bindParam(":upassword",$password);
$select_stmt->bindParam(":urole",$role);
$select_stmt->execute(); //execute query

while($row=$select_stmt->fetch(PDO::FETCH_ASSOC)) 
{
$dbemail =$row["usuario"];
$dbpassword =$row["password"];
$dbrole =$row["Rol"];
}
if($email!=null AND $password!=null AND $role!=null) 
{
if($select_stmt->rowCount()>0)
{
if($email==$dbemail and $password==$dbpassword and $role==$dbrole)
{
switch($dbrole) //inicio de sesión de usuario base de roles
{
case "admin":
$_SESSION["Administrador"]=$email; 
$loginMsg="Administrador: Inicio sesión con éxito"; 
header("refresh:3;./vista/homeadmin.php"); 
break;

case "Sede";
$_SESSION["Sede"]=$email; 
$loginMsg="Sede: Inicio sesión con éxito"; 
header("refresh:3;./vista/homesede.php"); 
break;

case "usuarios":
$_SESSION["Central"]=$email; 
$loginMsg="Central: Inicio sesión con éxito"; 
header("refresh:3;./vista/homeCentral.php"); 
break;

default:
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
catch(PDOException $e)
{
$e->getMessage();
} 
}
else
{
$errorMsg[]="correo electrónico o contraseña o rol incorrectos";
}
}
include("header.php");
?>