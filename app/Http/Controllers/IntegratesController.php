<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Shop;

use Illuminate\Support\Facades\DB;

class IntegratesController extends Controller
{
    //
    public function index() {
        $integrates = DB::table('shops')->get();
        return view('integrates.index')->with('integrates',$integrates);
    }
}
