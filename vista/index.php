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



   <!-- Custom styles for this template -->
   <link href="../lib/dasbo/dashboard.css" rel="stylesheet">
</head>


<body>
   <?php include_once "../generales/nav_bar.php" ?>
   <div class="container">
      <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4"> -->
      <main role="main" class="col-sm-12">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
         </div>

         <canvas class="my-4 w-100" id="myChart" width="900" height="380">

         </canvas>

         <h2>Section title</h2>
         <div class="table-responsive">
            <table class="table table-striped table-sm">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Header</th>
                     <th>Header</th>
                     <th>Header</th>
                     <th>Header</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>1,001</td>
                     <td>random</td>
                     <td>data</td>
                     <td>placeholder</td>
                     <td>text</td>
                  </tr>
                  <tr>
                     <td>1,002</td>
                     <td>placeholder</td>
                     <td>irrelevant</td>
                     <td>visual</td>
                     <td>layout</td>
                  </tr>
                  <tr>
                     <td>1,003</td>
                     <td>data</td>
                     <td>rich</td>
                     <td>dashboard</td>
                     <td>tabular</td>
                  </tr>
                  <tr>
                     <td>1,003</td>
                     <td>information</td>
                     <td>placeholder</td>
                     <td>illustrative</td>
                     <td>data</td>
                  </tr>
                  <tr>
                     <td>1,004</td>
                     <td>text</td>
                     <td>random</td>
                     <td>layout</td>
                     <td>dashboard</td>
                  </tr>
                  <tr>
                     <td>1,005</td>
                     <td>dashboard</td>
                     <td>irrelevant</td>
                     <td>text</td>
                     <td>placeholder</td>
                  </tr>
                  <tr>
                     <td>1,006</td>
                     <td>dashboard</td>
                     <td>illustrative</td>
                     <td>rich</td>
                     <td>data</td>
                  </tr>
                  <tr>
                     <td>1,007</td>
                     <td>placeholder</td>
                     <td>tabular</td>
                     <td>information</td>
                     <td>irrelevant</td>
                  </tr>
                  <tr>
                     <td>1,008</td>
                     <td>random</td>
                     <td>data</td>
                     <td>placeholder</td>
                     <td>text</td>
                  </tr>
                  <tr>
                     <td>1,009</td>
                     <td>placeholder</td>
                     <td>irrelevant</td>
                     <td>visual</td>
                     <td>layout</td>
                  </tr>
                  <tr>
                     <td>1,010</td>
                     <td>data</td>
                     <td>rich</td>
                     <td>dashboard</td>
                     <td>tabular</td>
                  </tr>
                  <tr>
                     <td>1,011</td>
                     <td>information</td>
                     <td>placeholder</td>
                     <td>illustrative</td>
                     <td>data</td>
                  </tr>
                  <tr>
                     <td>1,012</td>
                     <td>text</td>
                     <td>placeholder</td>
                     <td>layout</td>
                     <td>dashboard</td>
                  </tr>
                  <tr>
                     <td>1,013</td>
                     <td>dashboard</td>
                     <td>irrelevant</td>
                     <td>text</td>
                     <td>visual</td>
                  </tr>
                  <tr>
                     <td>1,014</td>
                     <td>dashboard</td>
                     <td>illustrative</td>
                     <td>rich</td>
                     <td>data</td>
                  </tr>
                  <tr>
                     <td>1,015</td>
                     <td>random</td>
                     <td>tabular</td>
                     <td>information</td>
                     <td>text</td>
                  </tr>
               </tbody>
            </table>
         </div>
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