<?php
require  'C:\xampp\htdocs\vapesuissee\assets\DataBase\metodosDatos.php';


class metodos{
/*
    public function listarProdcutos(){ //La funcion listarProdcutos contiene toda la lista de prodcutos en filas de la base de datos 'productos'
        $conexion = new ConexionDB;
        $callFunctionConex = $conexion->getConexion(); 
   
       $ConsultaListaProductos = "SELECT * FROM `productos`"; 
       $listaProductos = $callFunctionConex ->query($ConsultaListaProductos);

       while($row = $listaProductos->fetch()){
            //$resulListaProductos[] =$row; 
            echo $row['codpro']."<br>"; 
            echo $row['descripcion']."<br>"; 
            echo $row['precio']."<br>"; 
            echo $row['stock']."<br>"; 
            echo $row['estado']."<br>"; 
            echo $row['imagen']."<br>"; 
            echo $row['fecha']."<br>"; 
       }
       /*
       $prepareConsulta = $callFunctionConex->prepare("SELECT * FROM `prodcutos`"); //preparara la consulta a la base de datos my sql
       $prepareConsulta->execute(); //ejecutar la preparacion de la consulta

       foreach($prepareConsulta as $row){
           $listaProdcutos[] = $row; 
       } 

       return $listaProductos;


    } */

    public function BuscarRepetidosBD($user,$pass,$conex){
        $conexion = new ConexionDB;
        $callFunctionConex = $conexion->getConexion(); 
        $ConsultaRepetidos = "SELECT * FROM usuarios WHERE usuario = '$user' AND password = '$pass'";
        $FiltroDatosIguales = $callFunctionConex ->query($ConsultaRepetidos);

        if($FiltroDatosIguales->num_rows > 1){
            return 1;
        }else{
            return 0;
        }


    }
}




