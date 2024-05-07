<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('home');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/welcome', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'showForm'])->name('show-form');
Route::post('/form', [FormController::class, 'processForm'])->name('process-form');