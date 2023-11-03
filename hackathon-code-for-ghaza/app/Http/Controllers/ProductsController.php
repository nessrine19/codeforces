<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
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
        $countries = Country::all();
        $categories=Category::all();
        return view('home_page', compact('products','countries','categories'));
    }

    public function add_product(Request $request){
        $request->validate([
            'product_name' => 'required|string|max:255',
            'desc' => 'required|string|max:20',
            'Country' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'mimes:jpeg,png,gif,jpg|max:5120'
            
        ]);
        $imagePath = null;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imagePath = $image->store('product_images', 'public');
        }
        $country = Country::where('name', $request->input('Country'))->first();
        $category=Category::where('category_name',$request->input('category'))->first();
        
        $country_id=$country->id;
        $category_id=$category->id;
        $product = new Product;
        $product->product_name = $request->input('name');
        $product->desc = $request->input('desc');
        $product->image=$imagePath;
        $product->id_country = $country_id;
        $product->id_category = $category_id;
        $product->save();
        return redirect()->route('home');

    }
}
