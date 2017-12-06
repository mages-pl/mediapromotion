<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

use Auth;

use User;

use XmlParser;

class ProductsController extends Controller
{
    //
public function __construct() {

$this->middleware('auth',['only'=>['product-list']]);
}

    public function index() {
        $products = Product::latest()->get();

       
$check_xml = DB::table("shops")->where('xml_sklepu','!=','')->get();


$xml_array = []; 
   foreach($check_xml as $xml) {

       array_push($xml_array,simplexml_load_file($xml->xml_sklepu,'SimpleXMLElement',LIBXML_NOCDATA));
 
    }
    $menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
    
   
        return view('products.index')->with("products",$products)->with("responsedata",$xml_array)->with("categories",$menu_top); // check_xml
    }

    public function productslist() { 
$products = DB::table('products')->where("user_id",Auth::User()->id)->latest()->paginate(4);

$qty_items = DB::table('products')->where("user_id",Auth::User()->id)->count();

$menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //

        return view('products.productlist')->with("products",$products)->with("qty",$qty_items)->with('categories', $menu_top);
    }
 }
