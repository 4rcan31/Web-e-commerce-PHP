<?php
require_once "backend/session.php";
require "MenuAdmin.php";
require_once '../../assets/data_base/conex_data_base.php';

$ConsultaForSelectIdCategoriaAndNameCateforia = "SELECT id_categoria, nombreCategoria FROM categorias"; 
$ConexForSelectIdCategoriaAndNameCateforia = mysqli_query($conex, $ConsultaForSelectIdCategoriaAndNameCateforia);

$ConsultaForSelectDatosArticulos = "SELECT nombre, descripcion, cantidad, precio, fechaCaptura, id_categoria, id_producto, id_imagen FROM articulos";
$ConexForSelectDatosArticulos = mysqli_query($conex, $ConsultaForSelectDatosArticulos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vapesuissee-articulos</title>


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
			<h1>Articulos</h1>
			<div class="row" >
				<div class="col-sm-12 col-md-12 col-lg-6">
					<form id="frmArticulos" enctype="multipart/form-data" method="POST">
						<label>Categoria</label>
						<select class="form-control input-sm" id="categoriaSelect" name="categoriaSelect">
							<option>Agrega categoria</option>
                            <?php while($SeeCategorias = mysqli_fetch_row($ConexForSelectIdCategoriaAndNameCateforia)):?>
                            <option value = <?php echo $SeeCategorias[0] ?>><?php echo $SeeCategorias[1];  ?></option>
                            <?php endwhile; ?>
						</select require>
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Descripcion</label>
						<input type="text" class="form-control input-sm" id="descripcion" name="descripcion">
						<label>Cantidad</label>
						<input type="text" class="form-control input-sm" id="cantidad" name="cantidad">
						<label>Precio</label>
						<input type="text" class="form-control input-sm" id="precio" name="precio">
						<label>Imagen</label>
                        <br>
                        <button class="addfiles" style="color:transparent;background-color:#3E77EB;">
                        <input type="file" id="imagen" name="imagen" style="color:transparent;background-color:#3E77EB;">
                        </button>
						<p></p><br>
                        <button class="btn btn-primary" name = "button-articulos">
                        <span>Agregar</span>
                        </button>
					</form>
                    	
                        <?php 
                        require_once "backend/validacionesArticulos.php";
                        //print_r($_FILES);
                        ?>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div id="tablaArticulosLoad">
                    <caption><label>Articulos :D</label></caption>
                    <table class="table table-hover table-condensed table-bordered table-reponsive" style="text-align: center; margin-top: -2px;margin-right: 100px;">
                            <tr>
                                <td>ID</td>
                                <td>Nombre</td>
                                <td>Descripcion</td>
                                <td>Cantidad</td>
                                <td>Precio</td>
                                <td>Imagen</td>
                                <td>Categoria</td>
                                <td>Fecha de registro</td>
                                <td>Editar</td>
                                <td>Eliminar</td>
                            </tr>


                            <tr>
                                <?php while ($SeeArticulos = mysqli_fetch_row($ConexForSelectDatosArticulos)): ?>
                                <td><?php echo $SeeArticulos[6];?></td>
                                <td><?php echo $SeeArticulos[0];?></td>
                                <td><?php echo $SeeArticulos[1];?></td>
                                <td><?php echo $SeeArticulos[2];?></td>
                                
                                <td><?php echo $SeeArticulos[3];?></td>
                                <td>
                                    <?php echo $SeeArticulos[7];?>
                                    <img width="80" height="80" >
                                </td>
                                <td><?php echo $SeeArticulos[5];?></td>
                                <td> <?php echo $SeeArticulos[4];?> </td>
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
                            <?php endwhile;?>
                        </table>

                    </div>
				</div>
			</div>
		</div>
</div>

	


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
