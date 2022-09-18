<?php
include("../config/conexion.php");
$sql_var_flow = "SELECT * FROM bd_php_p2.ambito_var_flow_p5 LIMIT 10 ";
$sql_espania = "SELECT * FROM bd_php_p2.ciud_espania LIMIT 10 ";
$sql_pais = "SELECT * FROM bd_php_p2.pais LIMIT 10 ";
$sql_residuos = "SELECT * FROM bd_php_p2.residuos_urbanos LIMIT 10 ";
$sql_ods = "SELECT * FROM bd_php_p2.ods LIMIT 10 ";
$sql_areas = "SELECT * FROM bd_php_p2.area_protegida LIMIT 10 ";
//$consulta_areasprotegidas = "SELECT *FROM consulta_areasprotegidas LIMIT 10";

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
        &nbsp;
        <h3 class="text-center titulo">Balance Energético 1971-2019 - Consultas</H3>

        <!-- formulario -->
        <div class="">
            <h4>Filtro de Búsqueda</h4>
            <form method="post" id="form">
                <div class="row">
                    <div class="col-sm-10">
                        <select id="opciones" class="custom-select" name="opciones" required <?php $opciones = $_POST['opciones'] ?>>
                            <option value="0" selected>Seleccione una opción</option>
                            <option value="1">Residuos Urbanos Tratamientos 1990-2019</option>
                            <option value="2">Inversión Protección Ambiental España 2008-2018</option>
                            <option value="3">Ambiente Biodiversidad áreas protegidas 2011-2019</option>
                            <option value="4">ODS Objetivo Desarrollo Sostenible</option>
                            <option value="5">Ambito VAR Flow ODS</option>
                            <option value="6">Países ISO 3166_1 Cod2-3 caracteres</option>
                        </select>&nbsp;
                    </div>
                    <div class="col-sm-2">
                        <button class="btn btn-primary " type="submit" value="Consultar">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <?php
        switch ($opciones) {
            case 1: //residuos
        ?>
                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>Residuos Urbanos Tratamientos 1990-2019</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID_RESIDUOS</th>
                            <th scope="col">ANIO_RESIDUOS</th>
                            <th scope="col">PAIS_RESIDUOS</th>
                            <th scope="col">CAT_RESIDUOS</th>
                            <th scope="col">UNIDAD_RESIDUOS</th>
                            <th scope="col">IMPORT_RESIDUOS</th>
                            <th scope="col">USO_RESIDUOS</th>
                            <th scope="col">GAS_RESIDUOS</th>
                            <th scope="col">ZONAS_RESIDUOS</th>
                            <th scope="col">INVERSION_RESIDUOS</th>
                            <th scope="col">TRATAMIENTO_RESIDUOS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql_residuos);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $srow["ID_RESIDUOS"]; ?></th>
                                <td scope="col"><?php echo $srow["ANIO_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["PAIS_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["CAT_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["UNIDAD_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["IMPORT_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["USO_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["GAS_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["ZONAS_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["INVERSION_RESIDUOS"]; ?></td>
                                <td scope="col"><?php echo $srow["TRATAMIENTO_RESIDUOS"]; ?></td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>
            <?php
                break;
            case 2: //espania
            ?>
                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>Inversión Protección Ambiental España 2008-2018</caption>
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
            <?php
                break;
            case 3: //areas
            ?>
                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>Ambiente Biodiversidad áreas protegidas 2011-2019</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID_AREASPROTEGIDAS</th>
                            <th scope="col">ANIO_AREASPROTEGIDAS</th>
                            <th scope="col">PAIS_AREASPROTEGIDAS</th>
                            <th scope="col">CAT_AREASPROTEGIDAS</th>
                            <th scope="col">UNIDAD_AREASPROTEGIDAS</th>
                            <th scope="col">IMPORT_AREASPROTEGIDAS</th>
                            <th scope="col">USO_AREASPROTEGIDAS</th>
                            <th scope="col">GAS_AREASPROTEGIDAS</th>
                            <th scope="col">ZONAS_AREASPROTEGIDAS</th>
                            <th scope="col">INVERSION_AREASPROTEGIDAS</th>
                            <th scope="col">TRATAMIENTO_AREASPROTEGIDAS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql_areas);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td scope="row"><?php echo $srow["ID_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["ANIO_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["PAIS_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["CAT_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["UNIDAD_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["IMPORT_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["USO_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["GAS_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["ZONAS_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["INVERSION_AREASPROTEGIDAS"]; ?></td>
                                <td scope="row"><?php echo $srow["TRATAMIENTO_AREASPROTEGIDAS"]; ?></td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>
            <?php
                break;
            case 4: //ods
            ?>
                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>ODS Objetivo Desarrollo Sostenible</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">OBJETIVO</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">DESCRIPCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql_ods);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td scope="row"><?php echo $srow["ID"]; ?></td>
                                <td scope="row"><?php echo $srow["OBJETIVO"]; ?></td>
                                <td scope="row"><?php echo $srow["NOMBRE"]; ?></td>
                                <td scope="row"><?php echo $srow["DESCRIPCIÓN"]; ?></td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>
            <?php
                break;
            case 5: //ambito
            ?>
                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>Ambito VAR Flow ODS</caption>
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">CÓDIGO</th>
                            <th scope="col">AMBITO_VAR_FLOW</th>
                            <th scope="col">CÓD. ODS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql_var_flow);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <th scope="row"><?php echo $srow["ID"]; ?></th>
                                <td scope="col"><?php echo $srow["CODIGO"]; ?></td>
                                <td scope="col"><?php echo $srow["AMBITO_VAR_FLOW"]; ?></td>
                                <td scope="col"><?php echo $srow["ODS"]; ?></td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>
            <?php
                break;
            case 6: //paises
            ?>
                <table class="table table-sm table-dark table-responsive table-hover table-bordered">
                    <caption>Países ISO 3166_1 Cod2-3 caracteres</caption>
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">NAME</th>
                            <th scope="col">NOM</th>
                            <th scope="col">ISO2</th>
                            <th scope="col">ISO3</th>
                            <th scope="col">PHONE_CODE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $resultado = mysqli_query($conexion, $sql_pais);
                        while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                            <tr>
                                <td scope="row"><?php echo $srow["ID"]; ?></td>
                                <td scope="row"><?php echo $srow["NOMBRE"]; ?></td>
                                <td scope="row"><?php echo $srow["NAME"]; ?></td>
                                <td scope="row"><?php echo $srow["NOM"]; ?></td>
                                <td scope="row"><?php echo $srow["ISO2"]; ?></td>
                                <td scope="row"><?php echo $srow["ISO3"]; ?></td>
                                <td scope="row"><?php echo $srow["PHONE_CODE"]; ?></td>
                            </tr>
                        <?php  }
                        mysqli_free_result($resultado); ?>
                    </tbody>
                </table>
        <?php
                break;
        }

        ?>

    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>