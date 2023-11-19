<?php

use Illuminate\Support\Facades\Route;

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

//homepage route
Route::get('/', function () {
    return view('home');
})->name('home');

//Courses Route
Route::get('/courses', function () {
    return view('courses');
})->name('courses');

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
