


<?php $__env->startSection('content'); ?>
<header>
    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo">
</header>
<section class="homepage">
    <img src="<?php echo e(asset('images/slide.png')); ?>" alt="Slide">
    <a href="<?php echo e(url('login/')); ?>">Enter</a>
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\EL_DOGY(2)\04-Laravel\larapp\resources\views/welcome.blade.php ENDPATH**/ ?>