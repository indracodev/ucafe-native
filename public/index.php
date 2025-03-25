<?php
   // require '../vardat/conn.php';
   require __DIR__ . '/../vardat/conn.php';
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
   <?php include 'layout/head.php'; ?>
   <title>UCAFÉ Coffee &bull; <?php echo htmlspecialchars($translations['home title']); ?></title>
   <link rel="stylesheet" href="<?php echo $ucafe ?>assets/css/landing.css">
   <!-- <link rel="stylesheet" href="<?php echo '../assets/css/landing.css'; ?>"> -->
   <style>
      * {
         outline: solid 1px green;
         outline: solid 1px transparent;
      }
   </style>
</head>

<body>
   <div class="page">
      <header class="page-header">
         <?php include 'layout/navbar.php' ?>
         <?php include 'layout/navside.php' ?>
      </header><!-- end page wrapper -->
      <main class="page-content">

         <section class="py-5" id="instant-series">
            <div class="container">
               <header class="mb-5">
                  <h5 class="display-5">
                     <b class="fw-medium">
                        INSTANT <br class="d-none d-md-block"> SERIES
                     </b>
                  </h5>
                  <a href="<?php echo $ucafe ?>public/products/?idProduct=1">
                     <?php echo htmlspecialchars($translations['home section button']); ?> <i class="fas fa-chevron-right"></i>
                  </a>
               </header>
               <main>
                  <div class="product-list">
                     <div class="product-item" id="instant-cappuccino">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=1" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-cappuccino.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-cappuccino.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-instant-long.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="instant-original">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=2" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-original.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-original.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-instant-short.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="instant-hazelnut">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=3" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-hazelnut.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-hazelnut.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-instant-short.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="instant-mochaccino">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=4" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-mochaccino.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-mochaccino.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-instant-short.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="instant-latte">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=5" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-vanilla-latte.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-instant-vanilla-latte.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-instant-short.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                  </div><!-- end product list -->
               </main>
            </div><!-- end container -->
         </section>

         <section id="nosugar-series" class="p-0">
            <div class="container-fluid p-0">
               <div class="w-50" style="max-width: 21rem;">
                  <img src="<?php echo $ucafe ?>assets/img/home-nosugar-badge.png" width="100%" height="auto" alt="">
               </div>
            </div><!-- end container -->
            <div class="container">
               <header class="mb-5">
                  <h5 class="display-5">
                     <b class="fw-medium">
                        NO SUGAR <br class="d-none d-md-block"> SERIES
                     </b>
                  </h5>
                  <a href="<?php echo $ucafe ?>public/products/?idProduct=6">
                     <?php echo htmlspecialchars($translations['home section button']); ?> <i class="fas fa-chevron-right"></i>
                  </a>
               </header>
               <main>
                  <div class="product-list">
                     <div class="product-item" id="nosugar-coffeecreamer">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=6" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-nosugar-coffeecreamer.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-nosugar-coffeecreamer.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-nosugar.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="nosugar-cappuccino">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=7" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-nosugar-cappuccino.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-nosugar-cappuccino.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-nosugar.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                  </div><!-- end product list -->
               </main>
            </div><!-- end container -->
            <div class="container-fluid p-0">
               <div class="row g-0 row-cols-1 row-cols-lg-2">
                  <div class="col d-none d-lg-block">
                     <img src="<?php echo $ucafe ?>assets/img/home-nosugar-motif.png" width="100%" height="auto" alt="">
                  </div><!-- end col -->
                  <div class="col">
                     <img src="<?php echo $ucafe ?>assets/img/home-nosugar-motif.png" width="100%" height="auto" alt="">
                  </div><!-- end col -->
               </div><!-- end row -->
            </div><!-- end container -->
         </section>

         <section id="pure-series">
            <div class="container">
               <header class="mb-5">
                  <h5 class="display-5">
                     <b class="fw-medium">
                        PURE COFFEE <br class="d-none d-md-block"> SERIES
                     </b>
                  </h5>
                  <a href="<?php echo $ucafe ?>public/products/?idProduct=8">
                     <?php echo htmlspecialchars($translations['home section button']); ?> <i class="fas fa-chevron-right"></i>
                  </a>
               </header>
               <main>
                  <div class="product-list">
                     <div class="product-item" id="pure-7g">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=8" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-pure-7g.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-pure-7g.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-pure-7g.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="pure-150g">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=9" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-pure-150g.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-pure-150g.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-pure-150g.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                     <div class="product-item" id="pure-140g">
                        <a href="<?php echo $ucafe ?>public/products/?idProduct=10" class="product-link">
                           <img src="<?php echo $ucafe ?>assets/img/home-pure-140g.png" width="100%" height="auto" alt="">
                        </a><!-- end product link -->
                        <div class="product-masking">
                           <img src="<?php echo $ucafe ?>assets/img/home-pure-140g.png" width="100%" height="auto" alt="">
                        </div><!-- end product masking -->
                        <div class="product-shadow">
                           <img src="<?php echo $ucafe ?>assets/img/home-shadow-pure-140g.png" width="100%" height="auto" alt="">
                        </div><!-- end product shadow -->
                     </div><!-- end product item -->
                  </div><!-- end product list -->
               </main>
            </div><!-- end container -->
            <div class="container-xxl">
               <div class="w-75" style="max-width: 36rem;">
                  <img src="<?php echo $ucafe ?>assets/img/home-pure-beans.png" width="100%" height="auto" alt="">
               </div>
            </div><!-- end container -->
         </section>

      </main><!-- end page content -->
      <footer class="page-footer">
         <?php include 'layout/footbar.php' ?>
      </footer><!-- end page footer -->
   </div><!-- end page -->
   <script src="<?php echo $ucafe ?>assets/js/custom.js"></script>
</body>

</html>

<?php $conn->close(); ?>