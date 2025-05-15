<?php $__env->startSection('title', 'Index'); ?>
<?php $__env->startSection('index-active', 'active'); ?>

<?php $__env->startSection('contact'); ?>
    <main class="site-main">
        

        <!--================Hero Banner start =================-->
        <section class="mb-30px">
            <div class="container">
                <div class="hero-banner">
                    <div class="hero-banner__content">
                        <h3>Tours & Travels</h3>
                        <h1>Amazing Places on earth</h1>
                        <h4>December 12, 2018</h4>
                    </div>
                </div>
            </div>
        </section>
        <!--================Hero Banner end =================-->
        <!--================ Blog slider start =================-->
        <section>
            <div class="container">
                <div class="owl-carousel owl-theme blog-slider">
                    <?php if(count($blogsSleeder) > 0): ?>
                        <?php $__currentLoopData = $blogsSleeder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card blog__slide text-center">
                            <div class="blog__slide__img">
                                <img class="card-img img-fluid rounded-0" src="<?php echo e(asset("storage/blogs/$blog->image")); ?>"
                                    alt="">
                            </div>
                            <div class="blog__slide__content">
                                <a class="blog__slide__label" href="<?php echo e(route('blogs.show',['blog'=>$blog])); ?>"><?php echo e($blog->category->name); ?></a>
                                <h3><a href="<?php echo e(route('blogs.show',['blog'=> $blog])); ?>"><?php echo e($blog->name); ?></a></h3>
                                <p><?php echo e($blog->created_at->format('d M Y')); ?></p>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                  
                   
                  
                </div>
            </div>
        </section>
        <!--================ Blog slider end =================-->

        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php if(count($blogs) > 0): ?>
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="single-recent-blog-post">
                                    <div class="thumb">
                                        <img class="img-fluid" src="<?php echo e(asset('storage')); ?>/blogs/<?php echo e($blog->image); ?>"
                                            alt="">
                                        <ul class="thumb-info">
                                            <li><a href="#"><i class="ti-user"></i><?php echo e($blog->user->name); ?></a></li>
                                            <li><a href="#"><i
                                                        class="ti-notepad"></i><?php echo e($blog->created_at->format('d M Y')); ?></a>
                                            </li>
                                            <li><a href="#"><i class="ti-themify-favicon"></i><?php echo e(count($blog->comments)); ?> Comments</a></li>
                                        </ul>
                                    </div>
                                    <div class="details mt-20">
                                        <a href="blog-single.html">
                                            <h3><?php echo e($blog->name); ?></h3>
                                        </a>
                                        <p><?php echo e($blog->desc); ?></p>
                                        <a class="button" href="<?php echo e(route('blogs.show', ['blog' => $blog])); ?>">Read More <i
                                                class="ti-arrow-right"></i></a>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>



                        <div class="row">
                            <div class="col-lg-12">
                                <nav class="blog-pagination justify-content-center d-flex">
                                    <?php echo e($blogs->render('pagination::bootstrap-4')); ?>

                                    

                                </nav>
                            </div>
                        </div>
                    </div>

                    <?php echo $__env->make('theme.partials.siddbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </section>
        <!--================ End Blog Post Area =================-->
    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/index.blade.php ENDPATH**/ ?>