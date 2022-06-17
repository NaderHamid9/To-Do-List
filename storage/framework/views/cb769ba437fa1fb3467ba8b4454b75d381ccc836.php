<?php $__env->startSection('content'); ?>
    <h1 class="title">To Do List</h1>


    <?php if( session('msg') ): ?>
        <div class="alert alert-success mt-3 alert-dismissible fade show message" role="alert">
            <?php echo e(session('msg')); ?>

            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <form class="tasks-form" action="<?php echo e(route('tasks.store')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <input id="add-task" type="text" name="task"  class="form-control d-inline w-75" aria-describedby="Task" placeholder="Enter Your Task">

        <input type="submit" class="btn btn-primary add-btn" value="Add"><br>
        <p style="color: #c60000">
        <?php $__errorArgs = ['task'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </p>
    </form>
    <h3 class="edit-title">You have <?php echo e(count($doneTask)); ?> Tasks to complete</h3>
    <form class="tasks-form2" action="<?php echo e(route('tasks.index')); ?>" method="get">
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <input type="text"  class="form-control d-inline w-75 mt-3" aria-describedby="Task" placeholder="Add a Task" value="<?php echo e($task->task); ?>" readonly>

        </input>




        <a href="<?php echo e(route('tasks.edit' , $task->id)); ?>" class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#g8g8g8" class="bi bi-pencil-square" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
        </svg></a>

                <?php if($task->isdone == 1): ?>

                    <a type="submit" class="done-btn" href="<?php echo e(route('tasks.check' , $task->id)); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#198754" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                </svg></a>

                    <?php else: ?>
                <a type="submit" class="done-btn" href="<?php echo e(route('tasks.uncheck' , $task->id)); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#000" class="bi bi-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    </svg></a>
                <?php endif; ?>



        </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Nader\to-do-list\resources\views/index.blade.php ENDPATH**/ ?>