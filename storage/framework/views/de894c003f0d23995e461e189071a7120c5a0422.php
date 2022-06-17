<?php $__env->startSection('content'); ?>
    <h1 class="title">To Do List</h1>
    <h3 class="edit-title">Edit Your Task</h3>

    <form class="edit-form" action="<?php echo e(route('tasks.update',$tasks->id)); ?>" method="post">
    <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>
    <input id="edit-task" type="text" name="task"  class="form-control d-inline w-75" aria-describedby="Task" value="<?php echo e($tasks->task); ?>">
    <input type="submit" class="btn btn-primary add-btn" value="Edit">


</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nader\to-do-list\resources\views/edit.blade.php ENDPATH**/ ?>