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



Route::get('/',[ProductsController::class,'product_Alternatives'])->name('home');
//display all doctors 
Route::get('/doctors', [DoctorsController ::class,'list_Doctors'])->name('doctors');
//display all donations
Route::get('/donations', [DonationsController ::class,'list_Donations'])->name('donations');
Route::get('/add_doctor', [CountriesController::class, 'listCountries'])->name('add_doctor');
//add doctor 
Route::post('/doctor_to_help', [DoctorsController ::class,'add_doctor_help'])->name('doctor_to_help');
//display the product with his alternatives sorted by price 


//display all products 
Route::get('/products',[ProductsController::class,'list_products']);
//search on the product 
Route::get('/categories', [CategoriesController ::class,'list_Categories']);
Route::post('/products_add',[ProductsController::class,'add_product'])->name('add_product');
//display all alternatives for each product 
Route::get('/alternatives',[AlternativesController::class,'list_Alternatives']);




//all countries 
//Route::get('/countries', [CountriesController ::class,'list_Countries']);
//all categories 
