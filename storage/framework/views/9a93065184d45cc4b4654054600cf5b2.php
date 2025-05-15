<!DOCTYPE html>
<html lang="en">

<?php echo $__env->make('theme.partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>

    <?php echo $__env->make('theme.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    <?php echo $__env->yieldContent('contact'); ?>


    <?php echo $__env->make('theme.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('theme.partials.scriptes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH E:\laragon\www\blog\resources\views/theme/layout.blade.php ENDPATH**/ ?>