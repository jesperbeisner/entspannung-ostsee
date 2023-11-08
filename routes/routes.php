<?php

declare(strict_types=1);

use App\Http\Controllers;
use App\Http\Middleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\IndexController::class, 'index'])->name('index');
Route::get('/ueber', [Controllers\IndexController::class, 'about'])->name('about');
Route::get('/vortraege', [Controllers\IndexController::class, 'lectures'])->name('lectures');
Route::get('/beratung', [Controllers\IndexController::class, 'consulting'])->name('consulting');
Route::get('/klangmassage', [Controllers\IndexController::class, 'soundMassage'])->name('sound-massage');

Route::get('/kurse', [Controllers\CourseController::class, 'index'])->name('course');
Route::get('/kurse/progressive-muskelrelaxation', [Controllers\CourseController::class, 'muscleRelaxation'])->name('muscle-relaxation');
Route::get('/kurse/autogenes-training', [Controllers\CourseController::class, 'autogenicTraining'])->name('autogenic-training');

Route::get('/blog', [Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/kontakt', [Controllers\ContactController::class, 'index'])->name('contact');

Route::get('/impressum', [Controllers\IndexController::class, 'imprint'])->name('imprint');
Route::get('/allgemeine-geschaeftsbedingungen', [Controllers\IndexController::class, 'agbs'])->name('agbs');
Route::get('/datenschutz', [Controllers\IndexController::class, 'dataProtection'])->name('data-protection');

Route::get('/login', [Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [Controllers\AuthController::class, 'execute'])->name('login.execute');

Route::addRoute(['GET', 'POST'], '/logout', [Controllers\AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => [Middleware\Authenticate::class]], function () {
    Route::get('/admin', [Controllers\AdminController::class, 'index'])->name('admin.index');
});
