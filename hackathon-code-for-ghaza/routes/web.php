<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\DonationsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AlternativesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//home page 
Route::get('/home', function () {
    return view('home_page');
});
//display all products 
Route::get('/products',[ProductsController::class,'list_products']);
//search on the product 

//display all alternatives for each product 
Route::get('/alternatives',[AlternativesController::class,'list_Alternatives']);
//display the product with his alternatives sorted by price 
Route::get('/aproduct_alt',[AlternativesController::class,'product_Alternatives']);
//display all donations
Route::get('/donations', [DonationsController ::class,'list_Donations']);

//display all doctors 
Route::get('/doctors', [DoctorsController ::class,'list_Doctors']);
//all countries 
Route::get('/countries', [CountriesController ::class,'list_Countries']);
//all categories 
Route::get('/categories', [CategoriesController ::class,'list_Categories']);