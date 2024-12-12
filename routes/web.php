<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware("guest")->group(function(){
    Route::match(['get', 'post'], '/',[AuthController::class, 'index'])->name('login');
    Route::get('/registro',[AuthController::class, 'registro'])->name('registro');  
    Route::post('/registrar',[AuthController::class, 'registrar'])->name('registrar');
    Route::get('/forgot-password',[AuthController::class, 'forgot_password'])->name('forgot-password');
    Route::get('/ayuda',[AuthController::class, 'ayuda'])->name('ayuda');
    Route::post('/logear',[AuthController::class, 'logear'])->name('logear');
});


Route::middleware("auth")->group(function(){
    Route::get('/home',[AuthController::class, 'home'])->name('home');
    Route::post('/logout',[AuthController::class, 'logout'])->name('logout');
});

use App\Http\Middleware\RoleMiddleware;

// Ruta para administradores
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware([RoleMiddleware::class . ':admin']);

// Ruta para usuarios regulares
Route::get('/user', function () {
    return view('user.dashboard');
})->middleware([RoleMiddleware::class . ':user']);
