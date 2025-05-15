<?php $__env->startSection('title', 'Blog details'); ?>
<?php $__env->startSection('category-active', 'active'); ?>

<?php $__env->startSection('contact'); ?>

    <main class="site-main">
        <?php echo $__env->make('theme.partials.hero', ['title' => $blog->name], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--================ Start Blog Post Area =================-->
        <section class="blog-post-area section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="main_blog_details">
                            <img class="img-fluid" src='<?php echo e(asset("storage/blogs/$blog->image")); ?>' alt="">
                            <a href="#">
                                <h4><?php echo e($blog->name); ?>

                            </a>
                            <div class="user_details">
                                <div class="float-right mt-sm-0 mt-3">
                                    <div class="media">
                                        <div class="media-body">
                                            <h5><?php echo e($blog->user->name); ?></h5>
                                            <p><?php echo e($blog->created_at->format(' d M Y')); ?></p>
                                        </div>
                                        <div class="d-flex">
                                            <img width="42" height="42" src="<?php echo e(asset('assets')); ?>/img/avatar.png"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><?php echo e($blog->desc); ?></p>
                        </div>

                        <?php if(count($blog->comments) > 0): ?>
                            
                        <div class="comments-area">
                            <h4>0<?php echo e(count($blog->comments)); ?> Comments</h4>
                            <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="comment-list">
                                <div class="single-comment justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="<?php echo e(asset('assets')); ?>/img/avatar.png" width="50px">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#"><?php echo e($comment->name); ?></a></h5>
                                            <p class="date"><?php echo e($comment->created_at->format('d M Y')); ?> </p>
                                            <p class="comment">
                                               <?php echo e($comment->message); ?>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </div>
                        <?php endif; ?>

                        <div class="comment-form">
                            <h4>Leave a Reply</h4>

                            <?php if(session('stutasComment')): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Holy guacamole!</strong> <?php echo e(session('stutasComment')); ?>


                              </div>
                            <?php endif; ?>
                            <form action="<?php echo e(route('comment.store')); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" class="form-control"  value="<?php echo e($blog->id); ?>" 
                                name="blog_id"
                                 >
                                <div class="form-group form-inline">
                                    <div class="form-group col-lg-6 col-md-6 name">
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" value="<?php echo e(old('name')); ?>"
                                           >
                                        <?php $__errorArgs = ['name'];
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
                                    <div class="form-group col-lg-6 col-md-6 email">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter email address" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = 'Enter email address'" value="<?php echo e(old('email')); ?>">
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
                                <div class="form-group">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'"
                                        value="<?php echo e(old('subject')); ?>">
                                    <?php $__errorArgs = ['subject'];
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
                               
                                <div class="form-group">
                                    <textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Messege'" required=""><?php echo e(old('name')); ?>


                          </textarea>
                                    <?php $__errorArgs = ['message'];
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
                                <a class="button submit_btn"
                                    onclick="event.preventDefault();
                     this.closest('form').submit();">Post
                                    Comment</a>
                            </form>
                        </div>
                    </div>

                    <?php echo $__env->make('theme.partials.siddbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
        </section>
        <!--================ End Blog Post Area =================-->

    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/blog.blade.php ENDPATH**/ ?>