<?php

session start();
$hostname = 'localhost';
$user = 'root'
$pwd = '';
$database = 'proyecto_das';

$conexion = mysqli_connect($hostame, $user, $pwd, $proyecto_das);
if(!$conexion)
    die("Error de conexion a la BD " . mysqli_connect_error() );
else
    echo("Conexion exitosa =) ");


 ?>
