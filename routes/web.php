<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    $telephone = '777382737';
    $nom = 'Edk OIL Resto';
    $adresse = 'Grd Standing, Rte de Dakar';
    return view('contact', compact('telephone', 'adresse', 'nom'));
});

Route::get('/apropos', function () {
    return view('apropos');
});

Route::get('/carre/{nombre}', function ($nombre) {
    $carre = $nombre * $nombre;
    dd($carre);
});

Route::get('/additionner/{nombre1}/{nombre2}', function ($nombre1, $nombre2) {
    dd($nombre1 + $nombre2);
});

Route::resource('produit', ProduitController::class);

Route::get('/bienvenue', function() {
    dd("bonjour");
})->name('welcome');

Route::post('/bienvenue', function() {
    dd("bonjour");
})->name('welcome');
