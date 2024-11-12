<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/contact-us', [PublicController::class, 'contact_us'])->name('contact_us');

Route::post('/contact-us/submit', [PublicController::class, 'contact_us_submit'])->name('contact_us_submit');