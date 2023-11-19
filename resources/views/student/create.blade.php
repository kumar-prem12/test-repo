<html>
    <head>
        <title>Create Student</title>
    </head>
    <body>
        <form action="{{route('storeStudent')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <label for="student_name">Student Name</label>
            <input type="text" name="student_name" id="student_name" required maxlength="50" placeholder="Enter student name"><br><br>
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="course_name" required maxlength="100" placeholder="Enter course name"><br><br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required maxlength="100" placeholder="Enter address"><br><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required maxlength="50" placeholder="Enter email"><br><br>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" required maxlength="15"><br><br>

            <button type="submit">Create</button>
        </form>
    </body>
</html>