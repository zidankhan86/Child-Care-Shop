<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
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
        $faq = FAQ::all();
        return view('backend.pages.faq.list',compact('faq'));
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
    public function edit($id)
    {
        $edit = FAQ::find($id);
       return view('backend.pages.faq.edit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer' => 'required',
                    
                ]);
        
                if ($validator->fails()) {
        
                return redirect()->back()->withErrors($validator)->withInput();
                }
        
        
                $update = FAQ::find($id);
                $update->update([
        
                    "question"=>$request->question,
                    "answer"=>$request->answer,

                ]);
        
                Alert::toast()->success('FAQ Updated');
                return redirect()->route('faq.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $delete =  FAQ::find($id);
        $delete->delete();


        Alert::toast('Deleted! FAQ Deleted!');

        return redirect()->back();
    }
}
