<?php

use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::middleware('auth')->group(function(){

    Route::get('admin', [DashBoardController::class, 'index']);
});
