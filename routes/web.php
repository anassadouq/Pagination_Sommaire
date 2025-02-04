<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SummaryController;


Route::get('/', [SummaryController::class, 'index']);

Route::resource('summary',SummaryController::class);
Route::get('/generate-pdf', [SummaryController::class, 'generatepdf']);