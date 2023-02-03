<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController as MainController;

Route::get('/', [MainController::class, 'home'])
    ->name('home');

Route::get('/saint/select/{id}', [MainController::class, 'selectSaint'])
    ->name('saint.select');

Route::get('/saint/create', [MainController::class, 'goToCreateSaint'])
    ->name('saint.create');

Route::post('/saint/store', [MainController::class, 'addSaint'])
    ->name('saint.store');

Route::get('/saint/delete/{id}', [MainController::class, 'deleteSaint'])
    ->name('saint.delete');
