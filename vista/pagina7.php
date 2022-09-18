<?php
include("../config/conexion.php");
$sql_espania = "SELECT * FROM bd_php_p2.ciud_espania LIMIT 10 ";

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
    <section class="container-fluid ">
        <article class="row">


            <div class="col-md-12">
                <h1 class="mb-3 my-4 text-center titulo">
                    Información de consumo energético y cuidado de ambiente por sectores
                </h1>

                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>Inversión Protección Ambiental - Consumo Energético</caption>
                    <thead>
                        <tr>
                            <th scope="col">PERIODO</th>
                            <th scope="col">SECTOR</th>
                            <th scope="col">TIPO</th>
                            <th scope="col">AMBITO</th>
                            <th scope="col">ANDALUCIA</th>
                            <th scope="col">ARAGON</th>
                            <th scope="col">ASTURIAS</th>
                            <th scope="col">BALEARS</th>
                            <th scope="col">CANARIAS</th>
                            <th scope="col">CANTABRIA</th>
                            <th scope="col">CASTILLA_LEON</th>
                            <th scope="col">CASTILLA_LA_MANCHA</th>
                            <th scope="col">CATALUNIA</th>
                            <th scope="col">COMUNITAT_VALENCIANA</th>
                            <th scope="col">EXTREMADURA</th>
                            <th scope="col">GALICIA</th>
                            <th scope="col">MADRID</th>
                            <th scope="col">MURCIA</th>
                            <th scope="col">NAVARRA</th>
                            <th scope="col">PAIS_VASCO</th>
                            <th scope="col">RIOJA</th>
                            <th scope="col">TOTAL_NACIONAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql_espania);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td scope="row"><?php echo $srow["PERIODO"]; ?></td>
                                <td scope="row"><?php echo $srow["SECTOR"]; ?></td>
                                <td scope="row"><?php echo $srow["TIPO"]; ?></td>
                                <td scope="row"><?php echo $srow["AMBITO"]; ?></td>
                                <td scope="row"><?php echo $srow["ANDALUCIA"]; ?></td>
                                <td scope="row"><?php echo $srow["ARAGON"]; ?></td>
                                <td scope="row"><?php echo $srow["ASTURIAS"]; ?></td>
                                <td scope="row"><?php echo $srow["BALEARS"]; ?></td>
                                <td scope="row"><?php echo $srow["CANARIAS"]; ?></td>
                                <td scope="row"><?php echo $srow["CANTABRIA"]; ?></td>
                                <td scope="row"><?php echo $srow["CASTILLA_LEON"]; ?></td>
                                <td scope="row"><?php echo $srow["CASTILLA_LA_MANCHA"]; ?></td>
                                <td scope="row"><?php echo $srow["CATALUNIA"]; ?></td>
                                <td scope="row"><?php echo $srow["COMUNITAT_VALENCIANA"]; ?></td>
                                <td scope="row"><?php echo $srow["EXTREMADURA"]; ?></td>
                                <td scope="row"><?php echo $srow["GALICIA"]; ?></td>
                                <td scope="row"><?php echo $srow["MADRID"]; ?></td>
                                <td scope="row"><?php echo $srow["MURCIA"]; ?></td>
                                <td scope="row"><?php echo $srow["NAVARRA"]; ?></td>
                                <td scope="row"><?php echo $srow["PAIS_VASCO"]; ?></td>
                                <td scope="row"><?php echo $srow["RIOJA"]; ?></td>
                                <td scope="row"><?php echo $srow["TOTAL_NACIONAL"]; ?></td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>
            </div>
        </article>
    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>