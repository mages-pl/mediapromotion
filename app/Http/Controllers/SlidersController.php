<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSliderRequest;

use App\Slider;
use Auth;
use Session;
use App\User;

use Image;

use Intervention\Image\ImageManager;


use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class SlidersController extends Controller
{
    //
    public function slider_upload() {
        
       
            
    }
    public function create() { 
 return view('sliders.create');
    }

    public function store(CreateSliderRequest $request) {


        $id = Slider::count();
        $slider = new Slider([ 
            'nazwa_slidera'=>$request->get('nazwa_slidera'),
           // 'opis_slidera'=>$request->get('opis_slidera'),
            'link_slidera'=>$request->get('link_slidera'),
            'status_slidera'=>$request->get('status_slidera'),
            'obrazek_slidera'=>$id.'-slider.'.$request->file('obrazek_slidera')->getClientOriginalExtension()
            
             ]);
             
            $slider_name = $id.'-slider.'.$request->file('obrazek_slidera')->getClientOriginalExtension();
             
             $request->file('obrazek_slidera')->move(
                 public_path()."/img/slider", $slider_name
              );

        $slider->save();
return $slider;
        //return redirect("sliders");
    }


    public function edit($id) {
$edycja_slidera =  Slider::findOrFail($id);  //findOrFail



        return view('sliders.edit')->with('edycja_slidera',$edycja_slidera);

    }

      public function update($id, CreateSliderRequest $request) {
        $aktualizuj_slider = Slider::findOrFail($id);
        
$aktualizuj_slider->update([
'nazwa_slidera'=>$request->get('nazwa_slidera'),
'opis_slidera'=>$request->get('opis_slidera'),
'link_slidera'=>$request->get('link_slidera'),
'status_slidera'=>$request->get('status_slidera'),
 'obrazek_slidera'=>$id.'-slider.'.$request->file('obrazek_slidera')->getClientOriginalExtension()

]);

$slider_name = $id.'-slider.'.$request->file('obrazek_slidera')->getClientOriginalExtension();

$request->file('obrazek_slidera')->move(
    public_path()."/img/slider", $slider_name
);


     }
    public function index() { 

        $sliders = DB::table('sliders')->latest()->paginate(10);

        return view('sliders.index')->with('sliders',$sliders);
    }

    public function destroy($id)  {
        
        $delete_slider = Slider::find($id);
         $delete_slider->delete();    
    
        return redirect("/sliders");
    }
}
