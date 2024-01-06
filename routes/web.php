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

Route::get('/course', [CourseController::class , 'index'] )->name('course.index');

Route::get('course/add' , [CourseController::class , 'create'])->name('course.create');

Route::post('courses', [CourseController::class , 'store'])->name('course.store');
