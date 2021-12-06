<?php

/*
class ConexionDB{
    private $server = "localhost";
    private $userName = "root"; 
    private  $password = "";
    private  $dataBase = "vapesuissee";
    public $conex;

    public function getConexion(){ //la funcion getconexion alamecena la conexion con la base de datos
    
        $this->conn = null;

        try{
            $this->conex = new PDO("mysql:host=" . $this->server .";dbname=" . $this->dataBase, $this->userName, $this->password);
         // new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
         $this->conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            $msg1 = " <b>Filtro 1: </b>La conexión fue exitosa<br>";
        }catch (PDOExepcion $e){
            $error = die($e->getMessage());
            $msg1 = " Filtro 1: La conexion fallo: ". $error;
        }


       // return array($msg1, $conex);
       return $this->conex;
    }

        
} */


/*
$server = "localhost";
$userName = "root"; 
$password = "";
$dataBase = "vapesuissee"; $conex;

try{
    $conex = new PDO("mysql:host=" . $server .";dbname=" . $dataBase, $userName, $password);
 // new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
 // $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
    echo  " <b>Filtro 1: </b>La conexión fue exitosa<br>";
}catch (PDOExepcion $e){
    $error = die($e->getMessage());
    echo " Filtro 1: La conexion fallo: ". $error;
} */
$server = "localhost";
$userName = "root"; 
$password = "";
$dataBase = "vapesuissee"; 


$conex = mysqli_connect($server, $userName, $password, $dataBase);

if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}else{
   // echo "conexion exitosa";
}



//$conexion = new ConexionDB();
//$imprimir = $conexion->getconexion();
//echo $imprimir[0];
//echo $imprimir[1];












