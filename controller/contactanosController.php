<?php
include_once '../config/conexion.php';
include_once '../model/contactanosModel.php';


$mensaje_error = "";
$contactanosModel = new ContactanosModel();
##echo "llega ";

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['btn_enviar'])) {
    ##echo "llega post";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $result = $contactanosModel->insertarRegistro($nombre, $email, $telefono, $mensaje);


    print_r($result);
    #echo $result->num_rows;

    /*si funciona */
    if (!$result) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "No se pudo realizar el insert";
        echo "Error";
        header("Location: ../vista/contactenos.php?mensaje=$mensaje_error");
        die();
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "";
        header("Location: ../vista/contactenos.php");
        die();
    }

    /*if ($result->num_rows > 0) {
        $mensaje_error = "";
        header("Location: ../vista/index.php");
        die();
    } else {
        $mensaje_error = "Credenciales incorrectas";
        echo "Credenciales incorrectas";
        header("Location: ../vista/login.php?mensaje=$mensaje_error");
        die();
    }*/
}




$rows = mysqli_fetch_assoc($contactanosModel->getRegistros());

  
echo  $rows["cant"];