<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\userController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\listingController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['middleware' => 'prevent-back-history','middleware' => ['auth']], function(){
    Auth::routes();
    Route::get('/admin', [userController::class,'dashboard'])->name('admin');
    
});
Route::post('/user/auth', [userController::class,'authenticate'])->name('auth');

Route::get('/', [loginController::class,'login'])->name('login');
Route::get('/logout',[userController::class, 'logout']);
Route::get('/welcome',[loginController::class,'welcomePage']);
//Route::get('report', [StudentController::class,'report'])->name('report');
Route::get('reportAll', [listingController::class,'reportAll'])->name('reportAll');

Route::get('/student-import',[StudentController::class,'importView'])->name('import');
Route::get('/student-import',[StudentController::class,'importView'])->name('import');


Route::post('/upload-users', [StudentController::class, 'import'])->name('upload');
Route::post('/upload-acadPerform', [StudentController::class, 'importAcademic'])->name('acad');
Route::post('/upload-attend', [StudentController::class, 'importAttend'])->name('attend');
Route::post('/upload-regist', [StudentController::class, 'importRegist'])->name('regist');
Route::post('/upload-studPerform', [StudentController::class, 'importStud'])->name('stud');

Route::get('/forms',[loginController::class,'forms']);

Route::get('/profile', [loginController::class, 'profile']);
Route::get('/student',[profileController::class, 'students']);
Route::get('/showStudent',[listingController::class,'getStudents'])->name('list');
Route::get('/registration',[loginController::class,'registerForm'])->name('register');
Route::post('/users',[userController::class,'store']);
Route::post('/logout', [loginController::class, 'logout']);

