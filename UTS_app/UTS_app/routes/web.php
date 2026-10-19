<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form-mahasiswa', [FormController::class, 'showForm']);
Route::post('/form-mahasiswa/kirim', [FormController::class, 'submitForm'])->name('form.submit');

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/students', function () {
    return view('students');
});

Route::get('/grades', function () {
    return view('grades');
});

Route::get('/assignments', function () {
    return view('assignments');
});