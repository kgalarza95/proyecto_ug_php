<?php
include_once '../config/conexion.php';
include_once '../model/pagina1Model.php';


$mensaje_error = "";
$pagina1Model = new Pagina1Model();

if (isset($_GET['accion'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM usuario WHERE id = $id";
    echo $query;
    $result = mysqli_query($conexion, $query);

    if (!$result) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "No se pudo realizar el insert";
        echo "Error";
        header("Location: ../vista/pagina1.php?mensaje=$mensaje_error");
        die();
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "";
        header("Location: ../vista/pagina1.php");
        die();
    }
}


if (isset($_POST['Registar'])) {

    $identificacion = $_POST['identificacion'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    //$bloque = $_POST['bloque'];


    $result = $pagina1Model->insertarRegistro(
        $identificacion,
        $usuario,
        $pass,
        $nombres,
        $apellidos
    );


    if (!$result) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "No se pudo realizar el insert";
        echo "Error";
        header("Location: ../vista/pagina1.php?mensaje=$mensaje_error");
        die();
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "";
        header("Location: ../vista/pagina1.php");
        die();
    }
}



if (isset($_POST['Actualizar'])) {
    $id = $_POST['id'];
    $identificacion = $_POST['identificacion'];
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $bloque = $_POST['bloque'];


    $result = $pagina1Model->upRegistro(
        $id,
        $identificacion,
        $usuario,
        $pass,
        $nombres,
        $apellidos,
        $bloque
    );


    if (!$result) {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "No se pudo realizar la actualizacion";
        echo "Error";
        header("Location: ../vista/pagina1.php?mensaje=$mensaje_error");
        die();
    } else {
        echo '<script>alert("Welcome to Geeks for Geeks")</script>';
        $mensaje_error = "";
        header("Location: ../vista/pagina1.php");
        die();
    }
}
