<?php $__env->startSection('title','Create Blog'); ?>
<?php $__env->startSection('index-active','active'); ?>

<?php $__env->startSection('contact'); ?>
 
<main class="site-main">
    <?php echo $__env->make('theme.partials.hero' ,['title' => 'Create Blog'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- ================ contact section start ================= -->
  <section class="section-margin--small section-margin">
    <div class="container">
      <?php if(session('status')): ?>
      <span class="text-danger"><?php echo e(session('status')); ?></span>
      <?php endif; ?>
      <div class="row">
        <div class="col-12">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">title</th>
                <th scope="col">action</th>
                
              </tr>
            </thead>
            <tbody>
              <?php if(count($blogs) > 0): ?>
                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                <tr>
                  <th class="w-75"><a href="<?php echo e(route('blogs.show',['blog'=> $blog])); ?>" target="_blank" rel="noopener noreferrer"><?php echo e($blog->name); ?></a></th>
                  <td >
                    <a href="<?php echo e(route('blogs.edit',['blog'=>$blog])); ?>"  class="btn btn-primary">Edit</a>
                    <form action="<?php echo e(route('blogs.destroy',['blog' => $blog])); ?>" method="post" class="d-inline">
                      <?php echo csrf_field(); ?>
                      <?php echo method_field('delete'); ?>
                      <a href=""  class="btn btn-danger " 
                      onclick="event.preventDefault();
                     this.closest('form').submit();">Delete</a>
                    </form>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
              
              <?php if(count($blogs) > 0): ?>
              <?php echo e($blogs->render('pagination::bootstrap-4')); ?>

              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
	<!-- ================ contact section end ================= -->
  
</main>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/blog/my-blogs.blade.php ENDPATH**/ ?>