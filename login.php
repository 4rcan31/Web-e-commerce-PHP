<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Vapesuissee-productos</title>


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
    <h1 class= "h1-login">Login</h1>

    <div>
        <div class="input-login">
            <form method="POST">
                <input  type="email" name="email" placeholder="Ingrese su email">
                <input   type="password" name="password" placeholder="Ingrese su password">
                <button name="register" class="button-login">Login</button>
                <div class = "create-account">
                  <p class="link-login">!No tienes una cuenta? </p><a class = "link-login"href="register.php">registrate aca</a>
                </div>
                
            </form>
        </div>
    </div>

    <?php
 require "assets/data_base/conex_data_base.php";
 //require_once "assets/DataBase/metodosDatos.php";
 //require_once 'assets/css/main.css';
 

if(isset($_POST['register'])){
    if(strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){ 


/*
      if(isset($_SESSION['rol'])){
        switch($_SESSION['rol']){
          case 1:
            break;
            ?>
            <meta http-equiv="refresh" content="0; url=my/admin/inicioadmi.php"> 
            <?php
            case 2:
              ?>
              <meta http-equiv="refresh" content="0; url=my/inicio.php"> 
              <?php
            break;

            default:
            ?>
            <h3 class = "bad"> Error: Ro1 </h3>
            <?php
            break;
        }
      } */ 


      
        $Email = ($_POST['email']);
        $PasswordEncriptada = sha1($_POST['password']);
        $fechaReg = date("d/m/y");
       $ConsultaLoginEmailAndPassword = "SELECT * FROM usuarios WHERE email = '$Email' and password = '$PasswordEncriptada'"; //Trae la consulta de login para verificar si hay datos iguales en la base de datos
       $ConsultaLoginId = "SELECT id_usuario FROM usuarios WHERE email = '$Email' and password = '$PasswordEncriptada'"; 
       //$ConsultaLoginRol = "SELECT * FROM usuario WHERE rol = 'usuario' or rol = 'admin'";
       //$ConsultaLoginRol = "SELECT rol FROM usuario WHERE email = '$Email' and password = '$PasswordEncriptada' AND (rol = 'usuario' OR rol = 'admin' )";

       // echo $ConsultaRepetidos;
      // $ConexForSeeRol = mysqli_query($conex,$ConsultaLoginRol);
       $ConexForLoginId = mysqli_query($conex, $ConsultaLoginId);
       $ConexForLoginEmailAndPassword = mysqli_query($conex, $ConsultaLoginEmailAndPassword);

       // $ConicidenciasFromRol = mysqli_num_rows($ConexForSeeRol);
       $CoinsidenciasFromId = mysqli_fetch_row($ConexForLoginId)[0];
        $CoincidenciasRepetidosPasswordAndEmails = mysqli_num_rows($ConexForLoginEmailAndPassword);

       // echo $CoincidenciasRepetidos;
        //$CoincidenciasRepetidos = $ConexForSeeCoincidencias -> num_rows;
        
        
   

      if($CoincidenciasRepetidosPasswordAndEmails > 0 ){
         


        $RowForSeeRol = mysqli_fetch_array($ConexForLoginEmailAndPassword, MYSQLI_NUM);
        session_start();
        $_SESSION['usuario']  = $Email;
        $_SESSION['idUser']  = $CoinsidenciasFromId; 
        $_SESSION['roluser'] = $RowForSeeRol[6];


        if($RowForSeeRol[6] == 1){
          ?>
          <h3 class = "fine"> Te has logeado correctamente!!:) . <?php echo ($RowForSeeRol[6]);?></h3>
          <h5>Redireacionando a admin</h5>
          <meta http-equiv="refresh" content="5; url=my/admin/inicioadmi.php"> 
          <?php
        }else if($RowForSeeRol[6] == 2){
          ?>
          <h3 class = "fine"> Te has logeado correctamente!!:) . <?php echo ($RowForSeeRol[6]);?></h3>
          <h5>Redireacionando a usuario</h5>
          <meta http-equiv="refresh" content="3; url=my/inicio.php"> 
          <?php
        }else{
          ?>
          <h3 class = "bad"> Error: Ro1 </h3>
          <?php
        }
 
  
        
        
      }else if($CoincidenciasRepetidosPasswordAndEmails <= 0){ 
       // echo $CoincidenciasRepetidos; //Ver cuantos (en int) se han registrado
        ?>
        <h3 class = "bad"> Su email o password estan incorrectos o no exiten</h3>
        <?php
        
      }else{
        ?>
        <h3 class = "bad"> Algo salio mal al logearte, intentalo de nuevo, lo sentimos :C</h3> 
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

      <hr />

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


      <!-- Bootstrap core JavaScript -->
      <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    
    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>





</body>
</html>