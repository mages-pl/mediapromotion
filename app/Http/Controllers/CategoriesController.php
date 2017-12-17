<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCategoryRequest;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;



use Auth;
use App\Category;

class CategoriesController extends Controller
{
    //
    public function index() {
// if(Auth::user()->id == )

$check_xml = DB::table("shops")->where('xml_sklepu','!=','')->get();


$xml_array = []; 
   foreach($check_xml as $xml) {

       array_push($xml_array,simplexml_load_file($xml->xml_sklepu,'SimpleXMLElement',LIBXML_NOCDATA));
 
    }
   // $menu_top  = DB::table('categories')->where('status_kategorii','1')->get();   //
    
   
        return view('categories.index')->with("responsedata",$xml_array);//->with("categories",$menu_top); // check_xml

 
    }
    public function create()  {
        
            return view('categories.create');
        }
    public function edit($id) {
    
        $edycja_kategorii = Category::findOrFail($id); 
        return view('categories.edit')->with('edycja_kategorii',$edycja_kategorii);
 }


 public function update($id, CreateCategoryRequest $request) { 
    $category_update = Category::findOrFail($id);
    
        $category_update->update($request->all());
    
        return redirect("categories/".$category_update->id."/edit"); //".$category_update->id."/edit
    
}


 public function store(CreateCategoryRequest $request)  { 

$category = new Category($request->all()); 

$category->save();

//return $request->all();
    return redirect('/categorieslist');
 }
 
      public function categorieslist() {
          $categorieslist = DB::table('categories')->latest()->paginate(10);

          return view('categories.categorieslist')->with("categorieslist",$categorieslist);
      }
public function show($id) {
    $kategoria = Category::find($id);
    return view('categories.show',compact('kategoria'));
}
      
      public function destroy($id)  {
$delete_cat = Category::find($id);

$delete_cat->delete();

          return redirect('/categorieslist');
      }              
}
