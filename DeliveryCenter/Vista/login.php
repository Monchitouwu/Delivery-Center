<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <link rel="stylesheet" href="./fonts/style.css">

        <link rel="stylesheet" href="./CSS/style.css">
    </head>
    <body class="Login">
        <div class="Rectangle-1">
            <a class="Logo"><img src="./img/Logo.png"></a>
            <form id="login-form" class="form"  method="POST">
           
               
                   <div>
                    <select name="Rol" class="Rectangle-5" >
                        <option selected>Seleccione una opcion</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Sede">Sede</option>
                        <option value="Central">Central</option>
                      </select>
                   </div>
                    
                 
                <div class="form-group">
                    
                    <input type="text" name="usuario" placeholder="Correo electronico" id="username" class="Rectangle-6 " >
                </div>
                <div class="">
           
                    <input type="password" name="password" placeholder="Contraseña" id="password" class="Rectangle-4 " >
                    
                </div> 
                
                <div id="recordarcontraseña" >
                   
                    <div class="Rectangle-2">
                        
                        <form id="login-form" class="form" action="index.php" method="POST">
                            <h2 style="text-align: center;">Recordar contraseña</h2>
                                <p class="textrecor"> Para recordar su contraseña ingrese el correo<br>
                                    electrónico Vinculado a su cuenta y se le enviara<br>
                                    una nueva.</p>
                            <div class="form-group">
                                
                                <input type="text" name="usuario" placeholder="Correo electronico" id="username1" class="Rectangle-7 " >
                            </div>
                           
                            <div class="form-group">
                                		
                            <span class="icon-cross" onclick="cerrar();"></span>
                               
                                
                            <input type="submit" name="validar" value="Enviar" class="btn_ingresar2"  >
            
                            </div>     
                        </form>
                    </div>
           
                </div>

                <div class="recordarcontraseña">
                  <a onclick="recordarcontraseña();">¿Recordar contraseña?</a>
                   
                </div>
               
                <div class="form-group">
                <input type="submit" name="btn_login" value="Ingresar" class="btn_ingresar"> 
                    
            

                </div>     
            </form>
        </div>

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
        
        <script type="text/javascript" src="./js/recordarcontraseña.js" async defer></script>
    </body>
</html>