<?php $__env->startSection('title', 'Dashboard Page - PetsApp'); ?>

<?php $__env->startSection('content'); ?>

<div class="menu">
    <a href="javascript:;" class="closem">
        <img src="<?php echo e(asset('images/mburger-close.svg')); ?>" alt="">
    </a>
    <nav>
        <img src="<?php echo e(asset('images') . '/' . Auth::user()->photo); ?>" alt="Photo">
        <h4><?php echo e(Auth::user()->fullname); ?></h4>
        <h5><?php echo e(Auth::user()->role); ?></h5>
        <form action="<?php echo e(route('logout')); ?>" method="post">
            <button class="closes">Log Out</button>
            <?php echo csrf_field(); ?>
        </form>
    </nav>
</div>


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
    <h1>Dashboard: Admin</h1>
    <menu>
        <ul>
            <li>
                <a href="<?php echo e(url('users')); ?>">
                    <img src="<?php echo e(asset('images/Usuario logo.svg')); ?>" alt="Users">
                    <span>Module User</span>    
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('pets')); ?>">
                    <img src="<?php echo e(asset('images/Pets Logo.svg')); ?>" alt="Pets">
                    <span>Module Pets</span>
                </a>
            </li>
            <li>
                <a href="<?php echo e(url('adoptions')); ?>">
                    <img src="<?php echo e(asset('images/logo adoption.svg')); ?>" alt="Adoptions">
                    <span>Module Adoptions</span>
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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\EL_DOGY(2)\04-Laravel\larapp\resources\views/dashboard-admin.blade.php ENDPATH**/ ?>