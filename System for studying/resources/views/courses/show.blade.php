<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Details</title>
</head>
<body>
    <h1>{{ $course->name }} - Details</h1>
    <p>Date: {{ $course->date }}</p>
    <p>Duration: {{ $course->duration }} hours</p>
    <p>Teacher ID: {{ $course->teacher_id }}</p>
    <p>Organization ID: {{ $course->organization_id }}</p>
    <p>Location ID: {{ $course->location_id }}</p>
    <a href="{{ route('courses.index') }}">Back to Courses</a>
</body>
</html>
