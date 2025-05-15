<?php $__env->startSection('title','register'); ?>
<?php $__env->startSection('index-active','active'); ?>

<?php $__env->startSection('contact'); ?>
 
<main class="site-main">
    <?php echo $__env->make('theme.partials.hero' ,['title' => 'Register'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <form action="#/" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input class="form-control border" name="email" id="email" type="email" placeholder="Enter email address">
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="password" id="name" type="password" placeholder="Enter your password">
                </div>
                <div class="form-group">
                  <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
</main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\blog\resources\views/theme/register.blade.php ENDPATH**/ ?>