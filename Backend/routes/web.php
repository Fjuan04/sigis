<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Models\Item;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

Route::prefix('sigis')->group(function(){
    Route::get('/', [UserController::class, 'index'])->name('login');
    Route::post('/', [UserController::class, 'login']);

    Route::get('dashboard', function(){
        $items = Item::all();        
        return view('dashboard', compact('items'));
    })->name('dashboard');

    Route::middleware('auth')->group(function(){
        //LOGOUT
        Route::post('logout', [UserController::class, 'logout'])->name('logout');
    });
});
require __DIR__.'/auth.php';
