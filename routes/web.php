<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DetailController;


Route::get('/', function () {
    return view('client.index', [
        'clients' => Client::all()
    ]);
});

//Clients
Route::resource('client',ClientController::class);

//Details
Route::resource('detail',DetailController::class);

Route::get('/debitage/{clientId}', [DetailController::class, 'debitage']);

Route::get('/allDebitage/{clientId}', [DetailController::class, 'allDebitage']);