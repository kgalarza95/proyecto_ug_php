<?php
include_once '../config/conexion.php';


//$destino = "jcesar.vt1984@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

//esto se adiciono
//$mysqli = new mysqli("localhost","ambiente")



/*
if (!$conexion)
{echo "Error de conexion";
exit;}
//
if(isset($_POST["nombre"],$_POST["email"],$_POST["telefono"],$_POST["compañia"],$_POST["asunto"],$_POST["mensaje"]) and $_POST["nombre"]!="", and $_POST["email"]!="", and $_POST["telefono"]!="", and $_POST["compañia"]!="", and $_POST["asunto"]!="")
{

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$compañia = $_POST['compañia'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$consulta = "INSERT INTO ambiente (nombre, email, telefono, compañia, asunto, mensaje)" values ('$nombre', '$email', '$telefono', '$compañia', '$asunto', '$mensaje');

if (mysqli_query($mysqli,$ambiente)){
  echo "<p>Registro agregado</p>";
}
else {echo "<p>Fallo al agregar registro</p>";
}


$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n" . "Télefono :" . $telefono . "\n" . "Compañia :" . $compañia . "\n". "Mensaje :" . $mensaje;
mail($destino, $asunto, $mensajeCompleto, $header);
header('Location: index2.html');
*/



if (isset($_POST["nombre"])) {

  $nombre = $_POST['nombre'];
  $email = $_POST['email'];
  $telefono = $_POST['telefono'];
  $empresa = $_POST['empresa'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];

  $query = "INSERT INTO frm_registro(nombre, correo, telefono, empresa, asunto, mensaje) 
              values ('$nombre', '$email', '$telefono', '$empresa', '$asunto', '$mensaje')";

  $result = mysqli_query($conexion, $query);


  if (!$result) {
    echo " error " . mysqli_error($conexion);
    die("Error al guardar ...");
    echo "<script>
               alert('No se pudo registrar'" . mysqli_error($conexion).");
               window.location = '../vista/registro.php';
        </script>";
  } else {
    $_SESSION["message"] = "Registro guardado exitosamente =)";
    $_SESSION['message_type'] = "success";
   /* header("Location: ../vista/registro.php");
    echo "<script>alert('Error al guardar')</script>";*/

    echo "<script>
               alert('Registro guardado exitosamente');
               window.location = '../vista/registro.php';
        </script>";
  }
}
