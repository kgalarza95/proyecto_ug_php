<?php
include_once '../config/conexion.php';


class SuscripcionModel
{

    function __construct()
    {
    }

    function insertarRegistro(
        $nombre,
        $apellido,
        $email,
        $direccion,
        $sexo,
        $estudios,
        $intereses,
        $mensaje
    ) {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "INSERT INTO bd_php_p2.susccripcion
        (nombre,apellido,email,direccion,sexo,estudios,intereses,mensaje)
        VALUES('$nombre','$apellido','$email','$direccion','$sexo','$estudios','$intereses','$mensaje'); ";

        $result = mysqli_query($cnx, $sql);
        return $result;
    }

    function getRegistros()
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "SELECT count(1) cant FROM bd_php_p2.susccripcion; ";
        $result = mysqli_query($cnx, $sql);
        return $result;
    }
}
