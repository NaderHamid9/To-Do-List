<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;


Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/check{id}', [TaskController::class, 'check'])->name('tasks.check');
Route::get('/uncheck{id}', [TaskController::class, 'uncheck'])->name('tasks.uncheck');
Route::get('/edit/{id}', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('/{id}', [TaskController::class, 'update'])->name('tasks.update');






