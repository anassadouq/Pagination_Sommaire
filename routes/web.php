<?php

use App\Models\Client;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DevisController;
use App\Http\Controllers\AvanceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\PlacardController;
use App\Http\Controllers\SalarierController;
use App\Http\Controllers\ReglementController;
use App\Http\Controllers\DetailDevisController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\DetailPlacardController;


// Redirigez la page d'accueil vers la page de connexion
Route::get('/', function () {
    return redirect('/login');
});
//Clients & Details
Route::resource('client',ClientController::class);
Route::resource('detail',DetailController::class);
Route::get('/debitage/{clientId}', [DetailController::class, 'debitage']);
Route::get('/allDebitage/{clientId}', [DetailController::class, 'allDebitage']);

Auth::routes();
Route::get('/home', [ClientController::class, 'index'])->name('home');

//Salariers & Contrats
Route::resource('salarier',SalarierController::class);
Route::resource('contrat',ContratController::class);
Route::get('/attestation/{salarierId}/{contratId}', [ContratController::class, 'generatepdf'])->name('attestation');
Route::get('/soldett/{salarierId}/{contratId}', [ContratController::class, 'soldett'])->name('soldett');

//Placards
Route::resource('placard',PlacardController::class);
Route::resource('detail_placard',DetailPlacardController::class);
Route::get('/debitage_placard/{clientId}', [DetailPlacardController::class, 'debitage']);
Route::get('/allDebitage_placard/{clientId}', [DetailPlacardController::class, 'allDebitage']);

//Devis
Route::resource('devis',DevisController::class);
Route::resource('detail_devis',DetailDevisController::class);
Route::resource('avance',AvanceController::class);
Route::get('/devis/{clientId}/pdf', [DetailDevisController::class, 'devis'])->name('devis.pdf');

//Fournisseurs
Route::resource('fournisseur',FournisseurController::class);
Route::resource('reglement',ReglementController::class);

