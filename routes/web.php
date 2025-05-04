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
    return view('pages.homepage');
})->name('homepage');

Route::get('/coe', function () {
    return view('pages.coe');
})->name('coe');  

Route::get('/News', function () {
    return view('pages.news-page');
})->name('newspage');  

Route::get('/NewsDetail', function () {
    return view('pages.news-detail');
})->name('newsdetail');  

Route::get('/Event', function () {
    return view('pages.events-page');
})->name('eventpage');  

Route::get('/EventDetail', function () {
    return view('pages.events-detail');
})->name('eventdetail');  

Route::get('/login', function () {
    return view('frontend.login');
})->name('login');  

Route::get('/kelola', function () {
    return view('pages.kelola-akun');
})->name('kelolaAkun');  
