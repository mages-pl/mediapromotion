<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShopRequest;

use Request;

use App\Shop;

use Auth;

use Session;

use Image; 

use App\Product;

use Intervention\Image\ImageManager;


use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{
    public function __construct() {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /*
    Lista sklepów
    */
    public function index() { 
        $shops = Shop::latest()->get();
        return view('shops.index')->with("shops",$shops);
    }

    /*
    Pojedyńczy sklep
    */
    public function show($id) { 
        $shop = Shop::findOrFail($id);
       // $products = Product::where('user_id','1');
        $products = DB::table('products')->where('user_id', '1')->latest()->get();
        

        return view("shops.show")->with("shop",$shop)->with('products',$products);
    }

    /*
    Dodawanie sklepu
    */
    public function create() {
        return view("shops.create");
    }
    public function store(CreateShopRequest $request) {

$shop = new Shop( 
    $request->all()
);


   Auth::user()->sklepy()->save($shop);

// $logoName = $shop->id.'logo.'.$request->file('logo_sklepu')->getClientOriginalExtension();

// $request->file('logo_sklepu')->move(
//     "/public/img/shops/logo", $logoName
// );

    return redirect("sklepy/".$shop->id."/edit")->with("message","test");
    }

    public function edit($id) {

        $edycja_sklepu  = Shop::findOrFail($id);

        return view('shops.edit')->with("edycja_sklepu",$edycja_sklepu);
    }

    public function update($id, CreateShopRequest $request) { 
        $aktualizuj_sklep = Shop::findOrFail($id);

        $aktualizuj_sklep->update(
          // $request->all()
              array(
                  'nazwa_sklepu'=>$request->get('nazwa_sklepu'),
                  'opis_sklepu'=>$request->get('opis_sklepu'),
                  'link_sklepu'=>$request->get('link_sklepu'),
                  'logo_sklepu'=>$id.'-logo.'.$request->file('logo_sklepu')->getClientOriginalExtension()
                
                  )
         );
 
          $logoName = $id.'-logo.'.$request->file('logo_sklepu')->getClientOriginalExtension();
        
          $request->file('logo_sklepu')->move(
               public_path()."/img/shops/logo", $logoName
          );

          $image_oryginal = public_path()."/img/shops/logo/".$logoName;

          $img_min= Image::make($image_oryginal)->resize(300, 300);
          $img_min->save(public_path()."/img/shops/logo/300x300-".$logoName);
     

        Session::flash("update_shop","Zapisano pomyslnie.");

        //return ($image_oryginal);
         return redirect('sklepy/'.$aktualizuj_sklep->id.'/edit')->with("path",$image_oryginal);
      // return "Saved settings to shop";
        
    }
}