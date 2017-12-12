<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSliderRequest;

use App\Slider;
use Auth;
use Session;
use App\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class SlidersController extends Controller
{
    //
    public function create() { 


        return view('sliders.create');
    }

    public function store(CreateSliderRequest $request) {

        $slider = new Slider( 
            $request->all()
        );

        $slider->save();

        return redirect("sliders");
    }
    public function index() { 

        $sliders = DB::table('sliders')->latest()->paginate(10);

        return view('sliders.index')->with('sliders',$sliders);
    }
}
