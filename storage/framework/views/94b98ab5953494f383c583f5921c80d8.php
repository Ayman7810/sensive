  <!--================Header Menu Area =================-->
  <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container box_1620">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"><img src="<?php echo e(asset('assets')); ?>/img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav justify-content-center">
                <li class="nav-item <?php echo $__env->yieldContent('index-active'); ?>"><a class="nav-link" href="<?php echo e(route('theme.index')); ?>">Home</a></li> 
                <li class="nav-item submenu dropdown <?php echo $__env->yieldContent('category-active'); ?>">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                    aria-expanded="false">Categories</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('theme.category')); ?>">Food</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-details.html">Bussiness</a></li>
                    <li class="nav-item"><a class="nav-link" href="blog-details.html">Travel</a></li>
                  </ul>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('contact-active'); ?>"><a class="nav-link" href="<?php echo e(route('theme.contact')); ?>">Contact</a></li>
              </ul>
              
              <!-- Add new blog -->
              <a href="#" class="btn btn-sm btn-primary mr-2">Add New</a>
              <!-- End - Add new blog -->
  
              <ul class="nav navbar-nav navbar-right navbar-social">
                <div class="bg-warning"> <a href="<?php echo e(route('theme.register')); ?>" >Register</a> / <a href="<?php echo e(route('theme.login')); ?>">Login</a></div>
                
              </ul>
            </div> 
          </div>
        </nav>
      </div>
    </header>
    <!--================Header Menu Area =================-->
    <?php /**PATH E:\laragon\www\blog\resources\views/theme/partials/nav.blade.php ENDPATH**/ ?>