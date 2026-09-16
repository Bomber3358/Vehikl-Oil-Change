<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formController;

Route::get('/', function () {
    return view('form');
});

Route::get('/results/{id}', [formController::class, 'results']);

Route::post('/check', [formController::class, 'verify']);
