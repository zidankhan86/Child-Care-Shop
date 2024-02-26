<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = location::all();
       return view('backend.pages.doctor.doctor-form',compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'                  => 'required|string',
            'details'               => 'required|string',
            'phone'                 => 'required|string',
            'degree'                => 'required|string',
            'image'                 => 'nullable|max:500',
            
        ]);
    
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        
        $imageName = null;
        if ($request->hasFile('image')) {
            $imageName = date('Ymdhsis') . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->storeAs('uploads', $imageName, 'public');
        }
    
        
        Doctor::create([
            'name'                 => $request->name,
            'details'              => $request->details,
            'phone'                => $request->phone,
            'degree'               => $request->degree,
            'image'                => $imageName,
            'location_id'          => $request->location_id,
            
        ]);
    
        
        return redirect()->back()->with('success', 'Doctor created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}
