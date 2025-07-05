<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/terms-conditions', [PageController::class, 'termsConditions'])->name('terms-conditions');
