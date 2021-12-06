<?php
require_once "backend/session.php";
require "MenuAdmin.php";
require_once '../../assets/data_base/conex_data_base.php';

$ConsultaForSelectNameCategoria = "SELECT id_categoria, nombreCategoria FROM categorias";
$ConexForSelectNameCategoria = mysqli_query($conex, $ConsultaForSelectNameCategoria);
//$ArrayDatosCategorias = mysqli_fetch_row($ConexForSelectNameCategoria);

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
    <div class="container">
			<h1>Categorias</h1>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmCategorias" method = "POST">
						<label>Categoria</label>
						<input type="text" class="form-control input-sm" name="categoria" id="categoria">
						<p></p><br>
                        <button class="btn btn-primary" name = "button-categorias">
                        <span  >Agregar</span>
                        </button>
					</form>
                     
                      <?php 
                      require_once 'backend/validacionesCategorias.php'; //indexa al backend de las vadilaciones de este archivo.
                    ?>
				</div>
                <br><br><br><br>
             
				<div class="col-sm-8">
					<div id="tablaCategoriaLoad" style = "margin-left: 60px;">
                    <caption><label>Categorias :D</label></caption>
                             <table class="table table-hover table-condensed table-bordered" style="text-align: center; margin-right:50px;" >
                            
                            <tr style = "background-color:#CDDBF7;">
                                <th WIDTH="40px">ID</th>
                                <th>Categoria</th>
                                <th WIDTH="100px">Editar</th>
                                <th WIDTH="100px">Eliminar</th>
                            </tr>
                            <?php while($ArrayDatosCategorias = mysqli_fetch_row($ConexForSelectNameCategoria)){  ?>
                            <tr>
                            <td><?php echo $ArrayDatosCategorias[0]; ?></td>
                                <td>
                                <b><?php echo $ArrayDatosCategorias[1]; ?></b>
                                </td>
                                <td>
                                    <span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#actualizaCategoria" onclick="agregaDato('<?php echo $ArrayDatosCategorias[0] ?>','<?php echo $ArrayDatosCategorias[1] ?>')" >
                                        <span class="fa fa-pencil" aria-hidden="true"></span>
                                    </span>
                                </td>
                                <td>
                                    <span class="btn btn-danger btn-xs" data-toggle="modal" data-target="#EliminarCategoria" onclick="Eliminar('<?php echo $ArrayDatosCategorias[0] ?>','<?php echo $ArrayDatosCategorias[1] ?>')">
                                        <span class="fa fa-times" aria-hidden="true"></span>
                                    </span>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                    </div>
				</div>
			</div>
		</div>
   <!-- Modal 1 editar-->
   <div class="modal fade" id="actualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" margin-top:80px;">
<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content"  style=" WIDTH: 500px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza categorias</h4>
					</div>
					<div class="modal-body">
						<form id="frmCategoriaU" method = "POST">
							<input type="text" hidden="" id="idcategoria" name="idcategoria">
							<label>Categoria</label>
							<input type="text" id="categoriaU" name="categoriaU1" class="form-control input-sm">
						


					</div>
					<div class="modal-footer">
						<button id="btnActualizaCategoria" class="btn btn-warning"  name="button-editarCategorias">Guardar y Cerrar</button>
                        </form>

                      

					</div>
				</div>
			</div>
</div>
    <!-- Modal 2 eliminar-->
    <div class="modal fade" id="EliminarCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" margin-top:80px;">
<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content"  style=" WIDTH: 500px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza categorias</h4>
					</div>
					<div class="modal-body">
                        <h5>Seguro que quieres eliminar esta categoria?<h5><br>
						<form id="frmCategoriaU" method = "POST">
							<input type="text" hidden="" id="idcategoria2" name="idcategoria">
							<label>Categoria: </label> <b><input type="text" id="categoriaU2" name="categoriaU1" class="form-control input-sm" readonly><b>
							
						


					</div>
					<div class="modal-footer">
						<button id="btnActualizaCategoria" class="btn btn-danger"  name="button-EliminarCategorias">Aceptar</button>
                        <button type="button" class="btn btn-info" data-dismiss="modal" aria-label="Close">Cancelar</button>
                        </form>
					</div>
				</div>
			</div>
</div>
<script type="text/javascript">
		function agregaDato(idCategoria,categoria){
			$('#idcategoria').val(idCategoria);
			$('#categoriaU').val(categoria);
		}

		function Eliminar(idCategoria,categoria){
			$('#idcategoria2').val(idCategoria);
			$('#categoriaU2').val(categoria);
		}
	</script>

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
