<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/form-mahasiswa', [FormController::class, 'showForm']);
Route::post('/form-mahasiswa/kirim', [FormController::class, 'submitForm'])->name('form.submit');