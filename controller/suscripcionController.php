<?php
include_once '../config/conexion.php';
include_once '../model/suscripcionModel.php';


$mensaje_error = "";
$suscripcionModel = new SuscripcionModel();
##echo "llega ";

if (isset($_POST['btn_suscribe'])) {

    $nombre = $_POST['txt_nombres'];
    $apellido = $_POST['txt_apellidos'];
    $email = $_POST['txt_correo'];
    $direccion = $_POST['txt_direccion'];
    $sexo = $_POST['sexo'];
    $estudios = $_POST['estudios'];
    $intereses = $_POST['intereses'];
    $mensaje = $_POST['mensaje'];

    $result = $suscripcionModel->insertarRegistro(
        $nombre,
        $apellido,
        $email,
        $direccion,
        $sexo,
        $estudios,
        $intereses,
        $mensaje
    );


    if (!$result) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "No se pudo realizar el insert";
        echo "Error";
        header("Location: ../vista/suscripcion.php?mensaje=$mensaje_error");
        die();
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "";
        header("Location: ../vista/suscripcion.php");
        die();
    }
}


//$rows = mysqli_fetch_assoc($suscripcionModel->getRegistros());
