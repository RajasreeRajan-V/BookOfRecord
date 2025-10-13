<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/test', function () {
    return view('users.test');
});

Route::get('/', function () {return view('users.index');})->name('home');
Route::get('/about_us',[UserController::class,'about'])->name('about');
Route::get('/category',[UserController::class,'category'])->name('category');
Route::get('/gallery',[UserController::class,'gallery'])->name('gallery');
Route::get('/records',[UserController::class,'records'])->name('records');
Route::get('/single',[UserController::class,'single'])->name('single');

Route::resource('contact', ContactUsController::class);




require __DIR__.'/auth.php';
