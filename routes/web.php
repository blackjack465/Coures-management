<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//The main page
Route::get('/course', [CourseController::class , 'index'] )->name('course.index');

//Creat a new course
Route::get('/course/add' , [CourseController::class , 'create'])->name('course.create');

Route::post('/course', [CourseController::class , 'store'])->name('course.store');

//Get the edit page
Route::get('/course/{course}/edit' , [CourseController::class , 'edit'])->name('course.edit');

Route::put('/course/{course}/edit', [CourseController::class, 'update'])->name('course.update');

//Show course details
Route::get('/course/{course}/view', [CourseController::class , 'show'])->name('course.show');
