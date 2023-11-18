<html>
    <head>
        <title>Create Course</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <form action="{{route('storeCourse')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="text" name="course_name" required maxlength="50"><br><br>
            <textarea name="course_desc" required></textarea><br><br>
            <button type="submit">Create</button>
        </form>
    </body>
</html>