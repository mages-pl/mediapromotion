<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Category;
use App\Slider;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $last_products = Product::latest()->limit(4)->get();
       
      //  $menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
        
      $sliders = DB::table('sliders')->where('status_slidera',1)->get();
        
        return view('home')->with('last_products',$last_products)->with('sliders',$sliders);
        
        //return "dfdsf";
    }
     
}
