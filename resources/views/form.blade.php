<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <h1>Form</h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?> 
        </div>
    <?php endif; ?>
    
    <?php if(session('image')): ?>
        <div>
            <img src="<?php echo e(asset('images/' . session('image'))); ?>" alt="Image" width="100px" height="100px">
        </div>
    <?php endif; ?>

    <?php if(session('name')): ?>
        <div>
            <?php echo e(session('name')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('email')): ?>
        <div>
            email:<?php echo e(session('email')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('age')): ?>
        <div>
            <?php echo e(session('age')); ?>

        </div>
    <?php endif; ?>

    <?php if(session('height')): ?>
        <div>
            <?php echo e(session('height')); ?>

        </div>
    <?php endif; ?>


    <form action="<?php echo e(route('form.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?> 
        <input type="text" name="name" placeholder="Name"/>
        <input type="email" name="email" placeholder="Email"/>
        <input type="number" name="age" placeholder="Age"/>
        <input type="number" step="0.01" name="height" placeholder="Double Field (2.50 - 99.99)"/>
        <input type="file" name="image" accept=".jpg,.png,.jpeg"/>
        <button type="submit">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\laragon\www\hwformblade\resources\views/form.blade.php ENDPATH**/ ?>