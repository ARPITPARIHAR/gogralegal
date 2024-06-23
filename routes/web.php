<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PracticeAreaController;
use App\Http\Controllers\LoginController;

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\isCustomer;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('contact-us', 'contact_us')->name('contact-us');
    Route::get('about-us/{slug}', 'about_us')->name('about-us');
    Route::get('team', 'team')->name('team');
    Route::get('login-register', 'login_register')->name('login-register');
    Route::get('lawyers', 'lawyers')->name('lawyers');
    Route::get('publications', 'publications')->name('publications');
    Route::get('careers', 'careers')->name('careers');
    Route::get('page/{slug}', 'show')->name('pages.show');
});

Route::controller(PracticeAreaController::class)->group(function () {
    Route::get('practice-areas', 'index')->name('practice-areas.index');
    Route::get('practice-area/{slug}', 'show')->name('practice-area.show');
});


Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/login', [LoginController::class, 'customer_login'])->name('user.login');
Route::get('admin/login', [LoginController::class, 'backend_login'])->name('backend.login');

Route::get('/login', [LoginController::class, 'customer_login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');




