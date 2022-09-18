<?php
include("../config/conexion.php");
$sql = "SELECT p.NOMBRE, pe.* FROM bd_php_p2.petroleo_p3 pe join bd_php_p2.pais p on p.id = pe.id_pais; ";

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
   </style>
</head>


<body>
   <?php include_once "../generales/nav_bar.php" ?>
   <div class="container">
      <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> -->
      <main role="main" class="col-sm-12">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="mb-3 my-4 ">
               Pág. #12 - Dashboard
               <strong class="letra-negra font-weight-bold">Información Energética </strong>
            </h1>
         </div>

         <canvas class="my-4 w-100" id="myChart" width="900" height="380">

         </canvas>

         <canvas class="my-4 w-100" id="chartBarras" width="900" height="380">

         </canvas>

         <canvas class="my-4 w-100" id="chartPastel" width="900" height="380">

         </canvas>

         <article class="row">

            <div class="col-md-12">
               <h1 class="mb-3 my-4 text-center">
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
</body>

</html>