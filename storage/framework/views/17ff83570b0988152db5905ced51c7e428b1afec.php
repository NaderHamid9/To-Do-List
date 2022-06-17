<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <title>To Do List</title>
</head>
<body>
<div class="container w-50 tasks-container text-center">
    <?php echo $__env->yieldContent('content'); ?>

    </div>

<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Nader\to-do-list\resources\views/layout.blade.php ENDPATH**/ ?>