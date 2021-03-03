<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Detalle nuevo pedido</title>
     
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
				<a href="homesede.php">Home</a>  
                <a href="productos.php">Productos</a>    
                <a href="nuevoPedido.php">Nuevos pedidos</a> 
                <a href="preparacionpedido.php">Pedidos en preparacion</a>
                <a href="rutaPedido.php">Pedidos en ruta</a>
                <a href="ventasConcretadas.php">Ventas</a>
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
                                    <a class="btn"href="miperfil.php">Mi perfil</a>
                                        <div class="dropdown-divider"></div>
                                    <a class="btn" href='#'>Cerrar sesión</a>
                                </div>
                    </div> 
                </div>
            </nav>

			<div class="container-fluid">
		<div class="card text-center">
			<div class="card-header">
				<h4 class="factura-titulo"><svg width="1em" height="1em" viewBox="0 -5 19 20" class="bi bi-pencil-square text-danger"
						fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path
							d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
						<path fill-rule="evenodd"
							d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
					</svg> Detalles de pedido</h4>
			</div>
			<div class="card-body">
				<form class="" role="form" id="datos_factura">
					<div class="form-group row">
						<label class="col-form-label-sm"><strong>Sede</strong></label>
						<div class="col-lg-3">
						<input type="text" class="form-control form-control-sm" id="tel1" value="Monterrey" readonly>
						</div>
						<label class="col-form-label-sm"><strong>Dirección</strong></label>
						<div class="col-lg-3">
							<input type="text" class="form-control form-control-sm" value="Transversa 54A" required
								readonly>
						</div>
						<label class="col-form-label-sm"><strong>Estado</strong></label>
						<div class="col-lg-2">
							<input type="text" class="form-control form-control-sm" id="tel1" value="Activo" readonly>
						</div>
						<label class="col-form-label-sm"><strong>Fecha</strong></label>
						<div class="col-lg-2">
							<input type="text" class="form-control form-control-sm" value="<?php echo date("d/m/Y");?>"
								readonly>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-form-label-sm"><strong>Cliente</strong></label>
						<div class="col-lg-3">
							<input type="text" class="form-control form-control-sm" value="Carlos Restrepo" required readonly>
						</div>
						<label class="col-form-label-sm"><strong>Direccion</strong></label>
						<div class="col-lg-3">
							<input type="text" class="form-control form-control-sm" value="Transversa 54A" required readonly>
						</div>

						<label for="email " class="col-form-label-sm "><strong>Telefono</strong></label>

						<div class="col-lg-2 ">

							<input type="text" class="form-control form-control-sm" value="3106666666" required readonly>

						</div>
					</div>

			</div>
			<div class="card-header">
				<h4 class="factura-titulo">Pedido</h4>
			</div>

			<div class="card-body">
				<div class="form-group row">
					<label class="col-form-label-sm"><strong>Numero de pedido</strong></label>
					<div class="col-lg-2">
						<input type="text" class="form-control form-control-sm" value="001" required readonly>
					</div>

				</div>
				<div class="form-group row">
					<table class="table table-bordered">
						<thead class="factura-titulo">
							<tr>
								<th class="text-center">PRODUCTO</th>
								<th class="text-center">CANTIDAD</th>
								<th class="text-center">VALOR</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center-sm">Medio pollo asado</td>
								<td class="text-center">5</td>
								<td class="text-center">$100.000</td>
							</tr>
							<tr>
								<td class="text-center">Medio pollo apanado</td>
								<td class="text-center">8</td>
								<td class="text-center">$60.000</td>
							</tr>

						</tbody>
					</table>

				</div>
				<div class="form-group row">
					<label class="col-sm-8 col-form-label-sm"> </label>
					<label class="col-sm-1 col-form-label"><strong>Valor total</strong></label>
					<div class="">
						<input type="text" class="form-control form-control" value="$160.000" required readonly>
					</div>
				</div>
				<div class="form-group row">
				<div class="col-lg-7 ">
				<a class="btn btn-danger btn-md" href="#"><svg width="1em" height="1em" viewBox="3 -3 16 19" class="bi bi-clipboard-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 				<path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  				<path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
				</svg>Aceptar pedido</a>
				</div>
				<div class="col-lg-3 ">
				<a class="btn btn-danger btn-md" href="#"><svg width="1em" height="1em" viewBox="3 -3 16 19" class="bi bi-clipboard-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				<path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  				<path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm-.354 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
				</svg>Rechazar pedido</a>
				</div>
				</div>
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


