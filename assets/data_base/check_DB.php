<?php

require 'conex_data_base.php';


$conexion = new ConexionDB();
$imprimir = $conexion->getconexion();
echo $imprimir[0];
//echo $imprimir[1];