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

<!-- Additional CSS Files -->
<link rel="stylesheet" href="../../assets/css/fontawesome.css">
<link rel="stylesheet" href="../../assets/css/style.css">
<link rel="stylesheet" href="../../assets/css/owl.css">
</head>
<body>


    <br><br><br><br> <br><br><br><br>
    <div class="container">
    <h2>Ventas de productos</h2>
    <div class="row">
		 	<div class="col-sm-12">
		 		<span class="btn btn-primary btn-sm" id="ventaProductosBtn">Vender producto</span>
		 		<span class="btn btn-success btn-sm" id="ventasHechasBtn">Ventas hechas</span>
		 	</div>
		 </div>
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div id="ventaProductos"></div>
		 		<div id="ventasHechas"></div>
		 	</div>
		 </div>
     <?php

require_once "backend/validacionesVentasDeProductos.php";

?>

    </div>
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">
		$(document).ready(function(){
            $('#ventaProductos').hide();
			$('#ventasHechas').hide();
			$('#ventaProductosBtn').click(function(){
				$('#ventaProductos').load('ventas/ventasDeProductos.php');
				$('#ventaProductos').show();
			});
            $('#ventaProductos').hide();
			$('#ventasHechas').hide();
			$('#ventasHechasBtn').click(function(){
				$('#ventasHechas').load('ventas/reportesYventas.php');
				$('#ventasHechas').show();
			});
		});
	</script>




    <!-- Additional Scripts -->
    <script src="../../assets/js/custom.js"></script>
    <script src="../../assets/js/owl.js"></script>
    <script src="../../assets/js/slick.js"></script>
    <script src="../../assets/js/isotope.js"></script>
    <script src="../../assets/js/accordions.js"></script>

    
</body>
</html>