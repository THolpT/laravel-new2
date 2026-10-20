<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
Route::post('/reports/', [ReportController::class, 'store'])->name('reports.store');
Route::get('/reports/edit/{report}', [ReportController::class, 'edit'])->name('reports.edit');
Route::put('/reports/edit/{report}', [ReportController::class, 'update'])->name('reports.update');


});


// Route::get('/', [MainController::class, 'showIndex'])->name('home');


Route::get('/array', [MainController::class, 'showArray'])->name('arrays');

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortArray'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterArray'])->name('array.filter');

require __DIR__.'/auth.php';
