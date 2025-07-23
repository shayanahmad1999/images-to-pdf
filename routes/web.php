<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/images-to-pdf', [PDFController::class, 'generate'])->name('images.pdf');
