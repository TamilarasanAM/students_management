<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

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
Route::get('student/create', [StudentController::class, 'create'])->name('createstudent');
Route::post('student/save', [StudentController::class, 'save'])->name('savestudent');
Route::get('/', [StudentController::class, 'view'])->name('viewstudent');
Route::get('student/edit/{id}',[StudentController::class, 'edit'])->name('editstudent');
Route::post('student/update', [StudentController::class, 'update'])->name('updatestudent');
Route::get('student/delete/{id}', [StudentController::class, 'delete'])->name('deletestudent');



