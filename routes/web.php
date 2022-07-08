<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\auth;
use App\Http\Controllers\PremierController;
use App\Http\Controllers\ChambreController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\HaraController;
use App\Http\Controllers\AddcategorieController;
use App\Http\Controllers\UserController;

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

Route::get('/compte', function () {
    return view('auth/compte');
});



/*Route::get('/accueil', function () {
    return view('accueil');
});*/

//va rediriger ver acceuil une fois que c bien enregistre 
Route::get('/accueil',[PremierController::class, 'home'] )->name('accueil');
Route::get('/monUriVersPremierControllerFunctionhome',[PremierController::class, 'home'] );

Route::get('/chambre',[ChambreController::class, 'store'] );



Route::get('/newreservation',[ReservationController::class, 'create'] )->middleware('auth');

Route::get('/failure',function () {
    return view('failure');
})->name('failure');

Route::post('/storereservation',[ReservationController::class, 'store'] )->name('reservation.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/deconnexion',function () {
    Auth::logout();
     return redirect('/accueil');
 });

 Route::get('/myformulaire',[HaraController::class, 'create'] );
 
 Route::post('/storeformulaire',[HaraController::class, 'store'] )->name('hara.store');


 Route::get('/indexformulaire',[HaraController::class, 'index'] );

 Route::get('/indexformulaire2',[HaraController::class, 'index2'] )->middleware('auth');
 
 


 Route::get('/chambres',[ChambreController::class, 'indexcategorie'] )->name("chambre.indexcategorie");


 Route::get('/chambrespremium',[ChambreController::class, 'index2'] );
 



 Route::get('/mettre2',[ChambreController::class, 'mettrecat'] )->name("chambre.mettrecat");


 Route::get('/disponibilites',[ChambreController::class, 'dispo'] )->name("chambre.dispo");


//DEVOIR 
Route::get('/mettre',[ChambreController::class, 'mettre'] );
Route::post('/mettre2',[ChambreController::class, 'mettrecat'] )->name("chambre.mettrecat");

 //DEVOIR 
 Route::get('/devoir',[ChambreController::class, 'devoir'] )->name("chambre.devoir");
 Route::get('/trois',[ChambreController::class, 'trois'] )->name("chambre.trois");

 // Route::get('/date',[ChambreController::class, 'date'] )->name("chambre.date");
 //cours
 Route::get('/vueSurmer',[ChambreController::class, 'vueSurmer'] );

 Route::get('/addcategorie',[AddcategorieController::class, 'create'] );
 Route::post('/addcategorie2',[AddcategorieController::class, 'store'] )->name("addcategorie.addcategorie");
 Route::get('/videoprojecteur',[ChambreController::class, 'videoprojecteur'] );


 Route::get('/usersaff',[UserController::class, 'index2'] );

 Route::get('/affichersejour',[ ReservationController::class, 'afficher1'] );

 Route::get('/afficherseoption',[ ReservationController::class, 'afficher2'] );


 Route::get('/annulereserv',[ ReservationController::class, 'afficherannuler'] );
 Route::post('/annulereserv',[ ReservationController::class, 'store1'] );


 



 
