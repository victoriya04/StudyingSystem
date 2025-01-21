<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
</head>
<body>
    <h1>Courses List</h1>
    <a href="<?php echo e(route('courses.create')); ?>">Create New Course</a>
    <ul>
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <?php echo e($course->name); ?> - <?php echo e($course->date); ?>

                <a href="<?php echo e(route('courses.edit', $course->id)); ?>">Edit</a>
                <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST" style="display:inline;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH D:\PHP - курсова работа\System for studying\System for studying\resources\views/courses/index.blade.php ENDPATH**/ ?>