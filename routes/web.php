<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/about', [PagesController::class, 'about']);
    Route::get('/contact', [PagesController::class, 'contact']);
    Route::get('/job-list', [JobsController::class, 'index']);
    Route::get('/job', [JobsController::class, 'create']);
    Route::post('/job-post', [JobsController::class, 'store']);
    Route::get('/job-details/{id}', [JobsController::class, 'show']);
    Route::post('/job-apply', [ApplyController::class, 'store']);
    Route::post('/add-category', [CategoryController::class, 'store']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::post('/search', [JobsController::class, 'search']);
});

require __DIR__.'/auth.php';
