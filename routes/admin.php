<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ApplicationFormController;
use App\Http\Controllers\Admin\AdminRecordController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\ContactController;


use Illuminate\Support\Facades\Route;

    Route::post("/do-login", [LoginController::class,'doLogin'])->name('signin');

     Route::middleware(['auth:admin'])->group(function () {
        Route::get("/dashboard", [DashboardController::class,'dashboard'])->name('admin_home');

        Route::post("/logout", [LoginController::class,'logout'])->name('logout');
        Route::resource('aboutUs', AboutUsController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('contactUs', ContactController::class);
        Route::resource('adminCategory', AdminCategoryController::class);
        Route::resource('adminRecord', AdminRecordController::class);
        Route::resource('adminForm', ApplicationFormController::class);
        Route::post('/contactUs/reply', [ContactController::class, 'reply'])->name('contactUs.reply');


});