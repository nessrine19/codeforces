<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationsController extends Controller
{
    
    public function list_Donations(){

        $donations = Donation::all();
        $donationDetails = [];

        foreach ($donations as $donation) {

            $country = Country::find($donation->id_country);
            $donationDetails[] = [
                'donation' => $donation,
                'country_name' => $country ? $country->name : 'Unknown', 
            ];
        }

        return view('Donations', ['donationDetails' => $donationDetails]);
    }
}
