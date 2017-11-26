<?php

namespace App\Http\Controllers;

use App\Invoice;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

use Dompdf\Dompdf;


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

public function download() {
 
$invoices = Invoice::findOrFail('1');


$dompdf = new Dompdf();
$dompdf->loadHtml("<b>gfgfdgdg</b><br/><br/><table><tr><td>nazwa</td><td>nazwa2</td></tr></table>");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();

    //return "download.pdf";
}

}
