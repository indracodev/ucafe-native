<nav class="navbar navbar-expand py-3 py-lg-4">
   <div class="container">
      <h1>
         <a href="<?php echo $ucafe ?>public/" class="navbar-brand">
            <img src="<?php echo $ucafe ?>assets/img/logo_ucafe.svg" width="100%" height="auto" alt="UCAFÉ">
         </a>
      </h1>
      <div class="navbar-collapse">
         <ul class="navbar-nav ms-auto" id="nav-lang">
            <li class="nav-item">
               <form method="POST" action="" class="m-0">
                  <button type="submit" name="lang" value="id" class="nav-link p-0" id="nav-lang-in">ID</button>
               </form>
            </li>
            <li class="nav-item">
               <div class="vr h-100 mx-3"></div>
            </li>
            <li class="nav-item">
               <form method="POST" action="" class="m-0">
                  <button type="submit" name="lang" value="en" class="nav-link p-0" id="nav-lang-en">EN</button>
               </form>
            </li>
         </ul>
      </div>
   </div><!-- end container -->
</nav><!-- end navbar -->