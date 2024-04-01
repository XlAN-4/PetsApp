
<?php $__env->startSection('title', 'Users Page = PetsApp'); ?>
<?php $__env->startSection('content'); ?>

<header class="nav level-2">
    <a href="<?php echo e(route('dashboard')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset ('images/logo.svg')); ?>" alt="Logo">
    <a href="" class="mburger">
        <img src="<?php echo e(asset('images/burger.svg')); ?>" alt="Menu Burger">
    </a>
</header>
<section class="module">
    <h1>Module Users</h1>
    <a class="add" href="<?php echo e(url('users/create')); ?>">
        <img src="<?php echo e(asset('images/ico-add.svg')); ?>" width="30px" alt="Add">
        Add User
    </a>
    <table>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
           
        
            <tr>
                <td>
                    <img src=" <?php echo e(asset('images/' .$user -> photo)); ?>" alt="User">
                </td>
                <td>
                    <span><?php echo e($user -> fullname); ?></span>
                    <span><?php echo e($user -> role); ?></span>
                </td>
                <td>
                    <a href="<?php echo e(url('users/' . $user->id)); ?>" class="show">
                        <img src="<?php echo e(asset('images/ico-show.svg')); ?>" alt="Show">
                    </a>
                    <a href="<?php echo e(url('users/' . $user->id) . '/edit'); ?>" class="edit">
                        <img src="<?php echo e(asset('images//ico-edit.svg')); ?>" alt="Edit">
                    </a>
                    <form action="<?php echo e(url('users/'. $user->id)); ?>" method="POST">
                        <?php echo csrf_field(); ?> 
                        <?php echo method_field('delete'); ?>
                        <button type="button" class="btn-delete"> 
                            <img src="<?php echo e(asset('images/ico-delete.svg')); ?>"alt="Delete">
                        </button>
                    </form>

                    
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <?php echo e($users->links('layouts.paginator')); ?>

                    
                </td>
            </tr>
        </tfoot>
    </table>
</section>

<?php $__env->stopSection(); ?>



<?php $__env->startSection('js'); ?>
    <?php if(session('message')): ?>
        

       
        <script>
            $(document) . ready (function(){
                Swal.fire({
                    position: "top-end",
                    title: "Great!",
                    text:"<?php echo e((session('message'))); ?>",
                    icon: "success",
                    showConfirmButton: false,
                    timer: 5000
                })

            })
        </script> 
    <?php endif; ?>
    <script>
        $(document).ready(function () {
            $('body').on('click', '.btn-delete', function () {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#1f7a8c",
                    cancelButtonColor: "#1f7a8c",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).parent().submit()
                        }
                    })
                })
            })
    </script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\EL_DOGY(2)\04-Laravel\larapp\resources\views/users/index.blade.php ENDPATH**/ ?>