<?php

if(isset($_POST['button-clientes'])){
    if(strlen($_POST['nombre']) > 0 && strlen($_POST['apellido']) > 0 && strlen($_POST['direccion']) > 0 && strlen($_POST['email']) > 0 && strlen($_POST['telefono']) > 0){

        ?>
        <br><br><br>
        <h5 style=" background-color:#3CBD10; color: white; display: block; padding: 10px; text-align:center;" > Agregada con exito</h5> 
        <?php
    }else{
        ?>
        <br><br><br>
        <h5 style=" background-color:#DE0C0C; color: white; display: block; padding: 10px; text-align:center;"> Tienes que rellenar todos los campos.</h5> 
        <?php
    }
}else if(!isset($_POST['button-articulos'])){
    //No ha apretado el boton
    ?>
    <br><br><br>
    <!-- <h5 style=" background-color:#DE0C0C; color: white; display: block; padding: 10px; text-align:center;"> Tienes que enviar los datos haciendo click en el boton.</h5> -->
    <?php
}else{
    //TODO: Tienes que documentar este error imbecil
    ?>
    <br><br><br>
    <h5 style=" background-color:#DE0C0C; color: white; display: block; padding: 10px; text-align:center;"> Error:BuAdmiUsers1.0</h5>
    <?php
}
