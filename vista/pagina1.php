<?php
include("../config/conexion.php");
$sql = "SELECT * FROM bd_php_p2.usuario; ";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> -->

    <title>Universidad de Guayaquil</title>

    <!--<link rel="stylesheet" href="estilosForm.css";>-->
    <?php include "../generales/head.php"; ?>
</head>

<body>
    <?php include_once "../generales/nav_bar.php" ?>
    <section class="container mt-5">
        <div class="row  mb-2">
            <div class="col-sm-4">
                <h1>Administración de usuarios del Sistema</h1>
                <form action="../controller/pagina1Controller.php" method="POST">
                    <input type="hidden" id="id" name="id">
                    <input type="text" class="form-control mb-3" name="identificacion" id="identificacion" placeholder="Identificación" onkeypress=' return soloNumeros(event)' maxlength="13" required>
                    <input type="text" class="form-control mb-3" name="usuario" id="usuario" placeholder="Usuario" required>
                    <input type="password" class="form-control mb-3" name="pass" id="pass" placeholder="Contraseña" required>
                    <input type="text" class="form-control mb-3" name="nombres" id="nombres" placeholder="Nombres" onkeypress='return soloLetras(event)' required>
                    <input type="text" class="form-control mb-3" name="apellidos" id="apellidos" placeholder="Apellidos" onkeypress='return soloLetras(event)' required>
                    <input type="text" class="form-control mb-3" name="bloque" id="bloque" placeholder="Bloqueo:  S o N" maxlength="1">

                    <div class="row">
                        <div class="col-sm-3">
                            <input type="submit" id="btn_registrar" class="btn btn-primary" value="Registar" name="Registar">
                        </div>
                        <div class="col-sm-3">
                            <input type="submit" id="btn_actualializar" class="btn btn-secondary" value="Actualizar" name="Actualizar">
                        </div>
                        <div class="col-sm-3 ml-2">
                            <input type="reset" class="btn btn-danger" value="Limpiar">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-sm-8 ">

                <h1>| Registros</h1>
                <table id="tblUsuarios" class="table table-bordered table-striped mb-0 table-hover" style="width: 100%">
                    <caption>Usuarios del Sistemas</caption>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Identificacion</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Bloqueo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $srow["ID"]; ?></th>
                                <td scope="row"><?php echo $srow["identificacion"]; ?></td>
                                <td scope="row"><?php echo $srow["USUARIO"]; ?></td>
                                <td scope="row"><?php echo $srow["PASS"]; ?></td>
                                <td scope="row"><?php echo $srow["nombres"]; ?></td>
                                <td scope="row"><?php echo $srow["apellidos"]; ?></td>
                                <td scope="row"><?php echo $srow["BLOQUEO"]; ?></td>
                                <td>
                                    <a href="../controller/pagina1Controller.php?id=<?php echo $srow["ID"] ?>&accion=eliminar" class="btn btn-danger btn_eliminar">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>

            </div>
        </div>
    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
    <script src="../js/pagina1.js"></script>
</body>

</html>