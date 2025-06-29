<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

        public function about()
    {
        return view('about');
    }

        public function contact()
    {
        return view('contact');
    }

           public function contactAction(Request $request)
    {
        $this->validate($request,[
            'name'=>'required'
        ]); 
    }
    
}

