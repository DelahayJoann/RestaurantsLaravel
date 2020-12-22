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

Route::get('/',[RestaurantController::class,'index'])->name('restaurant.index');

Route::get('/restaurant',[RestaurantController::class,'index'])->name('restaurant.index');;

Route::get('/restaurant/show/{id}',[RestaurantController::class,'show']);
Route::get('/restaurant/show',[RestaurantController::class,'index']);

Route::get('/restaurant/create',[RestaurantController::class,'create'])->name('restaurant.create');;
Route::post('/restaurant/create',[RestaurantController::class,'store']);


Route::get('/restaurant/edit/{id}',[RestaurantController::class,'edit']);
Route::patch('/restaurant/edit/{id}',[RestaurantController::class,'update']);
Route::get('/restaurant/edit',[RestaurantController::class,'index']);

Route::delete('/restaurant/destroy/{id}',[RestaurantController::class,'destroy']);
Route::get('/restaurant/destroy',[RestaurantController::class,'index']);

Route::get('/clear', function() {
    Artisan::call('optimize:clear');
    dd("Cache Clear All");
});

?>