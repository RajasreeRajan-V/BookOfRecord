<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\AdminCategory;
use App\Http\Controllers\Admin\ContactController;


use Illuminate\Support\Facades\Route;

    Route::post("/do-login", [LoginController::class,'doLogin'])->name('signin');

     Route::middleware(['auth:admin'])->group(function () {
        Route::get("/dashboard", [DashboardController::class,'dashboard'])->name('admin_home');

        Route::post("/logout", [LoginController::class,'logout'])->name('logout');
        Route::resource('aboutUs', AboutUsController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('contactUs', ContactController::class);
        Route::resource('adminCategory', AdminCategory::class);
        Route::post('/contactUs/reply', [ContactController::class, 'reply'])->name('contactUs.reply');


});