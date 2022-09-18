<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" /> -->

    <title>Universidad de Guayaquil</title>

    <!--<link rel="stylesheet" href="estilosForm.css";>-->
    <?php include "../generales/head.php"; ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <style>
        table.dataTable tbody tr.selected {
            color: white !important;
            background-color: #2bab0d !important;
        }

        #tblInf tbody tr.selected {

            background-color: #2bab0d !important;
        }

        table.dataTable tbody tr.selected>* {
            box-shadow: inset 0 0 0 9999px rgb(0 102 18) !important;
            color: white;
        }
    </style>

</head>

<body>
    <?php include_once "../generales/nav_bar.php" ?>
    <div class="container">
        <div class="row mt-3">

            <div class="col-sm-12">
                <table id="tblInf" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CORREO</th>
                            <th>MENSAJE</th>
                            <th>RESPUESTA</th>
                        </tr>
                    </thead>
                </table>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-12 mb-5">

                <form action="../controller/contactanosController.php" method="POST" class="p-5 bg-white">

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" onkeypress='return soloLetras(event)' disabled>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Email" disabled>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="telefono">Mensaje</label>
                            <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Telefono" maxlength="10" onkeypress=' return soloNumeros(event)' disabled>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="mensaje">Respuesta</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                    </div>



                    <div class="row form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pill px-4 py-2" id="btn_enviar" name="btn_enviar" value="Contactarme">Enviar al Correo</button>
                        </div>
                    </div>


                </form>


            </div>

        </div>
    </div>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
</body>

</html>