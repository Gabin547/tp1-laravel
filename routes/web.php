<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\produitC;

Route::get('/', [produitC::class, 'index']);
Route::get('/consulter', [produitC::class, 'all'])->name('consulter');
Route::get('/ajouter', [produitC::class, 'newp']);
// Appel méthode newp du controleur produitC à partir de l'url
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/ajouter
// Appel méthode all du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/consulter
// nom donné à la route pour utiliser redirection lors de la création d'un nouveau produit


// Appel méthode index du contrôleur produitC à partir de l'url :
// http://localhost/VOTRE-CHEMIN-DACCES/Laravel/tp1/public/
