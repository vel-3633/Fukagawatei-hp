<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/menu',[MenuController::class,'index']);

Route::get('/news',[NewsControler::class,'index']);

Route::get('/store',function () {
    return view('store');
});

Route::get('/contact',[ContactController::class,'show'])->name('contact.show');
Route::post('/contact',[ContactController::class,'post'])->name('contact.post');
Route::get('/contact/confirm',[ContactController::class,'confirm'])->name('contact.confirm');
Route::post('/contact/confirm',[ContactController::class,'send'])->name('contact.send');
Route::get('/contact/thanks',[ContactController::class,'complete'])->name('contact.complete');
