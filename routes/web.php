<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController as MainController;

Route::get('/', [MainController::class, 'home']);

Route::get('/saint/{id}', [MainController::class, 'selectSaint']);
