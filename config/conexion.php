<?php

//session_start();
$hostname = 'localhost';
$user = 'root';
$pwd = '';
$database = 'bd_php_p2';

$conexion = mysqli_connect($hostname, $user, $pwd, $database);

if (!$conexion) {
    die("Error de conexion a la BD " . mysqli_connect_error());
} /*else {
    echo ("Conexion exitosa =) ");
}
*/

mysqli_select_db($conexion, $database);
return $conexion;