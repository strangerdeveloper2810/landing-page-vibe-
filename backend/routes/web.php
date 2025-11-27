<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('mail.contact-me');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');