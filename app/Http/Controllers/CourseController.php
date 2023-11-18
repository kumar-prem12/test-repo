<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Course;
use Validator;

class CourseController extends Controller
{
    public function courseLists(){
        $courseLists = Course::all();
        return view('course.index',compact('courseLists'));
    }

    public function createCourse(){
        return view('course.create');
    }

    public function storeCourse(Request $request){

        $validator = Validator::make($request->all(),[
            "course_name" => "required|max:50",
            "course_desc" => "required",
        ]);
        if($validator->fails()){
            return redirect()->route('courseLists')->withInput()->with('errors', $validator->messages()->all());
        }

        $course = new Course();
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_desc;
        $course->save();
        return redirect()->route('courseLists');
    }

    public function editCourse(Request $request,$id){
        $course = Course::find($id);
        return view('course.edit',compact('course'));
    }

    public function updateCourse(Request $request,$id){
        $validator = Validator::make($request->all(),[
            "course_name" => "required|max:50",
            "course_desc" => "required",
        ]);
        if($validator->fails()){
            return redirect()->route('courseLists')->withInput()->with('errors', $validator->messages()->all());
        }
        
        $course = Course::find($id);
        $course->course_name = $request->course_name;
        $course->course_description = $request->course_desc;
        $course->save();
        return redirect()->route('courseLists');
    }

    public function deleteCourse(Request $request){
        $course = Course::find($request->id)->delete();
        return redirect()->route('courseLists');
    }
}
