<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor(){
        
        $doctor = Doctor::with('locations')->get();

        return view('frontend.pages.doctor.doctor',compact('doctor'));
    }
}
