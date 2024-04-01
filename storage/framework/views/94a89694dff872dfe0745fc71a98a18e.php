
<?php $__env->startSection('title', 'Show Pet - PetsApp'); ?>


<?php $__env->startSection('content'); ?>






<header class="nav level-2">
    <a href="<?php echo e(url('pets')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo">
    <a href="" class="mburger" >
        <img src="<?php echo e(asset('images/burger.svg')); ?>" alt="Menu Burger">
    </a>


</header>
    <section class="show">
        <h1>Show User</h1>
        <img src="<?php echo e(asset('images/'.$pet->photo)); ?>" class="photo" alt="Photo">
        <div class="info">
            <p><?php echo e($pet->name); ?></p>
            <p><?php echo e($pet->photo); ?></p>
            <p><?php echo e($pet->kind); ?></p>
            <p><?php echo e($pet->weight); ?></p>
            <p><?php echo e($pet->age); ?></p>
            <p><?php echo e($pet->breed); ?></p>
            <p><?php echo e($pet->location); ?></p>
        </div>
    </section>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\EL_DOGY(2)\04-Laravel\larapp\resources\views/pets/show.blade.php ENDPATH**/ ?>