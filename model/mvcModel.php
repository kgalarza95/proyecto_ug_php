<?php
include_once '../config/conexion.php';


class MvcModel
{

    function __construct()
    {
    }

    function upRegistro($ID, $RESPUESTA)
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "update bd_php_p2.frm_registro
                    set respuesta = '$RESPUESTA'
                    where id = $ID;";

        $result = mysqli_query($cnx, $sql);
        return $result;
    }

    function getRegistros()
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "SELECT id, nombre, correo, mensaje, respuesta FROM bd_php_p2.frm_registro; ";
        $result = mysqli_query($cnx, $sql);
        return $result;
    }


    //en desuso
    function getRegistrosList()
    {
        include_once '../config/conexion.php';
        $cnx = Conexion::conectar();
        $sql = "SELECT id, nombre, correo, mensaje, respuesta FROM bd_php_p2.frm_registro; ";
        $result = mysqli_query($cnx, $sql);
        $resultArray = array();
        while ($row = $result->fetc) {
            $resultArray[] = $row;
        }

        $this->conexion->exec("SET CHARACTER SET utf8");
        $resultado = $this->conexion->prepare($sqlstr);
        $resultado->execute();


        while ($row = $resultado->fetch(PDO::FETCH_ASSOC)) {
            $resultArray[] = $row;
        }
        $resultado->closeCursor();


        return $resultArray;
    }
}
