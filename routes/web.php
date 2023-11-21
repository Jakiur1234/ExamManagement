<?php

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
Route::get('/login', function () {
    return view('login');
})->name('login');

//signup route
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
