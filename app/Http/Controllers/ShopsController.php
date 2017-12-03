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

    return redirect("shops/".$shop->id."/edit")->with("message","test");
    }

    public function edit($id) {

        $edycja_sklepu  = Shop::findOrFail($id);

        return view('shops.edit')->with("edycja_sklepu",$edycja_sklepu);
    }

    public function update($id, CreateShopRequest $request) { 
        $aktualizuj_sklep = Shop::findOrFail($id);



        // if($aktualizuj_sklep->logo_sklepu == '') { 
        // $aktualizuj_sklep->update(
        //   // $request->all()
        //       array(
        //           'nazwa_sklepu'=>$request->get('nazwa_sklepu'),
        //           'opis_sklepu'=>$request->get('opis_sklepu'),
        //           'link_sklepu'=>$request->get('link_sklepu'),
        //           'logo_sklepu'=>$id.'-logo.'.$request->file('logo_sklepu')->getClientOriginalExtension()
                
        //           )
        //  );

        //  $logoName = $id.'-logo.'.$request->file('logo_sklepu')->getClientOriginalExtension();
         
        //    $request->file('logo_sklepu')->move(
        //         public_path()."/img/shops/logo", $logoName
        //    );
 
        //    $image_oryginal = public_path()."/img/shops/logo/".$logoName;
 
        //    $img_min= Image::make($image_oryginal)->resize(300, 300);
        //    $img_min->save(public_path()."/img/shops/logo/300x300-".$logoName);
      
 

        // } 
        
        
      //  else {

            // jezeli logotypu jest ma w formie 
            if($request->file('logo_sklepu') != '') {

               
                $aktualizuj_sklep->update(
                    // $request->all()
                        array(
                            'nazwa_sklepu'=>$request->get('nazwa_sklepu'),
                            'opis_sklepu'=>$request->get('opis_sklepu'),
                            'link_sklepu'=>$request->get('link_sklepu'),
                            'logo_sklepu'=>$id.'-logo.'.$request->file('logo_sklepu')->getClientOriginalExtension(),
                            'xml_sklepu' => $request->get('xml_sklepu')
                            )
                   );
          
                   $logoName = $id.'-logo.'.$request->file('logo_sklepu')->getClientOriginalExtension();
                   
                     $request->file('logo_sklepu')->move(
                          public_path()."/img/shops/logo", $logoName
                     );
           
                     $image_oryginal = public_path()."/img/shops/logo/".$logoName;
           
$img = Image::make($image_oryginal);

                     $width  = $img->width();
                     $height = $img->height();
                 
                 
                     /*
                      *  kadrowanie obrazka do 300x300
                      */
                     $dimension = 2362;
                 
                     $vertical   = (($width < $height) ? true : false);
                     $horizontal = (($width > $height) ? true : false);
                     $square     = (($width = $height) ? true : false);
                 
                 
                     if ($vertical) {
                         $top = $bottom = 245;
                         $newHeight = ($dimension) - ($bottom + $top);
                         $img_min= $img->resize(null, $newHeight, function ($constraint) {
                             $constraint->aspectRatio();
                         });
                 
                     } else if ($horizontal) {
                         $right = $left = 245;
                         $newWidth = ($dimension) - ($right + $left);
                         $img_min= $img->resize($newWidth, null, function ($constraint) {
                             $constraint->aspectRatio();
                         });
                 
                     } else if ($square) {
                         $right = $left = 245;
                         $newWidth = ($dimension) - ($left + $right);
                         $img_min= $img->resize($newWidth, null, function ($constraint) {
                             $constraint->aspectRatio();
                         });
                 
                     }
                 
                     $img_min= $img->resizeCanvas($dimension, $dimension, 'center', false, '#ffffff');
                     //$img->save(public_path("storage/{$token}/{$origFilename}"));

                     //---
                     // $img_min= Image::make($image_oryginal)->resize(300, null);

                    //  $img_min= Image::make($image_oryginal)->resize(300, null, function ($constraint) {
                    //     $constraint->aspectRatio();
                    // });



                    // ---


                     $img_min->save(public_path()."/img/shops/logo/300x300-".$logoName);
                
           
                     Session::flash("update_shop","Zapisano pomyslnie.");
                     
                             //return ($image_oryginal);
                              return redirect('shops/'.$aktualizuj_sklep->id.'/edit')->with("path",$image_oryginal);
           

            } 

            // jezeli logotypu nie ma w formie  
            
            else {
                $aktualizuj_sklep->update(
                array(
                    'nazwa_sklepu'=>$request->get('nazwa_sklepu'),
                    'opis_sklepu'=>$request->get('opis_sklepu'),
                    'link_sklepu'=>$request->get('link_sklepu'),
                    'logo_sklepu'=>$aktualizuj_sklep->logo_sklepu,
                    'xml_sklepu' => $request->get('xml_sklepu')
                    
                    )
                );
                Session::flash("update_shop","Zapisano pomyslnie.");
                
                        //return ($image_oryginal);
                         return redirect('shops/'.$aktualizuj_sklep->id.'/edit');
                      
            }
       // }
         
      // return "Saved settings to shop";
        
    }
}
