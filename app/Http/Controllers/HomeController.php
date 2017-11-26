<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    // public function __construct()
    // {
    //    $this->middleware('auth',['excerpt'=>'index']);
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $last_products = Product::latest()->limit(4)->get();
        return view('home')->with('last_products',$last_products);
        //return "dfdsf";
    }
}
