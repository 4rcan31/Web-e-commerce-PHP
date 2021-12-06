<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Arcane">
	


    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Register</title>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--


-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Vapesu <em>issee</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(Actual)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Nuestros productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Acerca de nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <br><br><br>
    <h1 class= "h1-login">Register</h1>
    <div>
        <div class="input-register">
            <form method="POST">
                <input  type="text" name="Fname" placeholder="Ingrese su o usuario">
                <input  type="text" name="Lname" placeholder="Ingrese su apellido">
                <input  type="email" name="email" placeholder="Ingrese su email">
                <input  type="password" name="password" placeholder="Ingrese su password">
                <button class="button-login" name = "register">Register</button>
                <div class = "create-account">
                <p class = "link-login">Regresa al login </p><a class = "link-login"href="login.php">aca</a>
                </div>
            </form>
        </div>
    </div>


 

<?php
 require "assets/data_base/conex_data_base.php";
 //require_once "assets/DataBase/metodosDatos.php";
 //require_once 'assets/css/main.css';


if(isset($_POST['register'])){
    if(strlen($_POST['Fname']) >= 1 && strlen($_POST['Lname']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){
        $Fname = ($_POST['Fname']);
        $Lname = ($_POST['Lname']); 
        $Email = ($_POST['email']);
        $PasswordEncriptada = sha1($_POST['password']);
        
 
       



        $ConsultaRepetidos = "SELECT * FROM usuarios WHERE email = '$Email'";
       // echo $ConsultaRepetidos;
        $ConexForSeeCoincidencias = mysqli_query($conex, $ConsultaRepetidos);
        $CoincidenciasRepetidos = mysqli_num_rows($ConexForSeeCoincidencias);
        //echo $CoincidenciasRepetidos;
        //$CoincidenciasRepetidos = $ConexForSeeCoincidencias -> num_rows;
        
   

      if($CoincidenciasRepetidos < 1 ){
        $fechaReg = date("d/m/y");
        $rol = 2;
        $InsertDatosRegister = "INSERT INTO usuarios(nombre, apellido, email, password,  fechaCaptura, rol_id) VALUES ('$Fname', '$Lname', '$Email', '$PasswordEncriptada','$fechaReg', '$rol')";
        $ConexForInsertDatosRegister = mysqli_query($conex, $InsertDatosRegister);

        if($ConexForInsertDatosRegister){
            ?>
            <h3 class = "fine"> Te has registrado correctamente!! :)</h3>
            <h6 class = "fine">Revisa tu bandeja de de email para comprobarlo, o si no, contactanos</h6>
            <?php
        }else{
            ?>
            <h3 class = "bad"> ups, algo a salido mal :C </h3>
            <?php
        }
  

      }else if($CoincidenciasRepetidos >= 1){ 
       // echo $CoincidenciasRepetidos; //Ver cuantos (en int) se han registrado
        ?>
        <h3 class = "bad"> Este usuario ya esta registrado, cambia de email.</h3> 
        <?php
        
      }else{
        ?>
        <h3 class = "bad"> Algo inesperado paso, lo sentimos :C</h3> 
        <?php
      }

 

    }else{
        ?>
        <h3 class = "bad"> Tinenes que reñenar todos los campos</h3>
        <?php
    }
}


?>

<footer class="footer pt-60" >
      <div class="footer223">
        <div class="container">
          <!--Footer Info -->
          <div class="row footer-info mb-30" class="inner-content">
              <div class="col-md-6 col-sm-12 col-xs-12 mb-sm-30 text-sm-left">
                  <p class="mb-xs-0">Contactos.</p>
                  <ul class="link-small">
                      <li><a href="mailto:yourname@domain.com"><i class="fa fa-envelope-o left"></i>yourname@domain.com</a></li>
                      <li><a><i class="fa fa-phone left"></i>(Numero telefonico)</a></li>
                  </ul>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12 text-right text-sm-left">
                  <ul class="link">
                      <li><a href="privacy-policy.html">Privacy Policy</a></li>
                      <li><a href="terms-and-conditions.html">Terms</a></li>
                      <li><a href="faq.html">FAQ</a></li>
                      <li><a href="contact.php">Contactanos</a></li>
                  </ul>
      <div class="spacer-30"></div>
      <ul class="social">
                      <li><a target="_blank" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                      <li><a target="_blank" href="https://www.instagram.com/vapesuissee/"><i class="fa fa-instagram"></i></a></li>
                      <li><a target="_blank" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                      <li><a target="_blank" href="https://youtube.com/"><i class="fa fa-youtube"></i></a></li>
                      <li><a target="_blank" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
              </div>
          </div>
          <!-- End Footer Info -->
      </div>

      

      <!-- Copyright Bar -->
      <div class="copyright ptb-15">
          <div class="container">
    <div class="row">
      <div class="col-sm-6 text-left text-sm-left">© 2021 <a href="index.php"><b>Inc. Arcane</b></a>. Todos los derechos reservados.</div>
                  <div class="col-sm-6 text-right text-sm-left">Website  by <a target="_blank" href="https://www.instagram.com/rodrigo._.a.12/"><b>4rcan3</b></a></div>
    </div>
          </div>
      </div>
      <!-- End Copyright Bar -->
      </div>


  </footer>


</body>
</html>