<div class="footbar">
   <div class="container py-4 py-md-5">
      <p>
         <img src="<?php echo $ucafe ?>assets/img/logo_ucafe.svg" width="100%" height="auto" style="max-width: 6rem;" alt="">
      </p>
      <hr>
      <div class="row row-gap-4 row-gap-md-5 gx-lg-5 py-4">
         <div class="col col-12 col-lg-auto order-lg-2">
            <nav id="nav-sosmed" class="d-flex flex-wrap gap-3">
               <a href="#" target="_blank" class="text-decoration-none">
                  <i class="fab fa-x-twitter"></i>
               </a>
               <a href="#" target="_blank" class="text-decoration-none">
                  <i class="fab fa-facebook-f"></i>
               </a>
               <a href="#" target="_blank" class="text-decoration-none">
                  <i class="fab fa-instagram"></i>
               </a>
               <a href="#" target="_blank" class="text-decoration-none">
                  <i class="fab fa-youtube"></i>
               </a>
               <a href="#" target="_blank" class="text-decoration-none">
                  <i class="fab fa-tiktok"></i>
               </a>
               <a href="#" target="_blank" class="text-decoration-none">
                  <i class="fab fa-linkedin-in"></i>
               </a>
            </nav>
         </div><!-- end col -->
         <div class="col col-12 col-lg order-lg-1">
            <div class="row row-cols-auto g-0 row-gap-4" style="column-gap: calc(3rem + 1vw);">
               <div class="col">
                  <h5>
                     <b class="fw-medium">
                        <?php echo htmlspecialchars($translations['footbar nav products title']); ?>
                     </b>
                  </h5>
                  <ul class="list-unstyled text-capitalize d-flex flex-column row-gap-2 mb-0">
                     <li>
                        <a href="#">
                           instant series
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           no sugar series
                        </a>
                     </li>
                     <li>
                        <a href="#">
                           pure series
                        </a>
                     </li>
                  </ul>
               </div><!-- end col -->
               <div class="col">
                  <h5>
                     <b class="fw-medium">
                        <?php echo htmlspecialchars($translations['footbar nav explore title']); ?>
                     </b>
                  </h5>
                  <ul class="list-unstyled text-capitalize d-flex flex-column row-gap-2 mb-0">
                     <li>
                        <a href="#">
                           <?php echo htmlspecialchars($translations['footbar nav explore about']); ?>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo $ucafe ?>public/findus/">
                           <?php echo htmlspecialchars($translations['footbar nav explore find']); ?>
                        </a>
                     </li>
                  </ul>
               </div><!-- end col -->
               <div class="col">
                  <h5>
                     <b class="fw-medium">
                        <?php echo htmlspecialchars($translations['footbar nav help title']); ?>
                     </b>
                  </h5>
                  <ul class="list-unstyled text-capitalize d-flex flex-column row-gap-2 mb-0">
                     <li>
                        <a href="<?php echo $ucafe ?>public/link/" target="_blank">
                           <?php echo htmlspecialchars($translations['footbar nav help contact']); ?>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank">
                           <?php echo htmlspecialchars($translations['footbar nav help privacy']); ?>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank">
                           <?php echo htmlspecialchars($translations['footbar nav help T&C']); ?>
                        </a>
                     </li>
                  </ul>
               </div><!-- end col -->
            </div><!-- end row -->
         </div><!-- end col -->
      </div><!-- end row -->
      <hr>
      <p class="text-center opacity-50">
         <?php echo htmlspecialchars($translations['copyright']); ?> &copy; <script>
            document.write(new Date().getFullYear())
         </script> INDRACO. <?php echo htmlspecialchars($translations['reserved']); ?>.
      </p>
   </div><!-- end container -->
</div><!-- end footbar -->