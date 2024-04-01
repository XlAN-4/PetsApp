<?php $__env->startSection('title', 'Dashboard Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('layouts.menuburguer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<header class="nav level-0">
    <a href="">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/Logo.svg')); ?>" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="<?php echo e(asset('images/burger.svg')); ?>"  alt="Menu Burger">
    </a>
</header>


<section class="dashboard">
    <h1>Dashboard: Custom</h1>
    <menu>
        <ul>
            <li>
                <a href="<?php echo e(url('mydata')); ?>">
                    <img src="<?php echo e(asset('images/Usuario logo.svg')); ?>" alt="My Data">
                    <span>My Data</span>    
                </a>
            </li>
          
            <li>
                <a href="<?php echo e(url('myadoptions')); ?>">
                    <img src="<?php echo e(asset('images/logo adoption.svg')); ?>" alt="My Adoptions">
                    <span>My Adoptions</span>
                </a>
            </li>
        </ul>
    </menu>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
    $(document).ready(function () {
        $('body').on('click', '.mburger',  function () {
            $('.menu').addClass('open')
        })
        $('body').on('click', '.closem',  function () {
            $('.menu').removeClass('open')
        })
    })
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\AUTOCAD\Desktop\EL_DOGY(2)\04-Laravel\larapp\resources\views/dashboard-Custom.blade.php ENDPATH**/ ?>