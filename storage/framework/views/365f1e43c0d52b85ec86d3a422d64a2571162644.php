


<?php $__env->startSection('title','Todo -'. $todo->id); ?>

<?php $__env->startSection('content'); ?>       
       <div class="container">
           <h1 class="mt-5 text-center"><?php echo e($todo->title); ?></h1>
       </div>
       <div class="row pt-5 justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span>Details</span>
                        <span class="bdage badge-warning float-right"><?php echo e(boolval($todo->completed) ? 'Completed' : 'Non Completed'); ?></span>
                    </div>
                    <div class="card-body">
                        <?php echo e($todo->description); ?>

                    </div>
            </div>
       </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\todo-app\resources\views/todos/show.blade.php ENDPATH**/ ?>