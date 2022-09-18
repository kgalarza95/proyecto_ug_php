<?php
include_once '../config/conexion.php';


class Pagina1Model
{

    function __construct()
    {
    }

    function insertarRegistro(
        $identificacion,
        $usuario,
        $pass,
        $nombres,
        $apellidos
    ) {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "INSERT INTO  BD_PHP_P2.USUARIO 
        (identificacion,USUARIO,PASS,nombres,apellidos)
        VALUES('$identificacion','$usuario','$pass','$nombres','$apellidos'); ";

        $result = mysqli_query($cnx, $sql);
        return $result;
    }

    function getRegistros()
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "SELECT * cant FROM bd_php_p2.USUARIO; ";
        $result = mysqli_query($cnx, $sql);
        return $result;
    }

    function upRegistro(
        $id,
        $identificacion,
        $usuario,
        $pass,
        $nombres,
        $apellidos,
        $bloqueo
    ) {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "update BD_PHP_P2.USUARIO 
        SET identificacion = '$identificacion',
            USUARIO = '$usuario',
            PASS = '$pass',
            nombres = '$nombres',
            apellidos = '$apellidos',
            BLOQUEO = '$bloqueo'
        WHERE ID = $id  ";

        $result = mysqli_query($cnx, $sql);
        return $result;
    }
}
