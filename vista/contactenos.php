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
        <h1 class="text-left" style="color: blue">Formulario de Registro</h1>
        <div class="row">
            <div class="col-md-12">

                <form method="post" action="../php/enviar.php">
                    <ul class="contact-form">
                        <li>
                            <div class="col-md-6">
                                <input name="nombre" placeholder="Escribe tu nombre" required="required" size="8" type="text" />
                            </div>

                            <div class="col-md-6">
                                <input name="email" placeholder="Email" required="required" size="8" type="email" />
                            </div>
                        </li>

                        <li>
                            <div class="col-md-6">
                                <input name="telefono" placeholder="Escribe tu numero" required="required" size="8" type="text" />
                            </div>

                            <div class="col-md-6">
                                <input name="empresa" placeholder="Companía/Agencia" required="required" size="8" type="text" />
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <input name="asunto" placeholder="Asunto" required="required" size="8" type="text" />
                            </div>
                        </li>
                        <li>
                            <div class="col-md-12">
                                <textarea class="span12" name="mensaje" placeholder="Escribe tu proyecto o mensaje" required="required"></textarea>
                            </div>
                        </li>

                        <li>
                            <div class="col-md-12">
                                <button type="submit">
                                    Enviar
                                    <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
                                </button>
                            </div>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</body>

</html>