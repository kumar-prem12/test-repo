<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentLists(){
        $studentLists = Student::all();
        return view('student.index',compact('studentLists'));
    }
}
