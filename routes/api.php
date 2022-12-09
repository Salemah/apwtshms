<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginSubmit']);
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::post('/registration',[RegistrationController::class,'store']);

//
// help route
Route::get('/helplist',[HelpController::class,'index']);
Route::post('/help/Delete/{id}',[HelpController::class,'helpDelete']);
Route::post('/help/approve/{id}',[HelpController::class,'helpApprove']);
//doctor route
Route::get('/doctor/list',[DoctorController::class,'index']);
Route::post('/doctor/add',[DoctorController::class,'store']);
Route::post('/doctor/delete/{id}',[DoctorController::class,'doctorDelete']);
Route::post('/doctor/update/{id}',[DoctorController::class,'update']);
//instructor route
Route::post('/instructor/add',[InstructorController::class,'store']);
Route::get('/instructor',[InstructorController::class,'index']);
Route::post('/instructor/delete/{id}',[InstructorController::class,'instructorDelete']);

//sanitarybooth route
Route::post('/SanitaryBooth/add',[SanitarboothController::class,'store']);
Route::get('/SanitaryBooth',[SanitaryboothController::class,'index']);
Route::post('/SanitaryBooth/delete/{id}',[SanitaryboothController::class,'SanitaryBoothDelete']);
