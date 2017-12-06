<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
 use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //
    public function index() {
 //       $menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
  
       // return view("pages.*")->with('categories',$menu_top);
        
        
    }
    public function kontakt() {
        //$menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
        
        $tytul = "Skontaktuj się";
        $email = "michal.jendraszczy@gmail.com";
        $tel = "123123123";
        return view("pages.kontakt",compact('tytul','email','tel'));
    }
 
}
