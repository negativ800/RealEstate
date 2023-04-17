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
    public function buysalerent(Request $request){
        $units= Unit::orderBy('price', 'asc')->limit(5)->get();
        $AllUnits = Unit::all();
        $Result = Unit::all();
        return view('buysalerent', compact(
            'units',
            'AllUnits',
            'Result'
        ));

    }
    public function search(Request $request){
 //#############################################################################################
// #########################       ملعون ابو السيرش علي الي عاوزه   ##############################
//################################################################################################
//        $units= Unit::orderBy('price', 'asc')->limit(5)->get();
//        $AllUnits = Unit::all();
//
//        $a = $request->input('for');
//        $b = $request->input('address');
//        $c = $request->input('type');
//        $d = $request->input('price');
//
////        $Result = Unit::orwhere('for_what', $a )->orWhere('type', $c )->orWhere('price','>',  $d )->first();
//        $Result = Unit::where('address', 'like', $a . '%')->first();
//        return view('buysalerent', compact(
//            'units',
//            'AllUnits',
//            'Result'
//        ));
    }

    public function blogdetail(){
        return view('blogdetail');
    }
    public function property_detail(){
        $units= Unit::orderBy('price', 'asc')->limit(5)->get();
        return view('property-detail', compact('units'));
    }
}
