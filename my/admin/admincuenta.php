<?php
require_once "backend/session.php";
require "MenuAdmin.php";

?>

<!DOCTYPE html>
<html lang="es">
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
<link rel="stylesheet" href="../../assets/css/main.css">
</head>
<body>





    <br><br><br><br>
    <h3>Mi cuenta</h3>

<h4>Bienvenido <?php echo $_SESSION['usuario'] . " Tu id es -> ". $_SESSION['idUser']. " y tu rol es -> " . "'". $_SESSION['roluser']."'" ." --------'2' para users, '1' para admins"; ?></h4>


    <form method = "GET">
        <button>
            <a href = "../cerrar_seccion.php">Cerrar session</a>
        </button>
    </form>


    
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


    
