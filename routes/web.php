<?php

use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;


Route::get('/' , [Home::class , 'index']);
Route::get('/home' , [Home::class , 'index']);
Route::prefix('admin_panel')->group(function (){
    Route::get('/', [AdminPanel::class , 'index'])->name('admin_panel_index');
    Route::get('/orders', [AdminPanel::class , 'orders'])->name('admin_panel_orders');
    Route::get('/products', [AdminPanel::class , 'products'])->name('admin_panel_products');
    Route::get('/users', [AdminPanel::class , 'users'])->name('admin_panel_users');
}
);