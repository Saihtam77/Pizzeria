<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\IngredientsController;
use App\Http\Controllers\PizzaController;
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


Route::resource('Pizzas', PizzaController::class);
Route::resource('Ingredients', IngredientsController::class);





Route::middleware(["auth"])->group(function(){
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name("dashboard");

    Route::get('/dashboard/ajouterPizza',[PizzaController::class,"create"])->name("nouvellePizza");

});

require __DIR__.'/auth.php';
