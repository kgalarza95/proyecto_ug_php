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
        <div class="row">
            <div class="col-md-3">
                <h1> Registro de alumnos </h1>
                <form action="#" method="POST">

                    <input type="text" class="form-control mb-3" name="codigo" id="codigo" placeholder="cod estudiante" onkeypress=' return soloNumeros(event)' maxlength="5">
                    <input type="text" class="form-control mb-3" name="dni" id="dni" placeholder="cedula" onkeypress=' return soloNumeros(event)' maxlength="10">
                    <input type="text" class="form-control mb-3" name="nombres" id="nombres" placeholder="Nombres" onkeypress='return soloLetras(event)'>
                    <input type="text" class="form-control mb-3" name="apellidos" id="apellidos" placeholder="Apellidos" onkeypress='return soloLetras(event)'>

                    <input type="submit" id="btn-enviar" class="btn btn-primary">
                    <input type="submit" id="btn-actualializar" class="btn btn-secondary" value="Actualizar">
                    <input type="submit" id="btn-eliminar" class="btn btn-danger" value="Eliminar">
                </form>
            </div>

            <div class="col-md-8">

                <h1>tabla Codigo</h1>
                <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>CODIGO</th>
                            <th>Dni</th>
                            <th>Nombres</th>
                            <th>pellidos</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>