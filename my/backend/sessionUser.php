<?php

session_start(); 
$Email;
$CoinsidenciasFromId; 


if($_SESSION['usuario'] == null || $_SESSION['usuario'] == ""){
    if($_SESSION['idUser'] == null || $_SESSION['idUser'] == ""){

        ?>
        <h3 class = "fine"> Tienes que iniciar seccion para poder entrar, si crees que se trata de un error, contactanos</h3>
        <h4>Redireacionando al login en 3 segundos....</h4>
       <meta http-equiv="refresh" content="3; url=../login.php"> 
        <?php
        die();
    }
}