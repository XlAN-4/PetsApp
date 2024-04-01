
<?php $__env->startSection('title', 'Show User Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>
<header class="nav level-2">
    <a href="<?php echo e(url('users')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/Logo.svg')); ?>" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="<?php echo e(asset('images/burger.svg')); ?>" alt="Menu Burger">
    </a>
</header>
<section class="show">
    <h1>Show User</h1>
    <img src="<?php echo e(asset('images/'.$user->photo)); ?>" class="photo" alt="Photo">
    <p class="role"><?php echo e($user->role); ?></p>
    <div class="info">
        <p><?php echo e($user->document); ?></p>
        <p><?php echo e($user->fullname); ?></p>
        <p><?php echo e($user->email); ?></p>
        <p><?php echo e($user->phone); ?></p>
        <p><?php echo e($user->gender); ?></p>
        <p><?php echo e(Carbon\Carbon::parse($user->birthdate)->diffforhumans()); ?></p>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\EL_DOGY(2)\04-Laravel\larapp\resources\views/users/show.blade.php ENDPATH**/ ?>