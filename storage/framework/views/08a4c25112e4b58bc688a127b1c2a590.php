 <?php
     use App\Models\Category;

     $categories = Category::take(3)->get();
 ?>

 <!--================Header Menu Area =================-->
 <header class="header_area">
     <div class="main_menu">
         <nav class="navbar navbar-expand-lg navbar-light">
             <div class="container box_1620">
                 <!-- Brand and toggle get grouped for better mobile display -->
                 <a class="navbar-brand logo_h" href="index.html"><img src='<?php echo e(asset('assets')); ?>/img/logo.png'
                         alt=""></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse"
                     data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                     <ul class="nav navbar-nav menu_nav justify-content-center">
                         <li class="nav-item <?php echo $__env->yieldContent('index-active'); ?>"><a class="nav-link"
                                 href="<?php echo e(route('theme.index')); ?>">Home</a></li>
                         <li class="nav-item submenu dropdown <?php echo $__env->yieldContent('category-active'); ?>">
                             <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                 aria-haspopup="true" aria-expanded="false">Categories</a>
                             <?php if(count($categories) > 0): ?>

                                 <ul class="dropdown-menu">
                                     <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                         <li class="nav-item"><a class="nav-link"
                                                 href="<?php echo e(route('theme.category',['id' => $e->id])); ?>"><?php echo e($e->name); ?></a>
                                         </li>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 </ul>
                             <?php endif; ?>
                         </li>
                         <li class="nav-item <?php echo $__env->yieldContent('contact-active'); ?>"><a class="nav-link"
                                 href="<?php echo e(route('theme.contact')); ?>">Contact</a></li>
                     </ul>

                     <?php if(Auth::check()): ?>   
                     <!-- Add new blog -->
                     <a href="<?php echo e(route('blogs.create')); ?>" class="btn btn-sm btn-primary mr-2">Add New</a>
                     <!-- End - Add new blog -->
                     <?php endif; ?>

                     <ul class="nav navbar-nav navbar-right navbar-social">
                         <?php if(!Auth::check()): ?>
                             <div class="btn btn-sm btn-warning"> <a href="<?php echo e(route('register')); ?>">Register</a> / <a
                                     href="<?php echo e(route('login')); ?>">Login</a></div>
                         <?php else: ?>
                             <li class="nav-item submenu dropdown">
                                 <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                     role="button" aria-haspopup="true" aria-expanded="false">
                                     <?php echo e(Auth::user()->name); ?></a>
                                 <ul class="dropdown-menu">
                                     <li class="nav-item"><a class="nav-link" href="<?php echo e(route('blogs.myBlogs')); ?>">My Blogs</a></li>
                                     <li class="nav-item">
                                         <form action="<?php echo e(route('logout')); ?>" id="logoutForm" method="post">
                                             <?php echo csrf_field(); ?>
                                             <a class="nav-link" href=""
                                                 onclick="event.preventDefault();
                                                this.closest('form').submit();">logout</a>
                                         </form>
                                     </li>
                                 </ul>
                             </li>
                         <?php endif; ?>


                     </ul>
                 </div>
             </div>
         </nav>
     </div>
 </header>
 <!--================Header Menu Area =================-->
<?php /**PATH E:\laragon\www\sensive\resources\views/theme/partials/nav.blade.php ENDPATH**/ ?>