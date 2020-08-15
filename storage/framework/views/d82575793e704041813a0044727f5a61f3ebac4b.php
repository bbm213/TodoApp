

<?php $__env->startSection('title','All Todos'); ?>

<?php $__env->startSection('content'); ?>
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="card" style="width: 50%">
                    <div class="card-header text-center">
                        <h1>All todos</h1> 
                    </div>
                    <?php if(session()->has('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <div class="card-body">
                        <div class="list-group">
                        <?php $__empty_1 = true; $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <li class="list-group-item text-muted">
                                <?php echo e($todo->title); ?>

                                <span class="float-right">
                                <a href="/todos/<?php echo e($todo->id); ?>/delete">
                                       <i class="fa fa-trash-o" aria-hidden="true" style="color: #7e9ff8"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                <a href="/todos/<?php echo e($todo->id); ?>">
                                       <i class="fa fa-eye mr-2" aria-hidden="true" style="color: #e3342f"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                    <a href="/todos/<?php echo e($todo->id); ?>/edit">
                                       <i class="fa fa-edit mr-2" aria-hidden="true" style="color: #380079"></i>
                                    </a>
                                </span>
                                <?php if(!$todo -> completed): ?>
                                <span class="float-right">
                                    <a href="/todos/<?php echo e($todo->id); ?>/complete">
                                       <i class="fa fa-check-square mr-2" aria-hidden="true" style="color: #23b41e"></i>
                                    </a>
                                </span>
                                <?php endif; ?>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <p class="text-center">No todos ready</p>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Admin\todo-app\resources\views/todos/index.blade.php ENDPATH**/ ?>