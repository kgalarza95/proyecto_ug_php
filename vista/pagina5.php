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
        <h3 class="titulo1">A continuación, indique la sección a consultar:</H3>&nbsp;


        <!--  mensajes -->


        <!-- formulario -->
        <div class="form-registro">
            <h4>Escoja una opción</h4>
            <form method="post" id="form">
                <div class="combo1">

                    Balance Energético 1971-2019:
                    <select id="opciones" class="opciones" name="opciones" required <?php $opciones = $_POST['opciones'] ?>>
                        <option value="0">Seleccione una opción</option>
                        <option value="1">Residuos Urbanos Tratamientos 1990-2019</option>
                        <option value="2">Inversión Protección Ambiental España 2008-2018</option>
                        <option value="3">Ambiente Biodiversidad áreas protegidas 2011-2019</option>
                        <option value="4">ODS Objetivo Desarrollo Sostenible</option>
                        <option value="5">Ambito VAR Flow ODS</option>
                        <option value="6">Países ISO 3166_1 Cod2-3 caracteres</option>
                    </select>&nbsp;

                </div>



                <input class="btn btn-primary  " type="submit" onclick="validarcombo()" value="Consultar">

            </form>


        </div>

        <!-- TABLA DE CONSULTAS -->

        <div class="container-table">
            <div class="table__title">Datos Registrados</div>
            <div class="table__header">Año</div>
            <div class="table__header">País</div>
            <div class="table__header">Cat. Energía</div>
            <div class="table__header">Unidad Medida</div>
            <div class="table__header">Import/Export</div>
            <div class="table__header">Uso comb. Fósiles</div>
            <div class="table__header">P. gas natural</div>
            <div class="table__header">EECF España Zonas Protegidas</div>
            <div class="table__header">EECF España Inv. Protección M.A</div>
            <div class="table__header">Trat. residuos en España</div>
            <?php

            switch ($opciones) {
                case 1:

                    $resultado = mysqli_query($conexion, $consulta_residuosurbanos);
                    while ($srow = mysqli_fetch_assoc($resultado)) { ?>
                        <div name="anio1" class="table__item"><?php echo $srow["anio_residuos"]; ?></div>
                        <div name="pais1" class="table__item"><?php echo $srow["pais_residuos"]; ?></div>
                        <div name="categoria1" class="table__item"><?php echo $srow["cat_residuos"]; ?></div>
                        <div name="unidad1" class="table__item"><?php echo $srow["unidad_residuos"]; ?></div>
                        <div name="importa1" class="table__item"><?php echo $srow["import_residuos"]; ?></div>
                        <div name="uso1" class="table__item"><?php echo $srow["uso_residuos"]; ?></div>
                        <div name="gas1" class="table__item"><?php echo $srow["gas_residuos"]; ?></div>
                        <div name="zonas1" class="table__item"><?php echo $srow["zonas_residuos"]; ?></div>
                        <div name="inversion1" class="table__item"><?php echo $srow["inversion_residuos"]; ?></div>
                        <div name="tratamiento1" class="table__item"><?php echo $srow["tratamiento_residuos"]; ?></div>
                    <?php  }
                    mysqli_free_result($resultado);

                    break;
                case 2:
                    $resultadoInversiones = mysqli_query($conexion, $consulta_inversion);
                    while ($srow = mysqli_fetch_assoc($resultadoInversiones)) { ?>
                        <div class="table__item"><?php echo $srow["anio_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["pais_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["cat_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["unidad_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["import_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["uso_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["gas_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["zonas_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["inversion_inversion"]; ?></div>
                        <div class="table__item"><?php echo $srow["tratamiento_inversion"]; ?></div>
                    <?php  }
                    mysqli_free_result($resultadoInversiones);

                    break;
                case 3:

                    $resultadoAreas = mysqli_query($conexion, $consulta_areasprotegidas);
                    while ($srow = mysqli_fetch_assoc($resultadoAreas)) { ?>
                        <div class="table__item"><?php echo $srow["anio_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["pais_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["cat_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["unidad_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["import_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["uso_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["gas_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["zonas_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["inversion_areasprotegidas"]; ?></div>
                        <div class="table__item"><?php echo $srow["tratamiento_areasprotegidas"]; ?></div>
                    <?php  }
                    mysqli_free_result($resultadoAreas);
                    break;
                case 4:

                    $resultadoDesarrollo = mysqli_query($conexion, $consulta_desarrollosostenible);
                    while ($srow = mysqli_fetch_assoc($resultadoDesarrollo)) { ?>
                        <div class="table__item"><?php echo $srow["anio_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["pais_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["cat_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["unidad_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["import_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["uso_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["gas_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["zonas_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["inversion_desarrollosostenible"]; ?></div>
                        <div class="table__item"><?php echo $srow["tratamiento_desarrollosostenible"]; ?></div>
                    <?php  }
                    mysqli_free_result($resultadoDesarrollo);
                    break;
                case 5:

                    $resultadoAmbito = mysqli_query($conexion, $consulta_ambitovar);
                    while ($srow = mysqli_fetch_assoc($resultadoAmbito)) { ?>
                        <div class="table__item"><?php echo $srow["anio_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["pais_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["cat_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["unidad_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["import_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["uso_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["gas_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["zonas_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["inversion_ambitovar"]; ?></div>
                        <div class="table__item"><?php echo $srow["tratamiento_ambitovar"]; ?></div>
                    <?php  }
                    mysqli_free_result($resultadoAmbito);
                    break;
                case 6:
                    $resultadoPais = mysqli_query($conexion, $consulta_paisesiso);
                    while ($srow = mysqli_fetch_assoc($resultadoPais)) { ?>
                        <div class="table__item"><?php echo $srow["anio_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["pais_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["cat_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["unidad_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["import_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["uso_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["gas_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["zonas_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["inversion_paisesiso"]; ?></div>
                        <div class="table__item"><?php echo $srow["tratamiento_paisesiso"]; ?></div>
            <?php  }
                    mysqli_free_result($resultadoPais);
                    break;
            }


            ?>




        </div>
    </section>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>