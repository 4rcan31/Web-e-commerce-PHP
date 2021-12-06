<?php

if(isset($_POST['button-articulos'])){
    if(strlen($_POST['nombre']) > 0 && strlen($_POST['descripcion']) > 0 && strlen($_POST['cantidad']) > 0 && strlen($_POST['precio']) > 0 && !empty($_POST['categoriaSelect']) && $_FILES['imagen']['tmp_name']!=""){
       $FechaRegArticulo = date("d/m/y");
        $_SESSION['idUser'];
        $NameImg = $_FILES['imagen']['name'];
        $DatosPostFrmArticulos = array($_POST['categoriaSelect'],$NameImg, $_SESSION['idUser'], $_POST['nombre'], $_POST['descripcion'], $_POST['cantidad'], $_POST['precio'], $FechaRegArticulo);

        $ConsultaForInsertDatosArticulos = "INSERT INTO articulos( `id_categoria`, `id_imagen`, `id_usuario`, `nombre`, `descripcion`, `cantidad`, `precio`, `fechaCaptura`) VALUES 
        ('$DatosPostFrmArticulos[0]','$DatosPostFrmArticulos[1]','$DatosPostFrmArticulos[2]','$DatosPostFrmArticulos[3]','$DatosPostFrmArticulos[4]','$DatosPostFrmArticulos[5]','$DatosPostFrmArticulos[6]','$DatosPostFrmArticulos[7]')";
        $ConexForInsertDatosArticulos = mysqli_query($conex, $ConsultaForInsertDatosArticulos);
        

        if($ConexForInsertDatosArticulos){
            ?>
            <br><br><br>
            <div style=" background-color:#3CBD10; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
            <h5 > Agregada con exito</h5> 
            </div>
            <meta http-equiv="refresh" content="1; url=articulos.php"> 
            <?php
        }else if(!$ConexForInsertDatosArticulos){
            ?>
            <br><br><br>
            <h5 style=" background-color:#DE0C0C; color: white; display: block; padding: 10px; text-align:center;" > No se pudo insetar los datos :c</h5> 
            <?php
        }
    }else{
        ?>
        <br><br><br>
        <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:450px; " >
            <h5 > Tienes que rellenar todos los campos</h5> 
            </div>
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
    <h5 style=" background-color:#DE0C0C; color: white; display: block; padding: 10px; text-align:center;"> Error:BuAdmiArti1.0</h5>
    <?php
}


/*
if(isset($_POST['button-articulos'])){
    if(strlen($_POST['categoria']) > 0 ){
        $IdUsuario = $_SESSION['idUser'];
        $AgregarNameCategoria =$_POST['categoria'];
        $FechaRegCategoria = date("d/m/y");
        $DatosRegisterCategoria = array( $IdUsuario,$AgregarNameCategoria, $FechaRegCategoria );
        $ConsultaForInsertDatosCategoria = "INSERT INTO categorias(id_usuario, nombreCategoria, fechaCaptura) VALUES ('$DatosRegisterCategoria[0]','$DatosRegisterCategoria[1]','$DatosRegisterCategoria[2]')";
        $ConexForInsertDatosCategoria = mysqli_query($conex, $ConsultaForInsertDatosCategoria);

        if($ConexForInsertDatosCategoria){
            ?>
            <br><br><br>
            <div style=" background-color:#3CBD10; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
            <h5> Categoria agregada con exito</h5> 
            </div>
             <meta http-equiv="refresh" content="0.9999999; url=categorias.php"> 
            <?php
        }else if(!$ConexForInsertDatosCategoria){
            ?>
            <br><br><br>
            <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
            <h5>No se logro insertar la categoria :C, intente de nuevo.</h5> 
            </div>
            <?php
        }else{
            //TODO: Este error creo que tambien se tiene que documentar xd
            ?>
            <br><br><br>
            <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
            <h5> Error:AgreCatAd1</h5> 
            </div>
            <?php
        }
    }else if(strlen($_POST['categoria']) < 1 ){
        ?>
        <br><br><br><br>
        <div style=" background-color:#DE0C0C; color: white; display: inline-block; padding: 10px; text-align:center;WIDTH:350px; " >
            <h5> Tienes que escribir una categoria</h5> 
            </div>
        <?php
        
    }
} */
