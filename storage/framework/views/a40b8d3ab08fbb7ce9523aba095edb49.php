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
          <form action="<?php echo e(route('register')); ?>" class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
            <?php echo csrf_field(); ?>
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <input class="form-control border" name="name"  type="text" placeholder="Enter your name" value="<?php echo e(old('name')); ?>">
                  <?php $__errorArgs = ['name'];
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
                  <input class="form-control border" name="email" id="email" type="email" placeholder="Enter email address" value="<?php echo e(old('email')); ?>">
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
              </div>
              <div class="col-6">
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
                <div class="form-group">
                  <input class="form-control border" name="password_confirmation" type="password" placeholder="Enter your password confirmation">
                  <?php $__errorArgs = ['password_confirmation'];
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


<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/register.blade.php ENDPATH**/ ?>