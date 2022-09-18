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
        <div class="py-5 text-center">
            <div class=" order-1">
                <h2 class="mb-3 text-uppercase titulo">SUSCRIPCIÓN VOLUNTARIA
                </h2>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12 order-md-1">
                <h4 class="mb-3">Datos de Suscripción</h4>
                <form class="needs-validation"  method="POST" action="../controller/suscripcionController.php">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="txt_nombres">Nombres (*)</label>
                            <input type="text" class="form-control" id="txt_nombres" name="txt_nombres" required onkeypress='return soloLetras(event)' maxlength="40">

                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="txt_apellidos">Apellidos (*)</label>
                            <input type="text" class="form-control" id="txt_apellidos" name="txt_apellidos" required onkeypress='return soloLetras(event)' maxlength="40">

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="txt_correo">Correo (*)</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">@</span>
                            </div>
                            <input type="email" class="form-control" id="txt_correo" name="txt_correo" placeholder="Correo" required maxlength="200" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">

                        </div>
                    </div>


                    <div class="mb-3">
                        <label for="txt_direccion">Dirección</label>
                        <input type="text" class="form-control" name="txt_direccion" placeholder="Colinas Mz312, vll. 17" required maxlength="80">

                    </div>

                    <div class="d-block my-3">
                        <label for="sexo">Sexo</label>
                        <div class="custom-control custom-radio">
                            <input id="chk_masculino" name="sexo" type="radio" value="Masculino" class="custom-control-input" checked required>
                            <label class="custom-control-label" for="chk_masculino">Masculino</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="chk_femenino" name="sexo" type="radio" class="custom-control-input" required>
                            <label class="custom-control-label" for="chk_femenino" value="Femenino">Femenino</label>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6 ">
                            Nivel de estudios<br>
                            <input type="radio" name="estudios" value="Cursando Bachillerato" checked="checked">
                            Cursando Bachillerato<br>
                            <input type="radio" name="estudios" value="Bachillerato">
                            Bachillerato<br>
                            <input type="radio" name="estudios" value="Titulo Tecnico" />
                            Título Técnico<br>
                            <input type="radio" name="estudios" value="Titulo Profesional" />
                            Título Profesional <br>
                            <input type="radio" name="estudios" value="Post-grado Master" />
                            Post-grado Máster<br />
                            <input type="radio" name="estudios" value="Post-grado Doctorado" />
                            Post-grado Doctorado<br />
                        </div>
                        <div class="col-sm-6 ">
                            Interesado en los siguientes temas: <br>
                            <input type="radio" name="intereses" value="Residuos urbanos" checked/> Residuos urbanos<br>
                            <input type="radio" name="intereses" value="Inversión protección ambiental" /> Inversión protección ambiental<br>
                            <input type="radio" name="intereses" value="Ambiente Biodiversidad" /> Ambiente Biodiversidad<br>
                            <input type="radio" name="intereses" value="Objetivos Desarrollo" /> Objetivos Desarrollo<br>
                            <input type="radio" name="intereses" value="Ámbito Var Flow" /> Ámbito Var Flow<br>
                            <input type="radio" name="intereses" value="Países ISO" /> Países ISO<br>

                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="mensaje">Comentarios</label>
                            <textarea name="mensaje" id="mensaje" cols="80" rows="5" class="form-control" placeholder="Mensaje"></textarea>
                        </div>
                    </div>


                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="chk_inf_energia" name="chk_inf_energia" value="si" required>
                        <label class="custom-control-label" for="chk_inf_energia">He leido los términos y condiciones</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="chk_inf_ods" name="chk_inf_ods" value="si" required>
                        <label class="custom-control-label" for="chk_inf_ods">Acepto que me suscribo de manera voluntaria y que la iinformación es verídica</label>
                    </div>
                    <hr class="mb-4">


                    <h4 class="mb-3">Suscripción</h4>
                    <div class="d-block my-3">
                        <div class="custom-control custom-radio">
                            <input id="rb_diaria" name="rbg_suscrip" type="radio" class="custom-control-input" checked required value="Diaria">
                            <label class="custom-control-label" for="rb_diaria">Diaria</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="rb_mensual" name="rbg_suscrip" type="radio" class="custom-control-input" required value="Mensual">
                            <label class="custom-control-label" for="rb_mensual">Mensual</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input id="rb_anual" name="rbg_suscrip" type="radio" class="custom-control-input" required value="Anual">
                            <label class="custom-control-label" for="rb_anual">Anual</label>
                        </div>
                    </div>

                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_suscribe" value="btn_sus">Suscribirse</button>
                    <input class="btn btn-primary btn-lg btn-block mb-4" type="reset" value="Limpiar Formulario" >
              

                </form>
            </div>
        </div>

    </div>


    <?php include_once "../generales/footer.php"; ?>
    <?php include_once "../generales/scripts.php"; ?>
</body>

</html>