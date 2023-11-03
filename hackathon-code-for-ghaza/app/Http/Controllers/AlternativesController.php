<?php

namespace App\Http\Controllers;

use App\Models\Product_alternative;
use Illuminate\Http\Request;

class AlternativesController extends Controller
{
    //all alternatives 
    public function list_Alternatives(){
        $Product_alternatives = Product_alternative::all();
        return view('home_page', ['Product_alternatives' => $Product_alternatives]);

    }
}
