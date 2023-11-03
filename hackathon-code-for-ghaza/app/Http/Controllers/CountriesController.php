<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    //all countries 
    public function listCountries(){
        $countries = Country::all();
        return view('add_doctor', compact('countries'));
    }
}
