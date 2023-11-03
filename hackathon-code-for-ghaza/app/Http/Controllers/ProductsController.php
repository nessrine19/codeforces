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
}
