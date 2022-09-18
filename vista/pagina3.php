<?php
include("../config/conexion.php");
$sql = "SELECT p.NOMBRE, pe.* FROM bd_php_p2.petroleo_p3 pe join bd_php_p2.pais p on p.id = pe.id_pais; ";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> -->

    <title>Universidad de Guayaquil</title>

    <!--<link rel="stylesheet" href="estilosForm.css";>-->
    <?php include "../generales/head.php"; ?>

    <style>
        .my-custom-scrollbar {
            position: relative;
            height: 450PX;
            overflow: auto;
        }

        .table-wrapper-scroll-y {
            display: block;
        }
    </style>
</head>

<body>
    <?php include_once "../generales/nav_bar.php" ?>
    <section class="container mt-5">
        <article class="row">

            <div class="col-md-12">
                <h1 class="mb-3 my-4 text-center">
                    Información de
                    <strong class="letra-negra font-weight-bold">Venta de petroleo </strong>
                </h1>
                <div class="table-wrapper-scroll-y my-custom-scrollbar">
                    <!-- <table class="table table-sm table-dark  table-hover table-bordered table-striped" style="width: 100%"> -->
                    <table class="table table-bordered table-striped mb-0 table-hover" style="width: 100%">
                        <caption>ventas de petroleo de los paises de Ecuador, Colombia, Peru, Brasil y Argentina de los años 2020, 2021, 2022</caption>
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOMBRE</th>
                                <th scope="col">VENTA</th>
                                <th scope="col">MES</th>
                                <th scope="col">AÑO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $resultado = mysqli_query($conexion, $sql);
                            while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                                <tr>
                                    <th scope="row"><?php echo $srow["ID"]; ?></th>
                                    <td scope="col"><?php echo $srow["NOMBRE"]; ?></td>
                                    <td scope="col"><?php echo $srow["VENTA"]; ?></td>
                                    <td scope="col"><?php echo $srow["MES"]; ?></td>
                                    <td scope="col"><?php echo $srow["ANIO"]; ?></td>
                                </tr>
                            <?php  }
                            mysqli_free_result($resultado); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </article>
    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>