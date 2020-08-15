<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    
</head>
<body>
        <div class="container">
            <div class="row pt-3 justify-content-center">
                <div class="card" style="width: 50%">
                    <div class="card-header text-center">
                        <h1>All todos</h1> 
                    </div>
                    <div class="card-body">
                        <div class="list-group">
                        <?php $__currentLoopData = $todos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item text-muted">
                                <?php echo e($todo->title); ?>

                                <span class="float-right">
                                    <a href="#">
                                       <i class="fa fa-trash-o" aria-hidden="true" style="color: #7e9ff8"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                    <a href="#">
                                       <i class="fa fa-eye mr-2" aria-hidden="true" style="color: #e3342f"></i>
                                    </a>
                                </span>
                                <span class="float-right">
                                    <a href="#">
                                       <i class="fa fa-edit mr-2" aria-hidden="true" style="color: #7ef8ad"></i>
                                    </a>
                                </span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>    
       
</body>
</html>
<?php /**PATH C:\Users\Admin\todo-app\resources\views/todos/todos.blade.php ENDPATH**/ ?>