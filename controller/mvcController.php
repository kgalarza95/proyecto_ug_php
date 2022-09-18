<?php
include_once '../config/conexion.php';
include_once '../model/mvcModel.php';


$mensaje_error = "";
$mvcModel = new MvcModel();

if (isset($_POST['btn_enviar'])) {

    $id = $_POST['id'];
    $mensaje = $_POST['mensaje'];

    $result = $mvcModel->upRegistro($id, $mensaje);

    /*si funciona */
    if (!$result) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "No se pudo realizar el update";
        echo "Error";
        header("Location: ../vista/mvc.php?mensaje=$mensaje_error");
        die();
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "";
        header("Location: ../vista/mvc.php");
        die();
    }
}


$rows = mysqli_fetch_assoc($mvcModel->getRegistros());


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $resultArray = array();

    if (isset($_GET["vl"])) { //identificar que es llamada desde el js

        $resultado = $mvcModel->getRegistros();
        while ($srow = mysqli_fetch_assoc($resultado)) {
            array_push($resultArray, $srow);
        }

        header("Content-Type: application/json");
        echo json_encode($resultArray);
        http_response_code(200);
    }
} else {
    header("Content-Type: application/json");
    $datosArray = $__respuesta->error_405;
    echo json_encode($datosArray);
}
