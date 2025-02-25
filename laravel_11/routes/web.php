<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/', function () {
    return view('student/index');
});
*/
Route::get('/students_abc', [StudentController::class, 'abc']);
Route::resource('students', StudentController::class);