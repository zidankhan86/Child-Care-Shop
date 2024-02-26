<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchResult=Product::where('name','LIKE','%'.$request->search_key.'%')->get();

      return view('frontend.pages.search.search',compact('searchResult'));
    }

    public function doctorSearch(Request $request)
    {
        $searchKey = $request->search_key;

        $searchResult = Doctor::where('name', 'LIKE', '%' . $searchKey . '%')
            ->orWhereHas('locations', function ($query) use ($searchKey) {
                $query->where('location', 'LIKE', '%' . $searchKey . '%');
            })
            ->get();
        

      return view('frontend.pages.doctor.doctor-search',compact('searchResult'));
    }
}
