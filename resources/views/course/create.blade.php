<html>
    <head>
        <title>Create Course</title>
    </head>
    <body>
        <form action="{{route('storeCourse')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="course_name" required maxlength="50" placeholder="Enter course name"><br><br>

            <label for="course_desc">Course Description</label>
            <textarea name="course_desc" required id="course_desc" placeholder="Enter course description"></textarea><br><br>
            <button type="submit">Create</button>
        </form>
    </body>
</html>