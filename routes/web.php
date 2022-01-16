<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class,'show_post'])->name('home');
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard', [DashboardController::class,'show_post'])->name('dashboard');
    
    
    // Route::get('/post', [PostController::class,'index'])->middleware(['can:isAdmin'])->name('post_index');
    
    Route::get('/post', [PostController::class,'index'])->middleware(['can:isAdmin,App\Models\Post'])->name('post_index');
    
    Route::post('/post', [PostController::class,'create'])->name('post_create');


    Route::get('/post/edit/{id}', [PostController::class,'edit'])->name('post_edit');

    Route::put('/post/edit/{id}', [PostController::class,'update'])->name('post_update');

    Route::get('/post/delete/{id}', [PostController::class,'destroy'])->name('post_delete');
});

require __DIR__.'/auth.php';
