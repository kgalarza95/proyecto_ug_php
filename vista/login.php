<?php
session_start();
session_destroy();
include_once("../controller/login.php");

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.101.0">
  <title>Iniciar Sesión</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">



  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../css/signin.css" rel="stylesheet">
</head>

<body class="text-center">

  <form class="form-signin" action="../controller/login.php" method="post">
    <img class="mb-4" src="../img/login.png" alt="" width="300" height="200">
    <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
    <label for="inputEmail" class="sr-only">Usuario</label>
    <input type="text" id="inputEmail" name="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
    <label for="inputPassword" class="sr-only">Contraseña</label>
    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Contraseña" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Recordarme
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
    <h3 class="mt-5 mb-3"><?php echo isset($_GET['mensaje']) ? $_GET['mensaje'] : $mensaje_error ?></h3>
    <p class="mt-5 mb-3 text-muted">&copy; Universidad de Guayaquil 2022</p>
  </form>


</body>

</html>