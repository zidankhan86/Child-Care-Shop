<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
use Illuminate\Http\Request;

class faqController extends Controller
{
   public function faqHome(){
    $faqs = FAQ::all();
    return view('frontend.pages.faq.faq',compact('faqs'));
   }
}
