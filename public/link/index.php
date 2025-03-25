<?php
require '../../vardat/conn.php';
// var_dump($lang);
// var_dump($defaultLang);
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <?php include '../layout/head.php' ?>
   <title>UCAFÉ Coffee</title>
   <style>
      * {
         outline: solid 1px green;
         outline: solid 1px transparent;
      }

      .page {
         & {
            position: relative;
            overflow: hidden;

            @media (max-width: 575.98px) {
               height: 100vh;
            }
         }

         &::before {
            content: '';
            aspect-ratio: 3/4;
            width: 60%;
            max-width: 24rem;
            height: auto;
            background-image: url(<?php echo $ucafe ?>assets/img/motif.svg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            position: absolute;
            top: 0;
            left: 5%;
            z-index: 1;
            transform: translateY(-50%);
         }

         &::after {
            content: '';
            aspect-ratio: 3/4;
            width: 80%;
            max-width: 32rem;
            height: auto;
            background-image: url(<?php echo $ucafe ?>assets/img/motif.svg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: contain;
            position: absolute;
            bottom: 0;
            right: 5%;
            z-index: 1;
            transform: translateY(50%);
         }
      }

      @media (max-width: 575.98px) {
         .page-content {
            height: 100%;
            overflow-y: auto;
         }
      }

      .container {
         width: 90%;
         max-width: 36rem;
      }

      #link-list>li>.container>a {
         display: block;
         padding: 1.5rem 0;
         position: relative;
         transition: var(--basic-transition);

         &::before {
            content: '';
            width: 100%;
            border-bottom: solid 1px currentColor;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            opacity: .25;
            transform: translateY(-50%);
         }

         svg {
            width: 1.25em;
            height: 1.25em;
         }

         svg,
         .fas {
            opacity: .25;
            transition: var(--basic-transition);
         }
      }

      #link-list>li:last-child>.container>a {
         &::before {
            opacity: 0;
            visibility: hidden;
         }
      }

      @media (min-width: 992px) {
         #link-list>li {
            background-color: transparent;
            transition: var(--basic-transition);

            &:hover {
               background-color: rgba(0, 0, 0, .5);
            }
         }

         #link-list>li:hover>.container>a {
            padding: 1.5rem;

            svg,
            .fas {
               opacity: 1;
            }
         }
      }
   </style>
</head>

