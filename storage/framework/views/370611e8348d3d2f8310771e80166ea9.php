<?php $__env->startSection('title', 'category'); ?>
<?php $__env->startSection('category-active', 'active'); ?>

<?php $__env->startSection('contact'); ?>

    <main class="site-main">
        <?php echo $__env->make('theme.partials.hero', ['title' => $categoryName->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                          <?php if(isset($blogs) && count($blogs) > 0): ?>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-6">
                              <div class="single-recent-blog-post card-view">
                                  <div class="thumb">
                                      <img class="card-img rounded-0"
                                          src='<?php echo e(asset("storage/blogs/$blog->image")); ?>' alt="">
                                      <ul class="thumb-info">
                                          <li><a href="#"><i class="ti-user"></i><?php echo e($blog->user->name); ?></a></li>
                                          <li><a href="#"><i class="ti-themify-favicon"></i><?php echo e(count($blog->comments)); ?>  Comments</a></li>
                                      </ul>
                                  </div>
                                  <div class="details mt-20">
                                      <a href="blog-single.html">
                                          <h3>
                                            <?php echo e($blog->name); ?>

                                          </h3>
                                      </a>
                                      <p><?php echo e($blog->desc); ?></p>
                                      <a class="button" href="<?php echo e(route('blogs.show' , ['blog' => $blog])); ?>">Read More <i class="ti-arrow-right"></i></a>
                                  </div>
                              </div>
                          </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <?php endif; ?>
                           
                            
                        </div>

                    

                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="blog-pagination justify-content-center d-flex">
                                    
                                    <?php if(isset($blogs) && count($blogs) > 0): ?>
                                    <?php echo e($blogs->render('pagination::bootstrap-4')); ?>

                                    <?php endif; ?>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Start Blog Post Siddebar -->
                    <?php echo $__env->make('theme.partials.siddbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <!-- End Blog Post Siddebar -->
                </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/category.blade.php ENDPATH**/ ?>