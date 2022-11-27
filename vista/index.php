<?php
include("../config/conexion.php");
$sql = "SELECT p.NOMBRE, pe.* FROM bd_php_p2.petroleo_p3 pe join bd_php_p2.pais p on p.id = pe.id_pais; ";


// Si han aceptado la política
if (isset($_REQUEST['politica-cookies'])) {
   // Calculamos la caducidad, en este caso un año
   $caducidad = time() + (60 * 60 * 24 * 365);
   // Crea una cookie con la caducidad
   setcookie('politica', 'true', $caducidad);
}

setcookie('politica', 'true', time() - 36000);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Universidad de Guayaquil</title>

   <!--<link rel="stylesheet" href="estilosForm.css";>-->
   <?php include "../generales/head.php"; ?>

   <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
   <!-- Bootstrap core CSS -->
   <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
      .my-custom-scrollbar {
         position: relative;
         height: 450PX;
         overflow: auto;
      }

      .table-wrapper-scroll-y {
         display: block;
      }

      .aviso-cookies {
         display: none;
         background: #fff;
         padding: 20px;
         width: calc(100% - 40px);
         max-width: 800px;
         line-height: 150%;
         border-radius: 10px;
         position: fixed;
         bottom: 20px;
         left: 0;
         right: 0;
         margin: auto;
         z-index: 100;
         padding-top: 60px;
         box-shadow: 0px 2px 20px 10px rgba(222, 222, 222, .25);
         text-align: center;
      }

      .aviso-cookies.activo {
         display: block;
      }

      .aviso-cookies .galleta {
         max-width: 100px;
         position: absolute;
         top: -50px;
         left: calc(50% - 50px);
      }

      .aviso-cookies .titulo,
      .aviso-cookies .parrafo {
         margin-bottom: 15px;
      }

      .aviso-cookies .boton {
         width: 100%;
         background: #595959;
         border: none;
         color: #fff;
         font-family: 'Roboto', sans-serif;
         text-align: center;
         padding: 15px 20px;
         font-weight: 700;
         cursor: pointer;
         transition: .3s ease all;
         border-radius: 5px;
         margin-bottom: 15px;
         font-size: 14px;
      }

      .aviso-cookies .boton:hover {
         background: #000;
      }

      .aviso-cookies .enlace {
         color: #4DBFFF;
         text-decoration: none;
         font-size: 14px;
      }

      .aviso-cookies .enlace:hover {
         text-decoration: underline;
      }

      .fondo-aviso-cookies {
         display: none;
         background: rgba(0, 0, 0, .20);
         position: fixed;
         z-index: 99;
         width: 100vw;
         height: 100vh;
         top: 0;
         left: 0;
      }

      .fondo-aviso-cookies.activo {
         display: block;
      }
   </style>
</head>


<body>
   <?php include_once "../generales/nav_bar.php" ?>
   <div class="container">


      <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> -->
      <main role="main" class="col-sm-12">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="mb-3 my-4 titulo">
               Pág. #12 - Dashboard
               <strong class="letra-negra font-weight-bold titulo">Información Energética </strong>
            </h1>
         </div>

         <canvas class="my-4 w-100" id="chartPastel" width="900" height="380">
         </canvas>
         <canvas class="my-4 w-100" id="chartBarras" width="900" height="380">
         </canvas>
         <canvas class="my-4 w-100" id="myChart" width="900" height="380">
         </canvas>





         <article class="row">

            <div class="col-md-12">
               <h1 class="mb-3 my-4 text-center titulo">
                  Datos

               </h1>
               <div class="table-wrapper-scroll-y my-custom-scrollbar">
                  <!-- <table class="table table-sm table-dark  table-hover table-bordered table-striped" style="width: 100%"> -->
                  <table class="table table-bordered table-striped mb-0 table-hover" style="width: 100%">
                     <!-- <table class="table table-striped table-sm"> -->
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
      </main>

   </div>

   <div class="aviso-cookies" id="aviso-cookies">
      <h3 class="titulo">Cookies</h3>
      <p class="parrafo">Utilizamos cookies para mejorar nuestros servicios e interacción con el sistema.</p>
      <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
      <a class="enlace" href="aviso_cookies.php" target="_blank">Aviso de Cookies</a>
   </div>
   <div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>


   <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script>
      window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')
   </script>
   <script src="../assets/dist/js/bootstrap.bundle.min.js"></script> -->

   <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>

   <script src="../lib/dasbo/dashboard.js"></script>

   <?php include_once "../generales/footer.php"; ?>
   <?php include_once "../generales/scripts.php"; ?>


   <script>
      /* ésto comprueba la localStorage si ya tiene la variable guardada */
      /*  function compruebaAceptaCookies() {
           if (localStorage.aceptaCookies != 'true') {
              cajacookies.style.display = 'block';
           }
        }*/

      /* aquí guardamos la variable de que se ha
      aceptado el uso de cookies así no mostraremos
      el mensaje de nuevo */
      /* function aceptarCookies() {
          localStorage.aceptaCookies = 'true';
          cajacookies.style.display = 'none';
       }*/

      /* ésto se ejecuta cuando la web está cargada */
      $(document).ready(function() {
         // compruebaAceptaCookies();


      });

      const botonAceptarCookies = document.getElementById('btn-aceptar-cookies');
      const avisoCookies = document.getElementById('aviso-cookies');
      const fondoAvisoCookies = document.getElementById('fondo-aviso-cookies');

      dataLayer = [];
      botonAceptarCookies.addEventListener('click', () => {
         avisoCookies.classList.remove('activo');
         fondoAvisoCookies.classList.remove('activo');

         localStorage.setItem('cookies-aceptadas', true);

         dataLayer.push({
            'event': 'cookies-aceptadas'
         });

         const data = fetch("../controller/cookiesController.php?vl=10");
         if (data.status === 200) {
            const datos = data.json();
            console.log(datos);
         }


      });
      if (!localStorage.getItem('cookies-aceptadas')) {
         avisoCookies.classList.add('activo');
         fondoAvisoCookies.classList.add('activo');
      } else {
         dataLayer.push({
            'event': 'cookies-aceptadas'
         });
      }
   </script>
</body>

</html>