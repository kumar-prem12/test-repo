<html>
    <head>
        <title>Edit Course</title>
    </head>
    <body>
        <form action="{{route('updateCourse',$course->id)}}" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" required id="course_name" maxlength="50" placeholder="Enter course name" value="{{$course->course_name}}"><br><br>

            <label for="course_desc">Course Description</label>
            <textarea name="course_desc" id="course_desc" required placeholder="Enter course description">{{$course->course_description}}</textarea><br><br>

            <button type="submit">Update</button>
        </form>
    </body>
</html>