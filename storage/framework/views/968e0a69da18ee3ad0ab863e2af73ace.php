<?php $__env->startSection('title', 'contact'); ?>
<?php $__env->startSection('contact-active', 'active'); ?>
<?php $__env->startSection('contact'); ?>

    <main class="site-main">
        <?php echo $__env->make('theme.partials.hero', ['title' => 'Contact Us'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- ================ contact section start ================= -->
        <section class="section-margin--small section-margin">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>California United States</h3>
                                <p>Santa monica bullevard</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                            <div class="media-body">
                                <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <form action="<?php echo e(route('contact.store')); ?>" class="form-contact contact_form" method="post"
                            novalidate="novalidate">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <input class="form-control" name="name" type="text"
                                            placeholder="Enter your name" value="<?php echo e(old('name')); ?>">
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
                                    <div class="form-group">
                                        <input class="form-control" name="email" type="email"
                                            placeholder="Enter email address" value="<?php echo e(old('email')); ?>">
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
                                    <div class="form-group">
                                        <input class="form-control" name="subject" type="text"
                                            placeholder="Enter Subject" value="<?php echo e(old('subject')); ?>">
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
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <textarea class="form-control different-control w-100" name="message" id="message" cols="30" rows="5"
                                            placeholder="Enter Message"><?php echo e(old('message')); ?></textarea>
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
                                </div>
                                <div class="col-12 mt-3">
                                    <?php if(session('status-delete-blog')): ?>
                                        <span class="text-danger"><?php echo e(session('status-delete-blog')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group text-center text-md-right mt-3">
                                <button type="submit" class="button button--active button-contactForm">Send
                                    Message</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('theme.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\laragon\www\sensive\resources\views/theme/contact.blade.php ENDPATH**/ ?>