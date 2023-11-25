<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::post('/submitContactForm', 'App\Http\Controllers\HomeController@submitContactForm')->name('home.submitcontactform');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/contactform', function () {
    return view('contactForm');
});

Route::get('/uploadfile','App\Http\Controllers\UploadFileController@index');
Route::post('/uploadfile','App\Http\Controllers\UploadFileController@showUploadFile');
require __DIR__.'/auth.php';
