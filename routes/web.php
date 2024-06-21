<?php

use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\isCustomer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\CustomerController;
use App\Http\Controllers\Backend\BusinessSettingsController;
use App\Http\Controllers\Backend\SliderSettingController;


Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('contact-us', 'contact_us')->name('contact-us');
    Route::get('about-us/{slug}', 'about_us')->name('about-us');
    Route::get('practice-areas', 'practice_areas')->name('practice-areas');
    Route::get('practice-area/{slug}', 'practice_area')->name('practice-area');
    Route::get('team', 'team')->name('team');
    Route::get('login-register', 'login_register')->name('login-register');
});

Route::post('/submit-contact-form', [ContactController::class, 'store'])->name('contact.submit');
Route::group(['middleware' => ['auth']], function () {
    Route::middleware([isCustomer::class])->group(function () {
        Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('customer.dashboard');
    });
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('admin/login', [LoginController::class, 'customer_login'])->name('user.login');
Route::get('admin/login', [LoginController::class, 'backend_login'])->name('backend.login');

Route::get('/login', [LoginController::class, 'customer_login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/register', [LoginController::class, 'register'])->name('register');



Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::middleware([isAdmin::class])->group(function () {
        Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    });

Route::get('/business-settings', [BusinessSettingsController::class, 'index'])->name('business-settings.index');
Route::get('/business-settings/{id}/edit', [BusinessSettingsController::class, 'edit'])->name('business-settings.edit');
Route::put('/business-settings/{id}', [BusinessSettingsController::class, 'update'])->name('business-settings.update');


Route::get('/slider-settings', [SliderSettingController::class, 'index'])->name('slider-settings.index');
Route::get('/slider-settings/{id}/edit', [SliderSettingController::class, 'edit'])->name('slider-settings.edit');
Route::put('/slider-settings/{id}', [SliderSettingController::class, 'update'])->name('slider-settings.update');

});

