<?php

use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;


Route::get('/' , [Home::class , 'index']);
Route::get('/home' , [Home::class , 'index']);
Route::prefix('admin_panel')->group(function (){
    Route::get('/', [AdminPanel::class , 'index']);
    Route::get('/', [AdminPanel::class , 'index']);
    Route::get('/', [AdminPanel::class , 'index']);
}
);