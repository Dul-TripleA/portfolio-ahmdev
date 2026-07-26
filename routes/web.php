<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PortofolioController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PortofolioController::class, 'FVPortfolio']);
Route::get('/detailPortfolio/{id}', [PortofolioController::class, 'detail'])->name('detailPortfolio');