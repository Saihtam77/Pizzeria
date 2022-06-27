<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\BoissonsController;
use App\Http\Controllers\DessertsController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\PizzasController;
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

Route::get('/',[AccueilController::class,'index'])->name("accueil");

Route::get("/Mention_legal", function () {
    return view("page.Mention_legal");
})->name("mention_legal");



Route::resource('Pizzas', PizzasController::class);
Route::resource("Boissons",BoissonsController::class);
Route::resource("Desserts",DessertsController::class);





Route::middleware(["auth"])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name("dashboard");

    Route::get('/dashboard/ajouterPizza',[PizzasController::class,"create"])->name("nouvellePizza");
    Route::get('/dashboard/ajouterBoisson',[BoissonsController::class,"create"])->name("nouvelleBoisson");
    Route::get('/dashboard/ajouterDesserts',[DessertsController::class,"create"])->name("nouveauDessert");
});

require __DIR__.'/auth.php';
