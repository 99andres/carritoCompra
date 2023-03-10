<?php

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

use App\Http\Controllers\GestionController;

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
Route::get('/',function(){   
    // session_start();
    // echo $_SESSION['valor'];
});
Route::get('gestion',[GestionController::class,'index']);

Route::get('administrador',[GestionController::class,'administrador']);   
Route::get('root',[GestionController::class,'root']);   
Route::get('flex',[GestionController::class,'flex']);   
Route::get('carrito',[GestionController::class,'carrito'])->name('carrito');   
Route::match(['post','get'],'resumen',[GestionController::class,'resumen']);   
Route::get('comprar',[GestionController::class,'comprar']);   


    

    
    



