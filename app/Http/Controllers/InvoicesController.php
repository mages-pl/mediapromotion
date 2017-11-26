<?php

namespace App\Http\Controllers;

use App\Invoice;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;


class InvoicesController extends Controller
{
    //
    private $fillables = [
        'nr_faktury',
        'rodzaj_faktury',
        'data_wystawienia',
        'status_faktury',
        'wartosc_faktury',
        'stawka_vat'
    ];

public function index() { 

    $invoices = DB::table('invoices')->paginate(4);
   
//if(count($invoices) == 0) :
//    return view("invoices.index")->with("invoices","dfgfdg");
//else :
    return view("invoices.index")->with('invoices',$invoices);
//endif;

}
public function create() {
    return "tworzenie pv";
}

}
