<html>
    <head>
        <title>Edit Student</title>
    </head>
    <body>
        <form action="{{route('updateStudent',$student->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">

            <label for="student_name">Student Name</label>
            <input type="text" name="student_name" id="student_name" required maxlength="50" value="{{$student->student_name}}" placeholder="Enter student name"><br><br>
            <label for="course_name">Course Name</label>
            <input type="text" name="course_name" id="course_name" required maxlength="100" value="{{$student->course_name}}" placeholder="Enter course name"><br><br>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required maxlength="100" value="{{$student->address}}" placeholder="Enter address"><br><br>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required maxlength="50" value="{{$student->email}}" placeholder="Enter email"><br><br>
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" required value="{{$student->dob}}" maxlength="15"><br><br>

            <button type="submit">Update</button>
        </form>
    </body>
</html>