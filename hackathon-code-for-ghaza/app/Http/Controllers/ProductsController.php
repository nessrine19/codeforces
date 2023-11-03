<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //display all product 
    public function list_products(){
        $Products = Product::all();
        return view('home_page', ['Products' => $Products]);

    }
    public function product_Alternatives(){
        //$products = Product::all(); // Retrieve all products
        $products = Product::with('products_alternative')->get();
        return view('home_page', compact('products'));
    }
}
