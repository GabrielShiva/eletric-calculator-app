<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RoomController;

Route::get('/', [ProjectController::class, 'home'])->name('home');
Route::get('/new-project', [ProjectController::class, 'create'])->name('project.create');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');
Route::post('/new-project', [ProjectController::class, 'store'])->name('project.store');

Route::get('/new-room/project/{id}', [RoomController::class, 'create'])->name('room.create');
Route::post('/new-room/project/{id}', [RoomController::class, 'store'])->name('room.store');
Route::delete('/room/{id}', [RoomController::class, 'destroy'])->name('room.destroy');