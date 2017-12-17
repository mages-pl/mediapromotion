<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Shop;
use App\Product;
use Image;


use Illuminate\Support\Facades\DB;

class IntegratesController extends Controller
{
    //
    public function index() {
        $integrates = DB::table('shops')->get();
        return view('integrates.index')->with('integrates',$integrates);
    }
    public function process() { 
$shop = Shop::find('1')->get();
 
$xml_array = [];  

if(!empty($shop[0]->xml_sklepu)) :

foreach($shop as $xml) :

  

endforeach;

$dane = simplexml_load_file($xml->xml_sklepu,'SimpleXMLElement',LIBXML_NOCDATA);
 

   $ilosc = count($dane->offers->offer);
   $i=0;
   $produkt= new Product;
   while($i<$ilosc) :
    // echo $dane->offers->offer[$i]->id.' , ';
    // echo $dane->offers->offer[$i]->name.' , ';
    // echo $dane->offers->offer[$i]->price.' , ';
    // echo $dane->offers->offer[$i]->url.' , ';
    // echo $dane->offers->offer[$i]->imgs->img[0].' , ';
    // echo "<br/>---<br/>";


    $produkt->insert([
        // '' => $dane->offers->offer[$i]->id,
        'nazwa_produktu' => $dane->offers->offer[$i]->name,
        'cena_produktu' => $dane->offers->offer[$i]->price,
        'url_produktu' => $dane->offers->offer[$i]->url,
        'sku_produktu' => $dane->offers->offer[$i]->attrs->attr[0],
        'promocja_produktu' => $dane->offers->offer[$i]->IsPromoted,
        'ilosc_produktu' => $dane->offers->offer[$i]->avail,
        'ean_produktu' => $dane->offers->offer[$i]->attrs->attr[2],
        'obrazek_produktu' => $dane->offers->offer[$i]->imgs->img[0],
        
        'opis_produktu' => $dane->offers->offer[$i]->desc,
        'aktywny' => 0
        
    ]);
    $produkt->save();
    $i++;
endwhile;

    // endforeach
//return redirect('/integrates#success');
 else :
  //  return redirect('/integrates#error');
  dd("error");
endif;


    }
}
