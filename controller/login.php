<?php
include_once '../config/conexion.php';
//include("baseDatos.php");


$mensaje_error = "";

if (isset($_POST['inputEmail']) && isset($_POST['inputPassword'])) {
    $usuario = $_POST['inputEmail'];
    $clave = $_POST['inputPassword'];

    $query = "select * from usuario u where u.usuario = '$usuario' and pass = '$clave' ";
    $result = mysqli_query($conexion, $query);



    echo $result->num_rows;

    /*si funciona 
    if (!$result) {
        die('No se pudo consultar:');
    } else {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["usuario"];
            echo $row["pass"];
        }
    }*/

    if ($result->num_rows > 0) {
        $mensaje_error = "";
        header("Location: ../vista/index.php");
        die();
    } else {
        $mensaje_error = "Credenciales incorrectas";
        echo "Credenciales incorrectas";
        header("Location: ../vista/login.php?mensaje=$mensaje_error");
        die();
    }
}
