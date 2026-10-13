<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\ReportController;
use App\Models\Report;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showIndex'])->name('home');


Route::get('/array', [MainController::class, 'showArray'])->name('arrays');

Route::get('/array/shuffle', [MainController::class, 'shuffleArray'])->name('array.shuffle');
Route::get('/array/sort', [MainController::class, 'sortArray'])->name('array.sort');
Route::get('/array/filter', [MainController::class, 'filterArray'])->name('array.filter');

Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');

Route::get('/reports/create', [ReportController::class, 'create'])->name('reports.create');
Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');
Route::post('/reports/', [ReportController::class, 'store'])->name('reports.store');
Route::get('/reports/edit/{report}', [ReportController::class, 'edit'])->name('reports.edit');
Route::put('/reports/edit/{report}', [ReportController::class, 'update'])->name('reports.update');