<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(){
        $units= Unit::all();
       // return $unit;
        return view('index', compact('units'));
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
    public function blogdetail(){
        return view('blogdetail');
    }
    public function property_detail(){
        $units= Unit::orderBy('price', 'asc')->limit(5)->get();
        return view('property-detail', compact('units'));
    }
}
