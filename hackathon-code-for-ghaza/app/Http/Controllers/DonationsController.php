<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    
    public function list_Donations(){
        $Donations = Donation::all();
        return view('Donations', ['Donation' => $Donations]);

    }
}
