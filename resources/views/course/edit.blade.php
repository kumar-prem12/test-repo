<html>
    <head>
        <title>Edit Course</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <form action="{{route('updateCourse',$course->id)}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="course_name" required maxlength="50" value="{{$course->course_name}}"><br><br>
            <textarea name="course_desc" required>{{$course->course_description}}</textarea><br><br>
            <button type="submit">Update</button>
        </form>
    </body>
</html>