<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'showPost'])->name('home');
//  The below one is also is route middle ware but in group function

Route::middleware(['auth'])->group(function(){

    Route::get('post',[PostController::class,'index'])->name('post_index');
    Route::post('post',[PostController::class,'create'])->name('post_create');
    
    Route::get('dashboard',[DashboardController::class,
    'showPost'])->name('dashboard');
    Route::get('post/edit/{id}',[PostController::class,'edit'])->name('post_edit');
    Route::put('post/edit/{id}',[PostController::class,'update'])->name('post_update');
    Route::get('post/delete/{id}',[PostController::class,'destroy'])->name('post_destroy');
});



//  Route Middle ware
// Route::get('post',[PostController::class,'index'])->middleware(['auth'])->name('post_index');
// Route::post('post',[PostController::class,'create'])->middleware(['auth'])->name('post_create');

// Route::get('dashboard',[DashboardController::class,
// 'showPost'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
