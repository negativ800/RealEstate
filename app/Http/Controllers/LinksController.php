<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    public function agents(){
        return view('agents');
    }

    public function blog(){
        return view('blog');
    }
    public function contact(){
        return view('contact');
    }
    public function buysalerent(){
        return view('buysalerent');
    }
}
