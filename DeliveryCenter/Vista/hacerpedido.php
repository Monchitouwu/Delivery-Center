<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>hacer Pedido</title>
        <link rel="stylesheet" href="./CSS/style.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="./CSS/style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

        
       
    </head>
    <body>
        
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" >
            <div id="dismiss">
                <i class="fas fa-arrow-left"></i>
            </div>

            <div class="sidebar-header">
                <h3>Delivery Center</h3>
            </div>

            <ul class="list-unstyled components">
              
            <li>
                <a href="HomeCentral.php" >Home</a>    
                <a href="hacerpedido.php">Hacer Pedido</a>
                <a href="verpedidos.php">Ver Pedidos</a>
                </li>
                
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Utilidades</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">

                                <a class="nav-link dropdown text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon-user-tie " > Simon Maya Villegas</span>
                                </a>
                                <div class="dropdown-menu  " aria-labelledby="navbarDropdown">
                                <a class="btn"href="miperfilcentral.php">Mi perfil</a>
                                        <div class="dropdown-divider"></div>
                                    <a class="btn" href='#'>Cerrar sesión</a>
                                </div>
                    </div> 
                </div>
            </nav>

          <div> 
              <div class="edit">
              <span class="editT"> <h1 >Nuevo pedido</h1></span>
                    <br>
                     <form action="#" method="POST">
                     <div class="form-row"> 
                       <div class="form-group col-md-6">
                        <label for="sede">Seleccionar Sede</label>
                         <select name="Sede" id="sede">
                           <option value="SeleccionarSede">Seleccionar Sede</option>
                         </select>
                       </div>
                       <div class="form-group col-md-6">
                       <label for="sede">direccion</label>
                         <input type="text">
                       </div>
                       <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck"> estado
    </div>
                     </div>
                       <span class="editT"> <h1 >Cliente</h1></span>
                       <div class="form-row"> 
                       <div class="form-group col-md-7">
                        <label for="Direccion">Direccion</label>
                         <input type="text" id="Direccion" name="Direccion"; value="">
                      
                       </div>
                        
                       <div class="form-group col-md-7">
                        <label for="Direccion">Nombre</label>
                         <input type="text" id="Direccion" name="Direccion"; value="">
                      
                       </div>
                       
                       <div class="form-group col-md-7">
                        <label for="tel">Telefono: </label>
                         <input type="text" id="tel" name="tel" value="">
                       
                       </div>
                       

                         
                         </div>
                         <span class="editT"> <h1 >Producto</h1></span>
                         <table style="margin: auto; width: 1000px; border-collapse: separate; border-spacing: 20px 10px;">
                         <select name="producto">
                         <option value="producto">consultasql</option> 
                         </select>
                         <button type="button" class="btn btn-primary">Agregar Producto</button>
                         
  		<thead>
  			<th>Producto</th>
  			<th>Cantidad</th>
  			<th>Valor</th>
  			<th>Acciones</th>
              

  		</thead>
      <tbody>
      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></a>  <a href=""> <button type="button" class="btn btn-danger">Eliminar producto</button> </a></td>
        </tr>
      </tbody>
  	</table>

                         <button type="submit" class="btn ">Hacer Pedido</button>
                         
                     </form>         
              </div>
         </div>

        </div>
    </div>
            
  <div class="overlay"></div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript" src="./js/recordarcontraseña.js" async defer></script>

    </body>
</html>