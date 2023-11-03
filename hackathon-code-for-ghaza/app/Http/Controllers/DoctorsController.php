<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Country;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function list_Doctors(){
        $Doctors = Doctor::all();
        return view('listDoctors', ['Doctors' => $Doctors]);

    }
    //add doctor 
    public function add_doctor_help(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_num' => 'required|string|max:20',
            'email' => 'required|email|unique:doctors,email',
            'Country' => 'required|string|max:255',
        ]);
        $country = Country::where('name', $request->input('Country'))->first();
        
        $country_id=$country->id;
        $doctor = new Doctor;
        $doctor->doctor_name = $request->input('name');
        $doctor->phone_num = $request->input('phone_num');
        $doctor->email = $request->input('email');
        $doctor->id_country = $country_id;
        $doctor->save();
        return redirect()->route('doctors');

    }
}
