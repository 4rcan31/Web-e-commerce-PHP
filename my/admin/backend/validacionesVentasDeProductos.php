
<?php
if(isset($_POST['agregar-ventas'])){
    if(!empty($_POST['clienteVenta']) && !empty($_POST['productoVenta']) ){

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
}