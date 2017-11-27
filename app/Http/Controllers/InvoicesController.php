<?php

namespace App\Http\Controllers;

use App\Invoice;

use App\Http\Requests\CreateInvoiceRequest;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

use Dompdf\Dompdf;

use Auth;

use Session;

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

    $invoices = DB::table('invoices')->where("user_id",Auth::User()->id)->latest()->paginate(4);
   
//if(count($invoices) == 0) :
//    return view("invoices.index")->with("invoices","dfgfdg");
//else :
    return view("invoices.index")->with('invoices',$invoices);
//endif;

}
public function create() {
 
    return redirect("store");
}

public function store(CreateInvoiceRequest $request) {


$last_id =  DB::getPdo()->lastInsertId();
    
    $invoice = new Invoice;
     $nr_fv = Invoice::count();
      $invoice->nr_faktury = "MFP/".($nr_fv+1)."/".date('Y');
      $invoice->rodzaj_faktury = "proforma";
      $invoice->data_wystawienia = date('Y-m-d');
      $invoice->status_faktury = '0';
      $invoice->stawka_vat = '23'; // wyjscie tabeli na stawki vat
      
        $invoice->wartosc_faktury = $request->get('wartosc_faktury');
        
        
// $invoice->numer_faktury = "MFP/".$invoice->id."/".date('Y');

Auth::user()->faktury()->save($invoice);

    return redirect('invoices'); 
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
