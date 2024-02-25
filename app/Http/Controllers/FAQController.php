<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.faq.faq-form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question'      =>'required',
            'answer'        =>'required'
        ]);

    if ($validator->fails()) {

        return redirect()->back()->withErrors($validator)->withInput();
    }

       // dd($request->all());

        FAQ::create([

            "question"  =>$request->question,
            "answer"    =>$request->answer

        ]);

        return back()->with('success', 'FAQ Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(FAQ $fAQ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FAQ $fAQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQ $fAQ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQ $fAQ)
    {
        //
    }
}
