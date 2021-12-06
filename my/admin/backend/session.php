<?php
session_start();

if($_SESSION['usuario'] == null || $_SESSION['usuario'] == ""){
    if($_SESSION['idUser'] == null || $_SESSION['idUser'] == ""){
        if( $_SESSION['roluser'] == null || $_SESSION['roluser'] == ""){
            ?>
            <h3 class = "fine"> Tienes que iniciar seccion para poder entrar, si crees que se trata de un error, contactanos</h3>
            <h4>Redireacionando al login en 3 segundos....</h4>
           <meta http-equiv="refresh" content="3; url=../../login.php"> 
            <?php
            die();
        }
    }
}

if($_SESSION['roluser'] == "2" || $_SESSION['roluser'] == 2 ){
    ?>
    <h3 class = "fine"> Tienes una cuenta de usuario, si quieres acceso al panel de control de administrador contactate con el administrador ;)</h3>
    <h4>Redireacionando a inicio en 7 segundos....</h4>
   <meta http-equiv="refresh" content="7; url=../inicio.php"> 
   <h4>O has clic <a href= "../inicio.php">aca</a></h4>
    <?php
    die();

}