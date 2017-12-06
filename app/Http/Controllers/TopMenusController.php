<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Category;

class TopMenusController extends Controller
{
//  DO USUNIECIA    
    
    public function index() {

 $menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //

return view('header')->with('categories',$menu_top);

    }
}
