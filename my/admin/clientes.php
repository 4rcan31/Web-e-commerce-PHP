<?php
require_once "backend/session.php";
require "MenuAdmin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vapesuissee-productos</title>


<!-- Bootstrap core CSS -->
<link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--


-->

<!-- Additional CSS Files -->
<link rel="stylesheet" href="../../assets/css/fontawesome.css">
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel="stylesheet" href="../../assets/css/owl.css">
</head>
<body>



    <br><br><br><br> <br><br><br><br>
<div  style="margin-right: 100px;">
    <div class="container">
			<h1>Clientes</h1>
			<div class="row" >
				<div class="col-sm-12 col-md-12 col-lg-6">
					<form id="frmArticulos" enctype="multipart/form-data" method="POST">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Apellido</label>
						<input type="text" class="form-control input-sm" id="descripcion" name="apellido">
						<label>Direccion</label>
						<input type="text" class="form-control input-sm" id="cantidad" name="direccion">
						<label>Email</label>
						<input type="text" class="form-control input-sm" id="precio" name="email">
            <label>Telefono</label>
						<input type="text" class="form-control input-sm" id="precio" name="telefono">
                        <br>
						<p></p>
                        <button class="btn btn-primary" name = "button-clientes">
                        <span>Guardar</span>
                        </button>
					</form>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6 table-reponsive">
					<div id="tablaArticulosLoad">
                    <caption><label>Clientes :D</label></caption>
                             <table class="table table-hover table-condensed table-bordered " style="text-align: center; margin-top: -2px;margin-right: 100px;">
                            <tr>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Direccion</td>
                                <td>Email</td>
                                <td>Telefono</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>


                            <tr>
                                <td></td>
                                <td></td>
                                <td> </td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span  data-toggle="modal" data-target="#abremodalUpdateArticulo" class="btn btn-warning btn-xs">
                                        <span  class="fa fa-pencil" aria-hidden="true"></span>
                                    </span>
                                </td>
                                <td>
                                    <span class="btn btn-danger btn-xs" >
                                        <span class="fa fa-times" aria-hidden="true"></span>
                                    </span>
                                </td>
                            </tr>
                        </table>

                    </div>
				</div>
			</div>
		</div>
</div>



<?php 
require_once "backend/validacionesClientes.php";
?>

    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="../../assets/js/custom.js"></script>
    <script src="../../assets/js/owl.js"></script>
    <script src="../../assets/js/slick.js"></script>
    <script src="../../assets/js/isotope.js"></script>
    <script src="../../assets/js/accordions.js"></script>

</body>
</html>