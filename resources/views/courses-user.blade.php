<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COURSES</title>
</head>
<body>
    <h1>{{$user->name}}</h1>

        @foreach($user->courses as $course)
            <li>{{ $course->course_name }}</li>
        @endforeach
    
</body>
</html>