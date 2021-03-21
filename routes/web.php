<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/notas', function () {
    return view('proyects.notes');
})->name('notes');

Route::get('/chat', function () {
    return view('proyects.chat');
})->name('chat');

Route::get('/tienda-online', function () {
    return view('proyects.ecommerce');
})->name('ecommerce');

Route::get('/download-cv','CurriculumController@download')->name('download-cv');