<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //all categories 
    public function list_Categories(){
        $Categories = Category::all();
        return view('Categories', ['Categories' => $Categories]);
        
    }
}
