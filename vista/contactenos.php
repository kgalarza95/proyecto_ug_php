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
    <div class="container">
        <div class="row">

            <div class="col-sm-8 mb-5">



                <form action="../controller/contactanosController.php" method="POST" class="p-5 bg-white">

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" onkeypress='return soloLetras(event)'>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="telefono">Telefono</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" maxlength="10" onkeypress=' return soloNumeros(event)'>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="mensaje">Mensaje</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pill px-4 py-2" id="btn_enviar" name="btn_enviar" value="Contactarme">Contactarme</button>
                        </div>
                    </div>


                </form>


            </div>

            <div class="col-sm-4 text-center ">
                <div class="bg-white mt-5">
                    <h4 class="titulo">
                        Número de lista de espera:
                        <?php
                        include_once "../controller/contactanosController.php";
                        ?>
                    </h4>

                </div>
            </div>

        </div>
    </div>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>