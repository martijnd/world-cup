<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PredictionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::patch('/predictions', [PredictionController::class, 'update'])->middleware(['auth', 'verified'])->name('predictions.update');

require __DIR__.'/auth.php';
