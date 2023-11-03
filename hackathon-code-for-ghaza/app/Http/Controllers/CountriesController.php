<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    //all countries 
    public function list_Countries(){
        $countries = Country::all();
        return view('countries', ['countries' => $countries]);

    }
}
