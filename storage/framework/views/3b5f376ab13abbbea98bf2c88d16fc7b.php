
<?php $__env->startSection('title', 'Edit Pet Page - PetsApp'); ?>


<?php $__env->startSection('content'); ?>


<header class="nav level-2">
    <a href="<?php echo e(url ('pets')); ?>">
        <img src="<?php echo e(asset('images/ico-back.svg')); ?>" alt="Back">
    </a>
    <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="Logo">
    <a href="javascript:;" class="mburger">
        <img src="<?php echo e(asset('images/burger.svg')); ?>" alt="Menu Burger">
    </a>
</header>
<section class="register create">
<form action="<?php echo e(url('pets/'.$pet->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <img src="<?php echo e(asset('images/'. $pet->photo)); ?>" id="upload" alt="Slide">
    <input type="file" name="photo" id="photo" accept="image/*" >
    <input type="name" name="name" placeholder="Name" value="<?php echo e(old('name', $pet->name)); ?>">
    <input type="text" name="kind" placeholder="Kind" value="<?php echo e(old('kind',  $pet->kind)); ?>">
    <input type="text" name="weight" placeholder="Weight" value="<?php echo e(old('weight', $pet->weight)); ?>">
    <input type="text" name="age" placeholder="Age" value="<?php echo e(old('age', $pet->age)); ?>">
    <input type="text" name="breed" placeholder="Breed" value="<?php echo e(old('breed', $pet->breed)); ?>">
    <input type="text" name="location" placeholder="Location" value="<?php echo e(old('location', $pet->location)); ?>">
    <button type="submit">Edit</button>
</form>
</section>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


<script>
    $(document).ready(function () {
        $('#upload').click(function (e) {
            e.preventDefault()
            $('#photo').click()
        })


        $('#photo').change(function (e) {
            e.preventDefault();
            let reader = new FileReader()
            reader.onload = function(event) {
                $('#upload').attr('src', event.target.result)
            }
            reader.readAsDataURL(this.files[0])
        })
    })
</script>


<?php if(count($errors->all()) > 0): ?>
<?php $error = '' ?>
<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $error .= '<li>' . $message . '</li>'  ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script>
    $(document).ready(function () {
        Swal.fire({
            position: "top-end",
            title: "Ops!",
            html: `<?php echo $error ?>`,
            icon: "error",
            showConfirmButton: false,
            timer: 5000


        })
    })
</script>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\EL_DOGY(2)\04-Laravel\larapp\resources\views/pets/edit.blade.php ENDPATH**/ ?>