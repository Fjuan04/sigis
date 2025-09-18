<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::prefix('sigis')->group(function(){
    Route::post('login', [UserController::class, 'login'])->name('sigin');
    Route::get('/', [UserController::class, 'index'])->name('login');
});