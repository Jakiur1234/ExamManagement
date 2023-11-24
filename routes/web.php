<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//homepage route
Route::get('/', [HomeController::class,'home'])->name('home');

//Courses Route
Route::get('/courses', [CourseController::class,'courses'])->name('courses');

//about us route
Route::get('/about', function () {
    return view('about');
})->name('about');

//contact route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


//login route
Route::get('/login', [AuthController::class,'index'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login');
//signup route
Route::get('/register', [AuthController::class, 'register_view'])->name('signup');
Route::post('/register', [AuthController::class, 'register_user'])->name('signup');

/*
    All authenticate routes for admin and student
*/
Route::middleware('auth')->group(function(){
    Route::get('/logout',[AuthController::class,'logout'])->name('logout');
    Route::get('/dashboard',[AuthController::class,'dashboard'])->name('dashboard');
});
