<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;




Route::controller(ThemeController::class)->name("home.")->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/category/{id}','category')->name('category');
    Route::get('/contact','contact')->name('contact');
    Route::get('/single blog','singleblog')->name('single blog');


});

Route::get('/home',[AdminController::class,'index'])->name('home');






Route::controller(RoomController::class)->name("room.")->group(function(){
    Route::get('/index','index')->name('index');
    Route::post('/store','store')->name('store');
    Route::get('/show','show')->name('show');
    Route::get('/delete/{id}','destroy')->name('delete');
    Route::get('/edit/{id}','edit')->name('edit');
    Route::post('/update/{id}','update')->name('update');


});




