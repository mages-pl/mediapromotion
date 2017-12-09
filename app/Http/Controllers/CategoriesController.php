<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

use Auth;
use Category;

class CategoriesController extends Controller
{
    //
    public function index() {
// if(Auth::user()->id == )

$check_xml = DB::table("shops")->where('xml_sklepu','!=','')->get();


$xml_array = []; 
   foreach($check_xml as $xml) {

       array_push($xml_array,simplexml_load_file($xml->xml_sklepu,'SimpleXMLElement',LIBXML_NOCDATA));
 
    }
   // $menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
    
   
        return view('categories.index')->with("products",$products)->with("responsedata",$xml_array);//->with("categories",$menu_top); // check_xml

 
    }
    public function show() {
        
    
    }
    public function edit() {
        
 }
      public function categorieslist() {
          $categorieslist = DB::table('categories')->latest()->paginate(10);

          return view('categories.categorieslist')->with("categorieslist",$categorieslist);
      }              
}
