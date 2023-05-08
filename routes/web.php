<?php

use App\Http\Controllers\AbonnementController;
use App\Http\Controllers\PredictionController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProduitController::class, "accueil"])->name("index");
Route::get('/indexuser', [ProduitController::class, "accueiluser"])->name("indexuser");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/signup', function () {
    return view('signup');
})->name("signup");

Route::get('/accueil', function () {
    return view('welcome');
})->name("accueil");

Route::get('/utilisateur', [UtilisateurController::class, "index"])->name("utilisateur");
Route::post('/utilisateur/login', [UtilisateurController::class, "login"])->name("utilisateur.login");
Route::get('/utilisateur/signup', [UtilisateurController::class, "signup"])->name("utilisateur.signup");

Route::get('/abonnement', [AbonnementController::class, "index"])->name("abonnement");

Route::get('/produit', [ProduitController::class, "index"])->name("produit");
Route::get('/produit/create', [ProduitController::class, "create"])->name("produit.create");
Route::get('/produit/{produit}', [ProduitController::class, "edit"])->name("produit.edit");

Route::post('/produit/create', [ProduitController::class, "store"])->name("produit.ajouter");
Route::delete('/produit/{produit}', [ProduitController::class, "delete"])->name("produit.supprimer");
Route::put('/produit/{produit}', [ProduitController::class, "update"])->name("produit.update");

Route::get('/produit/détails/{produit}', [ProduitController::class, "details"])->name("produit.details");
Route::get('/produit/buy/{produit}', [ProduitController::class, "buy"])->name("produit.buy");

Route::get('/prediction', [PredictionController::class, "prediction"])->name("prediction");
Route::post('/predire', [PredictionController::class, "predire"])->name("predire");
