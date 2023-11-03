<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Product_alternative;

class AlternativesController extends Controller
{
    //all alternatives 
    public function list_Alternatives(){
        $Product_alternatives = Product_alternative::all();
        return view('home_page', ['Product_alternatives' => $Product_alternatives]);

    }

}
