<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePromotionRequest;

use Request;

use App\Promotion;

use Auth;

use Session;

use App\User;
use App\Shop;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;
 
use Illuminate\Pagination\LengthAwarePaginator;

class PromotionsController extends Controller
{
    //
    // public function __construct() {
    //     $this->middleware('auth',['except'=>['index','show']]);
    // }

public function index() {
    $promotions = Promotion::latest()->get();

    //$menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
    
    
         return view('promotions.index', compact("promotions"));//->with('categories', $menu_top);
}    
public function show() {
return "show";
}    
public function promotionslist() {

    $promotions = DB::table('promotions')->where('user_id',Auth::user()->id)->paginate(15);

    return view('promotions.promotionlist')->with("promotions",$promotions);
     
}

public function create() {
 
return view("promotions.create");
}    
public function edit($id) {

    $promotion = Promotion::findOrFail($id);

    if((Auth::user()->id == $promotion->user_id) || (Auth::user()->role_id == 3)) { 
        
       return view("promotions.edit")->with("edit_promotion",$promotion);
       } else {
         return view("403");
       }


//return view("promotions.edit");
}     
public function update($id, CreatePromotionRequest $request)  {
    $promotion_update = Promotion::findOrFail($id);

    $promotion_update->update($request->all());

    return redirect("promotions/".$promotion_update->id."/edit");


}
public function store(CreatePromotionRequest $request) {

$promotion = new Promotion($request->all());
    Auth::user()->promotions()->save($promotion);
   
  // Promotion::create($request->all());
    //return redirect("promocje/".$promotion->id."/edit");
//return $promotion;
return redirect("/promotions-list");

}    
public function promotionsmanage() {
    $promotionsall = Promotion::latest()->paginate(10);

    return view('promotions.promotionsmanage')->with('promotionsall',$promotionsall);
}
public function destroy($id)  {
    
    $delete_promotion = Promotion::find($id);
     $delete_promotion->delete();    

    return redirect("/promotions-list");
}
}