<body>

   <div class="page">
      <header class="page-header">
         <nav class="navbar navbar-expand py-4 py-md-5">
            <div class="container justify-content-center">
               <h1 class="m-0">
                  <a href="<?php echo $ucafe ?>public/" class="navbar-brand m-0" style="pointer-events: none;">
                     <img src="<?php echo $ucafe ?>assets/img/logo_ucafe.svg" width="100%" height="auto" alt="">
                  </a>
               </h1>
            </div><!-- end container -->
         </nav>
      </header><!-- end page wrapper -->
      <main class="page-content">

         <ul id="link-list" class="list-unstyled m-0 d-flex flex-column text-capitalize text-center">
            <li>
               <div class="container">
                  <a href="<?php echo $ucafe ?>public/" target="_blank" class="text-decoration-none">
                     <div class="row g-0">
                        <div class="col col-auto">
                           <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-web.js"></script>
                        </div><!-- end col -->
                        <div class="col">
                           website
                        </div><!-- end col -->
                        <div class="col col-auto">
                           <i class="fas fa-chevron-right"></i>
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </a>
               </div><!-- end container -->
            </li><!-- end link item -->
            <li>
               <div class="container">
                  <a href="https://indracostore.com/" target="_blank" class="text-decoration-none">
                     <div class="row g-0">
                        <div class="col col-auto">
                           <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-store.js"></script>
                        </div><!-- end col -->
                        <div class="col">
                           store
                        </div><!-- end col -->
                        <div class="col col-auto">
                           <i class="fas fa-chevron-right"></i>
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </a>
               </div><!-- end container -->
            </li><!-- end link item -->
            <li>
               <div class="container">
                  <a href="https://www.lazada.sg/indraco/?spm=a2o42.10453684.0.0.35673768WZJ735&q=All-Products&shop_category_ids=547623&from=wangpu&sc=KVUG" target="_blank" class="text-decoration-none">
                     <div class="row g-0">
                        <div class="col col-auto">
                           <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-lazada.js"></script>
                        </div><!-- end col -->
                        <div class="col">
                           lazada
                        </div><!-- end col -->
                        <div class="col col-auto">
                           <i class="fas fa-chevron-right"></i>
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </a>
               </div><!-- end container -->
            </li><!-- end link item -->
            <li>
               <div class="container">
                  <a href="https://shopee.sg/shop/572571069/search?shopCollection=134760266" target="_blank" class="text-decoration-none">
                     <div class="row g-0">
                        <div class="col col-auto">
                           <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-shopee.js"></script>
                        </div><!-- end col -->
                        <div class="col">
                           shopee
                        </div><!-- end col -->
                        <div class="col col-auto">
                           <i class="fas fa-chevron-right"></i>
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </a>
               </div><!-- end container -->
            </li><!-- end link item -->
            <li>
               <div class="container">
                  <a href="#" target="_blank" class="text-decoration-none">
                     <div class="row g-0">
                        <div class="col col-auto">
                           <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-tokopedia.js"></script>
                        </div><!-- end col -->
                        <div class="col">
                           tokopedia
                        </div><!-- end col -->
                        <div class="col col-auto">
                           <i class="fas fa-chevron-right"></i>
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </a>
               </div><!-- end container -->
            </li><!-- end link item -->
            <li>
               <div class="container">
                  <a href="<?php echo $ucafe ?>public/findus/" target="_blank" class="text-decoration-none">
                     <div class="row g-0">
                        <div class="col col-auto">
                           <script src="<?php echo $ucafe ?>assets/img/marketplace/icon-map.js"></script>
                        </div><!-- end col -->
                        <div class="col">
                           find us
                        </div><!-- end col -->
                        <div class="col col-auto">
                           <i class="fas fa-chevron-right"></i>
                        </div><!-- end col -->
                     </div><!-- end row -->
                  </a>
               </div><!-- end container -->
            </li><!-- end link item -->
         </ul><!-- end link list -->

      </main><!-- end page content -->
      <footer class="page-footer small">
         <div class="container py-4 py-md-5">
            <div class="row row-gap-4 row-gap-md-5">
               <div class="col">
                  <nav class="d-flex flex-wrap gap-3">
                     <!-- <a href="#" target="_blank" class="text-decoration-none">
                        <i class="fab fa-x-twitter fa-lg"></i>
                     </a> -->
                     <a href="https://www.facebook.com/ucafe.id" target="_blank" class="text-decoration-none">
                        <i class="fab fa-facebook-f fa-lg"></i>
                     </a>
                     <a href="http://www.instagram.com/ucafecoffee" target="_blank" class="text-decoration-none">
                        <i class="fab fa-instagram fa-lg"></i>
                     </a>
                     <a href="https://www.youtube.com/channel/UCVt8N8rd_pDgyf8oGx0xFIg" target="_blank" class="text-decoration-none">
                        <i class="fab fa-youtube fa-lg"></i>
                     </a>
                     <!-- <a href="#" target="_blank" class="text-decoration-none">
                        <i class="fab fa-tiktok fa-lg"></i>
                     </a> -->
                     <!-- <a href="#" target="_blank" class="text-decoration-none">
                        <i class="fab fa-linkedin-in fa-lg"></i>
                     </a> -->
                  </nav>
               </div><!-- end col -->
               <div class="col col-auto opacity-50">
                  INTERNATIONAL
               </div><!-- end col -->
               <div class="col col-12 text-center opacity-50">
                  Copyright &copy; <script>
                     document.write(new Date().getFullYear())
                  </script> INDRACO. All rights reserved.
               </div><!-- end col -->
            </div><!-- end row -->
         </div><!-- end container -->
      </footer><!-- end page footer -->
   </div><!-- end page -->

</body>

</html>

<?php $conn->close(); ?>