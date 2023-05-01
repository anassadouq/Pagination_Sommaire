<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\SalarierController;


// Redirigez la page d'accueil vers la page de connexion
Route::get('/', function () {
    return redirect('/login');
});

//Clients
Route::resource('client',ClientController::class);
//Details
Route::resource('detail',DetailController::class);
Route::get('/debitage/{clientId}', [DetailController::class, 'debitage']);
Route::get('/allDebitage/{clientId}', [DetailController::class, 'allDebitage']);

Auth::routes();
Route::get('/home', [ClientController::class, 'index'])->name('home');

//Salariers
Route::resource('salarier',SalarierController::class);
//Contrats
Route::resource('contrat',ContratController::class);

Route::get('/attestation/{salarierId}/{contratId}', [ContratController::class, 'generatepdf'])->name('attestation');
Route::get('/soldett/{salarierId}/{contratId}', [ContratController::class, 'soldett'])->name('soldett');