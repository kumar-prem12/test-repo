<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/courseLists', [CourseController::class, 'courseLists'])->name('courseLists');
Route::get('/createCourse', [CourseController::class, 'createCourse'])->name('createCourse');
Route::post('/storeCourse', [CourseController::class, 'storeCourse'])->name('storeCourse');
Route::get('/editCourse/{id}', [CourseController::class, 'editCourse'])->name('editCourse');
Route::post('/updateCourse/{id}', [CourseController::class, 'updateCourse'])->name('updateCourse');
Route::delete('/deleteCourse', [CourseController::class, 'deleteCourse'])->name('deleteCourse');

Route::get('/studentLists', [StudentController::class, 'studentLists'])->name('studentLists');
Route::get('/createStudent', [StudentController::class, 'createStudent'])->name('createStudent');
Route::delete('/deleteStudent', [StudentController::class, 'deleteStudent'])->name('deleteStudent');
Route::post('/storeStudent', [StudentController::class, 'storeStudent'])->name('storeStudent');
Route::get('/editStudent/{id}', [StudentController::class, 'editStudent'])->name('editStudent');
Route::post('/updateStudent/{id}', [StudentController::class, 'updateStudent'])->name('updateStudent');

Route::get('/getStudent', [StudentController::class, 'getStudent'])->name('getStudent');



