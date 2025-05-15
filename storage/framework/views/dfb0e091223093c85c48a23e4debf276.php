<?php $__env->startSection('title','Edit Blog'); ?>
<?php $__env->startSection('index-active','active'); ?>

<?php $__env->startSection('contact'); ?>
 
<main class="site-main">
    <?php echo $__env->make('theme.partials.hero' ,['title' => $blog->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <?php if(session('status-edit-blog')): ?>
          <span style="color: red"><?php echo e(session('status-edit-blog')); ?></span>
          <?php endif; ?>
          <form action="<?php echo e(route('blogs.update',['blog' => $blog])); ?>" class="form-contact contact_form"  method="post" id="contactForm" novalidate="novalidate" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control border" name="name"  type="text" placeholder="Enter titel blog" value="<?php echo e($blog->name); ?>">
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
                  <input class="form-control border" name="image"  type="file"  value="<?php echo e(old('image')); ?>">
                  <?php $__errorArgs = ['image'];
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
              <div class="col-12">
                <div class="form-group">
                  <select class="form-control border" name="category_id">
                    <option value="">select category</option>
                    <?php if(count($categories) > 0): ?>
                      <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($e->id); ?>" 
                        <?php if($e->id==$blog->category_id): ?>
                        selected
                        <?php endif; ?>
                        ><?php echo e($e->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  </select>
                  <?php $__errorArgs = ['category_id'];
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
                  <textarea class="w-100 border" name="desc" placeholder="Enter your description" rows="5">
                    <?php echo e($blog->desc); ?>

                  </textarea>
                  <?php $__errorArgs = ['desc'];
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
              <button type="submit" class="button button--active button-contactForm">Create Blog</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
</main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/blog/edit.blade.php ENDPATH**/ ?>