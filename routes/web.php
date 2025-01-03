<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;




Route::controller(ThemeController::class)->name("home.")->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/category/{id}','category')->name('category');
    Route::get('/contact','contact')->name('contact');
    Route::get('/single blog','singleblog')->name('single blog');


});

Route::get('/home',[AdminController::class,'index'])->name('home');



