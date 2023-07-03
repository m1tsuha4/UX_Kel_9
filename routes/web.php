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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/about/profile', function (){
    return view('profile');
});

Route::get('/about/staff', function (){
    return view('staff');
});

Route::get('/about/berita', function (){
    return view('berita');
});

Route::get('/about/akademik', function (){
    return view('akademik');
});

Route::get('/about/document', function (){
    return view('document');
});

Route::get('/contact', function (){
    return view('contact');
});
