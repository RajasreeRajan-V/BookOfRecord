<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about_us',[UserController::class,'about'])->name('about');
Route::get('/category',[UserController::class,'category'])->name('category');
Route::get('/gallery',[UserController::class,'gallery'])->name('gallery');
// Route::get('/records',[UserController::class,'records'])->name('records');
Route::get('/single',[UserController::class,'single'])->name('single');
Route::get('/category/{id}', [UserController::class, 'showRecord'])->name('category.record');
Route::get('/records/{id}', [UserController::class, 'showSingleRecord'])->name('category.single.record');
Route::resource('contact', ContactUsController::class);




require __DIR__.'/auth.php';
