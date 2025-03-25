<?php
require '../../vardat/conn.php';
// var_dump($lang);
// var_dump($defaultLang);
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
   <?php include '../layout/head.php' ?>
   <title>UCAFÉ Coffee &bull; Find Us</title>
   <link rel="stylesheet" href="<?php echo $ucafe ?>assets/css/findus.css">
   <!-- mapbox -->
   <script src='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.js'></script>
   <link href='https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css' rel='stylesheet' />
   <style>
      * {
         outline: solid 1px green;
         outline: solid 1px transparent;
      }

      #marker-0 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-1.png);
      }

      #marker-1 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-2.png);
      }

      #marker-2 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-3.png);
      }

      #marker-3 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-4.png);
      }

      #marker-4 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-5.png);
      }

      #marker-5 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-6.png);
      }

      #marker-6 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-7.png);
      }

      #marker-7 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-8.png);
      }

      #marker-8 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-9.png);
      }

      #marker-9 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-10.png);
      }

      #marker-10 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-11.png);
      }

      #marker-11 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-12.png);
      }

      #marker-12 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-13.png);
      }

      #marker-13 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-14.png);
      }

      #marker-14 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-15.png);
      }

      #marker-15 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-16.png);
      }

      #marker-16 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-17.png);
      }

      #marker-17 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-18.png);
      }

      #marker-18 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-19.png);
      }

      #marker-19 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-20.png);
      }

      #marker-20 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-21.png);
      }

      #marker-21 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-22.png);
      }

      #marker-22 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-23.png);
      }

      #marker-23 {
         background-image: url(<?php echo $ucafe ?>assets/img/map-24.png);
      }
   </style>
</head>

<body id="find">
   <div class="page">
      <header class="page-header">
         <?php include '../layout/navbar.php' ?>
         <?php include '../layout/navside.php' ?>
      </header><!-- end page wrapper -->
      <main class="page-content">
         <section class="p-0">
            <div class="container">
               <div id="map" class="bg-light"></div>
            </div><!-- end container -->
         </section>
         <section class="pt-5">
            <div class="container">
               <ul id="listings" class="list-unstyled store-list"></ul>
            </div><!-- end container -->
         </section>
      </main><!-- end page content -->
      <footer class="page-footer">
         <?php include '../layout/footbar.php' ?>
      </footer><!-- end page footer -->
   </div><!-- end page -->
   <script src="<?php echo $ucafe ?>assets/js/maps.js"></script>
   <script src="<?php echo $ucafe ?>assets/js/custom.js"></script>
</body>

</html>

<?php $conn->close(); ?>