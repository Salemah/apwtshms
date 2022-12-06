<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
//use App\Http\Controllers\CourseController;
use App\Http\Controllers\LoginController;

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
    return view('welcome');
});

Route::get('/hello', [PagesController::class, 'index'])->name('hello');
Route::get('/profile',[PagesController::class, 'profile'])->name('profile');


Route::get('/userList',[UserController::class, 'userList'])->name('userList')->middleware('ValidAdmin');
// Route::get('/studentEdit/{name}/{id}',[StudentController::class, 'studentEdit'])->name('studentEdit');
Route::get('/userEdit/{id}',[UserController::class, 'userEdit'])->name('userEdit');
Route::post('/userEdit',[UserController::class, 'userEditSubmitted'])->name('userEdit');
Route::get('/userDelete/{id}',[UserController::class, 'userDelete'])->name('userDelete');

//Route::get('/studentCreate',[StudentController::class, 'studentCreate'])->name('studentCreate')->middleware('ValidTeacher');
//Route::post('/studentCreate',[StudentController::class, 'studentCreateSubmitted'])->name('studentCreate');

//teacher
Route::get('/adminCreate',[AdminController::class, 'adminCreate'])->name('adminCreate')->middleware('ValidAdmin');;
Route::post('/adminCreate',[AdminController::class, 'adminCreateSubmitted'])->name('adminCreate');
Route::get('/adminList',[AdminController::class, 'adminList'])->name('adminList')->middleware('ValidAdmin');;

//Teacher Course
Route::get('/teacher/courses/{id}',[TeacherController::class,'teacherCourses'])->name('teacher.courses')->middleware('ValidTeacher');
//course
Route::get('/courses',[CourseController::class,'courseTeacher'])->name('teacher.courses'); 

//admin login
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit'])->name('loginSubmit');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

// admin Registration
Route::get('/registration',[AdminController::class,'registration'])->name('registration');
Route::post('/registration',[AdminController::class,'newAdmin'])->name('registrationSubmit');


//admindash
Route::get('/admin/dash', [AdminController::class,'adminDash'])->name('adminDash')->middleware('ValidAdmin'); 