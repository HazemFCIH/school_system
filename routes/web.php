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

// Route::get('/', function () {
//     return ;
// });
 Route::get('/', function () {
     return view('welcome'); });
     Route::get('/dashboard', function () {
        return view('Maindash'); })->name('dashboard');
    Route::get('/students', function () {
            return view('students');
        
        
        })->name('students');
        Route::get('/rooms', function () {
            return view('rooms');
        
        
        })->name('rooms');
       