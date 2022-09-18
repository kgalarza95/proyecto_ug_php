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

class Conexion
{
    public static function conectar()
    {
        $mysql = new mysqli('localhost', 'root', '', 'bd_php_p2');
        $mysql->set_charset('utf8');

        if (mysqli_connect_errno()) {
            echo "Error de conexión " . mysqli_connect_errno();
        }
        return $mysql;
    }
}

print_r(Conexion::conectar());
