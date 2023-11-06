<?php

declare(strict_types=1);

use App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\IndexController::class, 'index'])->name('index');

Route::get('/login', [Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [Controllers\AuthController::class, 'execute'])->name('login.execute');

Route::addRoute(['GET', 'POST'], '/logout', [Controllers\AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => [Middleware\Authenticate::class]], function () {
    Route::get('/admin', [Controllers\AdminController::class, 'index'])->name('admin.index');
});
