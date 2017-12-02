<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

use Auth;

use XmlParser;

class ProductsController extends Controller
{
    //
public function __construct() {

$this->middleware('auth',['only'=>['product-list']]);
}

    public function index() {
        $products = Product::latest()->get();

        //
//Auth::user()->id
       // $user_xml = DB::table('shops')->where('user_id','1');

$check_xml = DB::table("shops")->where('xml_sklepu','!=','')->get();

$urls = '';
   foreach($check_xml as $xml) {
       $urls .= ' + '.$xml->xml_sklepu;
   
   }
  // return $urls;
       $xml = XmlParser::load('http://mjendraszczy.nazwa.pl/xml_parse/parse.xml');
       $xml_p = simplexml_load_file("http://www.patiomeble.eu/dostepnosci/patiomeble-dostepnosci.xml",'SimpleXMLElement',LIBXML_NOCDATA);


    //    $products_xml = $xml->parse([
    //        'uses' => [
    //        'id' => ['uses' => 'offer.id'],
    //        ]
    //     // /   'email' => ['uses' => 'offer.naemailme'],
    //     //    'product_url' => ['products_xml' => 'offers.offer.url'],
    //     //    'product_price' => ['products_xml' => 'offers.offer.price'],
    //     //    'product_img' => ['offer' => 'offfer.'],
    //    ]);


        // $xmlResponse = simplexml_load_string("http://www.patiomeble.eu/dostepnosci/patiomeble-dostepnosci.xml");

        // $responseArray = json_decode(($xmlResponse));

        // $json_data = json_decode(json_encode($xml_p),1);
       
      // return var_dump($xml_p->offers->offer[1]->id);

    //    foreach($xml_p as $xml_data) {
    //     $id .= $xml_p->offers->offer->id;
    //     return $id;
    //    }
       // return view('products.index')->with("products",$products)->with("responsedata",$xml_p)->with("user_xml",$get_counter); // check_xml
    }

    public function productslist() { 
$products = DB::table('products')->where("user_id",Auth::User()->id)->latest()->paginate(4);

$qty_items = DB::table('products')->where("user_id",Auth::User()->id)->count();
        //$products = Product::latest()->get();
         
        return view('products.productlist')->with("products",$products)->with("qty",$qty_items);
    }
 }
