<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Validator;

class StudentController extends Controller
{
    public function studentLists(){
        $studentLists = Student::all();
        return view('student.index',compact('studentLists'));
    }

    public function createStudent(){
        return view('student.create');
    }

    public function storeStudent(Request $request){

        $validator = Validator::make($request->all(),[
            "student_name" => "required|max:50",
            "course_name" => "required|max:100",
            "address" => "required|max:100",
            'email' => 'required|max:50|unique:students,email',
            "dob" => "required",
        ]);
        if($validator->fails()){
            return redirect()->route('studentLists')->withInput()->with('errors', $validator->messages()->all());
        }

        $course = new Student();
        $course->student_name = $request->student_name;
        $course->course_name = $request->course_name;
        $course->address = $request->address;
        $course->email = $request->email;
        $course->dob = $request->dob;

        $course->save();
        return redirect()->route('studentLists');
    }

    public function editStudent(Request $request,$id){
        $student = Student::find($id);
        return view('student.edit',compact('student'));
    }

    public function updateStudent(Request $request,$id){

        $validator = Validator::make($request->all(),[
            "student_name" => "required|max:50",
            "course_name" => "required|max:100",
            "address" => "required|max:100",
            'email' => 'required|max:50|unique:students,email,'.$id,
            "dob" => "required",
        ]);
        if($validator->fails()){
            return redirect()->route('studentLists')->withInput()->with('errors', $validator->messages()->all());
        }

        $course = Student::find($id);
        $course->student_name = $request->student_name;
        $course->course_name = $request->course_name;
        $course->address = $request->address;
        $course->email = $request->email;
        $course->dob = $request->dob;
        $course->save();
        return redirect()->route('studentLists');
    }

    // 'email' => 'required|max:50|unique:contact,email,'.$contact_id,
// 

    public function deleteStudent(Request $request){
        $student = Student::find($request->id)->delete();
        return redirect()->route('studentLists');
    }
}
