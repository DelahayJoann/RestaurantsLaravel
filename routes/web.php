<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

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

Route::get('/',[RestaurantController::class,'index']);

Route::get('/restaurant',[RestaurantController::class,'index']);

Route::get('/restaurant/show/{id}',[RestaurantController::class,'show']);

Route::get('/restaurant/create',[RestaurantController::class,'create']);
Route::post('/restaurant/create',[RestaurantController::class,'store']);


Route::get('/restaurant/edit/{id}',[RestaurantController::class,'edit']);
Route::patch('/restaurant/edit/{id}',[RestaurantController::class,'update']);

Route::delete('/restaurant/destroy/{id}',[RestaurantController::class,'destroy']);

Route::get('/clear-cache-all', function() {

    Artisan::call('cache:clear');

  

    dd("Cache Clear All");

});

?>