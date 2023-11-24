<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class Student extends Model
{
    use HasFactory;
    protected $table = "students";

    public function getStudentList(){
        // dd('student list is here');
        // return $this->orderBy('student_name', 'asc')->get();
        $count1 = $this->get(); 
        $count = DB::table('students')->get(); 
        return [$count->count(),$count1->toArray()]; 
        // return 'student list are here';
    }
}
