<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/home', [RegisterController::class, 'home'])->name('home');
Route::get('/home', [LoginController::class, 'home'])->name('home');

Route::get('/register', [RegisterController::class, 'showStep1'])->name('register.step1');
Route::post('/register/step2', [RegisterController::class, 'postStep1'])->name('register.step1.post');
Route::get('/register/step2', [RegisterController::class, 'showStep2'])->name('register.step2');
Route::post('/register/step3', [RegisterController::class, 'postStep2'])->name('register.step2.post');
Route::get('/register/step3', [RegisterController::class, 'showStep3'])->name('register.step3');
Route::post('/register/submit', [RegisterController::class, 'submit'])->name('register.submit');
