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
        <article class="row">

            <div class="col-md-12">
                <h1 class="mb-3 my-4 text-center">
                    Información de la
                    <strong class="letra-negra font-weight-bold">venta de petroleo </strong>
                </h1>

                <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>NOMBRE</th>
                            <th>VENTA</th>
                            <th>MES</th>
                            <th>AÑO</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </article>
    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>