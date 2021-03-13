<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\TeacherController;



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
     return view('Maindash'); });
     Route::get('/dashboard', function () {
        return view('Maindash'); })->name('dashboard');

 Route::resource('students', StudentController::class);
 Route::resource('rooms', RoomController::class);
 Route::resource('teachers', TeacherController::class);



    Route::get('/students', StudentController::class.'@index')->name('students');

    Route::get('/rooms', RoomController::class.'@index')->name('rooms');
    
    Route::get('/teachers', TeacherController::class.'@index')->name('teachers');

       