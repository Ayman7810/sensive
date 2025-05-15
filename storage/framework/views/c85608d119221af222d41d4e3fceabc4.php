<?php $__env->startSection('title','login'); ?>
<?php $__env->startSection('index-active','active'); ?>

<?php $__env->startSection('contact'); ?>
 
<main class="site-main">
    <?php echo $__env->make('theme.partials.hero' ,['title' => 'login'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

   <!-- ================ contact section start ================= -->
   <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-6 mx-auto">
          <form action="<?php echo e(route('login')); ?>" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <input class="form-control border" name="email" value="<?php echo e(old('email')); ?>" type="email" placeholder="Enter email address">
              <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span style="color: red"><?php echo e($message); ?></span>
              <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group">
              <input class="form-control border" name="password"  type="password" placeholder="Enter your password">
              <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
              <span style="color: red"><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <button type="submit" class="button button--active button-contactForm">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->

</main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/login.blade.php ENDPATH**/ ?>