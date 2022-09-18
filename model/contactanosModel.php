<?php
include_once '../config/conexion.php';


class ContactanosModel
{

    function __construct()
    {
    }

    function insertarRegistro($NOMBRE, $CORREO, $TELEFONO, $MENSAJE)
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "INSERT INTO BD_PHP_P2.FRM_REGISTRO
                (NOMBRE,CORREO,TELEFONO,MENSAJE)
                VALUES
                ('$NOMBRE','$CORREO','$TELEFONO','$MENSAJE');";

        $result = mysqli_query($cnx , $sql);
        //echo "llega model";
        return $result;
    }

    function getRegistros()
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "SELECT count(1) cant FROM bd_php_p2.frm_registro; ";
        $result = mysqli_query($cnx , $sql);
        return $result;
    }
}
