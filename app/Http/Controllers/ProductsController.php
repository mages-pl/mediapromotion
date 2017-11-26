<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;


class ProductsController extends Controller
{
    //
public function __construct() {

$this->middleware('auth',['only'=>['product-list']]);
}

    public function index() {
        $products = Product::latest()->get();
        return view('products.index')->with("products",$products);
    }

    public function productslist() { 
$products = DB::table('products')->paginate(4);

        //$products = Product::latest()->get();
         
        return view('products.productlist')->with("products",$products);
    }
 }
