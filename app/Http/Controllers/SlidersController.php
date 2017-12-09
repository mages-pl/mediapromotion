<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class SlidersController extends Controller
{
    //
    public function index() { 

        $sliders = DB::table('sliders')->latest()->paginate(10);

        return view('sliders.index')->with('sliders',$sliders);
    }
}
