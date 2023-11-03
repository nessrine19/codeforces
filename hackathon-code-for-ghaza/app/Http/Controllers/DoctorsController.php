<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorsController extends Controller
{
    //
    public function list_Doctors(){
        $Doctors = Doctor::all();
        return view('listDoctors', ['Donation' => $Doctors]);

    }
}
