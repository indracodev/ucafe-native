<?php
require '../../vardat/conn.php';
require '../../vardat/products.php';

// var_dump($lang);
// var_dump($defaultLang);
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
   <?php include '../layout/head.php' ?>
   <title>UCAFÉ Coffee &bull; <?php echo $data['collection'] ?> <?php echo $data['variants'] ?></title>
   <link rel="stylesheet" href="<?php echo $ucafe ?>assets/css/products.css">
   <style>
      * {
         outline: solid 1px green;
         outline: solid 1px transparent;
      }

      #carousel-related-product .carousel-item {
         background-color: <?php echo $data['color']; ?> !important;
      }
   </style>
</head>

<body>
   <div class="page" style="background-color: <?php echo $data['color']; ?> !important;">
      <header class="page-header">
         <?php include '../layout/navbar.php' ?>
         <?php include '../layout/navside.php' ?>
      </header><!-- end page wrapper -->
      <main class="page-content">
         <section class="py-5" id="detail-product">
            <div class="container">
               <div class="row row-cols-1 row-gap-4 row-cols-lg-2 align-items-lg-center gx-lg-5">
                  <div class="col">

                     <div class="sticky-lg-top">
                        <div id="carousel-detail-product" class="carousel slide" data-bs-ride="false">
                           <div class="carousel-inner">
                              <div class="carousel-item">
                                 <div class="ratio ratio-1x1">
                                    <img src="<?php echo $ucafe ?><?php echo $data['image1']; ?>" class="img-fluid w-100" alt="">
                                 </div>
                              </div><!-- end carousel item -->
                              <div class="carousel-item">
                                 <div class="ratio ratio-1x1">
                                    <img src="<?php echo $ucafe ?><?php echo $data['image2']; ?>" class="img-fluid w-100" alt="">
                                 </div>
                              </div><!-- end carousel item -->
                              <div class="carousel-item">
                                 <div class="ratio ratio-1x1">
                                    <img src="<?php echo $ucafe ?><?php echo $data['image3']; ?>" class="img-fluid w-100" alt="">
                                 </div>
                              </div><!-- end carousel item -->
                           </div><!-- carousel inner -->
                           <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carousel-detail-product" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                           </button>
                           <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carousel-detail-product" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                           </button>
                        </div><!-- end carousel detail product -->
                     </div>

                  </div><!-- end col -->
                  <div class="col">
                     <div class="row gx-lg-5">
                        <div class="col col-auto d-none d-lg-block">
                           <div class="vr h-100"></div>
                        </div><!-- end col -->
                        <div class="col col-12 col-lg">
                           <div id="product-specification" class="list-unstyled m-0 d-flex flex-column row-gap-3">
                              <h2 class="display-6 text-uppercase">
                                 <b class="fw-medium">
                                    UCAFÉ <?php echo $data['variants'] ?> <br class="d-none d-lg-inline"> <?php echo $data['collection'] ?> coffee
                                 </b>
                              </h2>
                              <p class="lead product-description">
                                 <?php echo $desc; ?>
                              </p>
                              <p class="text-justify text-capitalize">
                                 <?php echo $ingr; ?>
                              </p>
                              <p>
                                 <?php echo htmlspecialchars($translations['gramature']); ?> <br> <?php echo $data['weight'] ?>g
                              </p>
                              <nav id="nav-marketplace" class="d-flex flex-wrap gap-3 column-gap-md-4">
                                 <a href="https://indracostore.com" target="_blank" class="text-decoration-none marketplace-link">
                                    <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-store.js"></script>
                                 </a>
                                 <a href="<?php echo $lazada; ?>" target="_blank" class="text-decoration-none marketplace-link">
                                    <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-lazada.js"></script>
                                 </a>
                                 <a href="<?php echo $shopee; ?>" target="_blank" class="text-decoration-none marketplace-link">
                                    <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-shopee.js"></script>
                                 </a>
                                 <a href="<?php echo $tokopedia; ?>" target="_blank" class="text-decoration-none marketplace-link">
                                    <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-tokopedia.js"></script>
                                 </a>
                                 <a href="<?php echo $blibli; ?>" target="_blank" class="text-decoration-none marketplace-link">
                                    <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-blibli.js"></script>
                                 </a>
                                 <a href="<?php echo $jd; ?>" target="_blank" class="text-decoration-none marketplace-link">
                                    <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-jd.js"></script>
                                 </a>
                              </nav>
                           </div><!-- end product specification -->
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </div>
               </div><!-- end row -->
            </div><!-- end container -->
         </section>
         <section class="py-5" id="related-product">
            <div class="container">
               <h5 class="fs-3 mb-5">
                  <b class="fw-medium">
                     <?php echo htmlspecialchars($translations['another product']); ?>
                  </b>
               </h5>

               <div id="carousel-related-product" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">
                  <div class="carousel-inner text-center">

                     <?php
                     // $query = mysqli_query($conn, "SELECT * FROM produk WHERE collection = 'pure' ");
                     $query = mysqli_query($conn, "SELECT * FROM produk ");
                     while ($data = mysqli_fetch_array($query)) {
                     ?>

                        <div class="carousel-item">
                           <div class="col">
                              <a href="<?php echo $ucafe ?>public/products/?idProduct=<?php echo $data['id']; ?>" class="text-decoration-none">
                                 <figure class="figure w-100 mb-0">
                                    <div class="ratio ratio-1x1">
                                       <img src="<?php echo $ucafe ?><?php echo $data['image1']; ?>" class="figure-img" alt="">
                                    </div>
                                    <figcaption class="figure-caption text-white">
                                       <p class="text-uppercase mb-0">
                                          <small><?php echo $data['collection']; ?></small>
                                       </p>
                                       <h5 class="text-capitalize">
                                          <b class="fw-medium"><?php echo $data['variants']; ?></b>
                                       </h5>
                                       <p class="mb-0">
                                          <?php echo $data['weight']; ?>g
                                       </p>
                                    </figcaption>
                                 </figure>
                              </a>
                           </div><!-- end col -->
                        </div><!-- end carousel item -->

                     <?php } ?>

                  </div><!-- end carousel inner -->
                  <button class="carousel-control carousel-control-prev w-auto" type="button" data-bs-target="#carousel-related-product" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control carousel-control-next w-auto" type="button" data-bs-target="#carousel-related-product" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                  </button>
               </div><!-- end carousel related product -->

            </div><!-- end container -->
         </section>
      </main><!-- end page content -->
      <footer class="page-footer">
         <?php include '../layout/footbar.php' ?>
      </footer><!-- end page footer -->
   </div><!-- end page -->
   <script src="<?php echo $ucafe ?>assets/js/custom.js"></script>
   <script src="<?php echo $ucafe ?>assets/js/products.js"></script>
</body>

</html>

<?php $conn->close(); ?>