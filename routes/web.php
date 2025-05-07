<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Routing untuk fitur ruangan.

Route::middleware('auth')->group(function () {

    Route::resource('room', RoomController::class);

    // Routing untuk barang 
    // Route index
    Route::get('item', [ItemController::class, 'index'])->name('item.index');
    //Route create
    Route::get('item/create', [ItemController::class, 'create'])->name('item.create');
    // Route store
    Route::post('item', [ItemController::class, 'store'])->name('item.store');
    // Route detail
    Route::get('item/{param}', [ItemController::class, 'show'])->name('item.show');
    // Route update
    Route::put('item/{param}', [ItemController::class, 'update'])->name('item.update');
    //route delete
    Route::delete('item/{param}', [ItemController::class, 'delete'])->name('item.delete');
    
});
