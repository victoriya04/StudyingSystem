<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Course</title>
</head>
<body>
    <h1>Create New Course</h1>
    <form action="<?php echo e(route('courses.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="name">Course Name:</label>
        <input type="text" name="name" id="name" required>
        <label for="date">Date:</label>
        <input type="date" name="date" id="date" required>
        <label for="duration">Duration:</label>
        <input type="number" name="duration" id="duration" required>
        <label for="teacher_name">Teacher:</label>
        <input type="text" name="teacher_name" id="teacher_name" required>
        <label for="organization_name">Organization:</label>
        <input type="text" name="organization_name" id="organization_name" required>
        <label for="location_name">Location:</label>
        <input type="text" name="location_name" id="location_name" required>
        <button type="submit">Create Course</button>
    </form>
</body>
</html>
<?php /**PATH D:\PHP - курсова работа\System for studying\System for studying\resources\views/courses/create.blade.php ENDPATH**/ ?>