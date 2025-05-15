<?php
    use App\Models\Category;
    use App\Models\Blog;

    $categories = Category::get();

    $blogRecent =Blog::latest()->take(3)->get();
?>
<!-- Start Blog Post Siddebar -->
<div class="col-lg-4 sidebar-widgets">
    <div class="widget-wrap">
        <div class="single-sidebar-widget newsletter-widget">
            <h4 class="single-sidebar-widget__title">Newsletter</h4>
            <form action="<?php echo e(route('subcribe.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div class="form-group mt-30">
                    <div class="col-autos">

                        <input type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                            placeholder="Enter email" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'">
                        <?php if(session('status')): ?>
                            <span><?php echo e(session('status')); ?></span>
                        <?php endif; ?>
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <span class="text-danger"><?php echo e($message); ?></span>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                    </div>
                </div>
                <button type="submit" class="bbtns d-block mt-20 w-100">Subcribe</button>
            </form>
        </div>


        <div class="single-sidebar-widget post-category-widget">
            <?php if(count($categories) > 0): ?>
                <h4 class="single-sidebar-widget__title">Catgory</h4>
                <ul class="cat-list mt-20">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <a href="<?php echo e(route('theme.category',['id' => $e->id])); ?>" class="d-flex justify-content-between">
                                <p><?php echo e($e->name); ?></p>
                                <p><?php echo e(count($e->blogs)); ?></p>
                            </a>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endif; ?>

        </div>

        <div class="single-sidebar-widget popular-post-widget">
            <h4 class="single-sidebar-widget__title">Recent Post</h4>
            <div class="popular-post-list">
                <?php if(count( $blogRecent) > 0): ?>
                    <?php $__currentLoopData = $blogRecent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="single-post-list">
                        <div class="thumb">
                            <img class="card-img rounded-0" src="<?php echo e(asset("storage/blogs/$element->image")); ?>"
                                alt="">
                            <ul class="thumb-info">
                                <li><a href="<?php echo e(route('blogs.show',['blog' => $element])); ?>"><?php echo e($element->user->name); ?></a></li>
                                <li><a href="<?php echo e(route('blogs.show',['blog' => $element])); ?>"><?php echo e($element->created_at->format('d M')); ?></a></li>
                            </ul>
                        </div>
                        <div class="details mt-20">
                            <a href="<?php echo e(route('blogs.show',['blog' => $element])); ?>">
                                <h6><?php echo e($element->name); ?></h6>
                            </a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              
            </div>
        </div>
    </div>
</div>
<!-- End Blog Post Siddebar -->
<?php /**PATH E:\laragon\www\sensive\resources\views/theme/partials/siddbar.blade.php ENDPATH**/ ?>