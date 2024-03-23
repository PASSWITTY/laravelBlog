<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// user
Route::get('/', [UserController::class, 'index'])->name('landing');
Route::get('/trends/{id}',[UserController::class,'trending']);
Route::post('/feedbacks', [App\Http\Controllers\UserController::class, 'feedBack'])->name('feedback');

// Route::post('/testimonials', [UserController::class, 'testimonials'])->name('usertestimonials');

// Admin
Auth::Routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/add', [App\Http\Controllers\HomeController::class, 'savePage'])->name('save');

Route::post('/saveblog', [App\Http\Controllers\HomeController::class, 'save'])->name('saveblog');

Route::post('/update', [App\Http\Controllers\HomeController::class, 'updatePage'])->name('updatepage');

Route::get('/edit/{id}',[App\Http\Controllers\HomeController::class,'editBlog']);

Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete']);
Route::get('/testimonials', [App\Http\Controllers\HomeController::class, 'testimonials'])->name('testimonials');