<?php
include_once '../config/conexion.php';
include_once '../model/mvcModel.php';


$mensaje_error = "";
$mvcModel = new MvcModel();
##echo "llega ";

if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['btn_enviar'])) {
    ##echo "llega post";
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $mensaje = $_POST['mensaje'];

    $result = $mvcModel->upRegistro($nombre, $email);


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
}




$rows = mysqli_fetch_assoc($mvcModel->getRegistros());
//echo  $rows["cant"];


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $resultArray = array();

    if (isset($_GET["vl"])) {
        $pagina = $_GET["vl"];

        //$rows = mysqli_fetch_assoc($mvcModel->getRegistros());
        $resultado = $mvcModel->getRegistros();
        while ($srow = mysqli_fetch_assoc($resultado)) {
            array_push($resultArray, $srow);
        }
        //$listarPaises = $_paises->listarEspania($pagina);
        header("Content-Type: application/json");
        echo json_encode($resultArray);
        http_response_code(200);
    }
} else {
    header("Content-Type: application/json");
    $datosArray = $__respuesta->error_405;
    echo json_encode($datosArray);
}

// if ($_SERVER["REQUEST_METHOD"] == "GET") {

//     if (isset($_GET["vl"])) {
//         $pagina = $_GET["vl"];
//         $listarPaises = $_paises->listarEspania($pagina);
//         header("Content-Type: application/json");
//         echo json_encode($listarPaises);
//         http_response_code(200);
//     }
// } else {
//     header("Content-Type: application/json");
//     $datosArray = $__respuesta->error_405;
//     echo json_encode($datosArray);
// }
