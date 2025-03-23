<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.welcome');
});

//Route::get('/',[UserController::class,'index'])->name('home');
//Route::get('/payment',[UserController::class,'payment'])->name('payment');
//Route::get('/group',[UserController::class,'group'])->name('group');
//Route::get('/pointer',[UserController::class,'pointer'])->name('pointer');
//Route::get('/ranking',[UserController::class,'ranking'])->name('ranking');
//Route::get('/shop',[UserController::class,'shop'])->name('shop');
//Route::get('/extraLesson',[UserController::class,'extraLesson'])->name('extraLesson');
//Route::get('/setting',[UserController::class,'setting'])->name('setting');
