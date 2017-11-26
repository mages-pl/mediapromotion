<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePromotionRequest;

use Request;

use App\Promotion;

use Auth;

use Session;


use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

class PromotionsController extends Controller
{
    //
    public function __construct() {
        $this->middleware('auth',['except'=>['index','show']]);
    }
public function index() {
    $promotions = Promotion::latest()->get();
         return view('promotions.index')->with("promotions",$promotions);
// return $promotions;
}    
public function show() {
return "show";
}    
public function promotionslist() {

    $promotions = DB::table('promotions')->paginate(4);

    return view('promotions.promotionlist')->with("promotions",$promotions);
     
}

public function create() {
 
return view("promotions.create");
}    
public function edit() {
return "edit";
}    
public function store(CreatePromotionRequest $request) {

$promotion = new Promotion($request->all());
    Auth::user()->promocje()->save($promotion);
   
  // Promotion::create($request->all());
    //return redirect("promocje/".$promotion->id."/edit");
//return $promotion;
return redirect("promotions/");
//return "store";
}    
}