@extends('admin_pages')


@section('content')
@if(Auth::user()->role_id == 3)
 <div class="panel-heading">
<h3>
Faktury
</h3>
 </div>
 <div class="panel-body">
 
@if(count($invoices) > 0) 
<table class="table table-striped">
<thead>
<th>
Klient
</th>  
<th>
Numer faktury
</th>  
<th>
Rodzaj faktury
</th> 
<th>
Data wystawienia
</th>
<th>
Kwota
</th>
<th>
Status
</th>
 
 </tr>
</thead>
<tbody>

@foreach($invoices as $invoice)
<tr>
<td>
<a href="/invoices-download">{{ $invoice->user_id }}</a>
</td>
<td>
<a href="/invoices-download">{{ $invoice->nr_faktury }}</a>
</td>
<td>
{{ $invoice->rodzaj_faktury }}
</td>
<td>
{{ $invoice->data_wystawienia }}
</td>
<td>
{{ number_format($invoice->wartosc_faktury,2) }}
</td>
<td>
@if( $invoice->status_faktury == 0)
<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> nieopłacona
@else
<i class="fa fa-check" aria-hidden="true"></i> 
opłacona
@endif
</td>

</tr>

@endforeach


</tbody>
</table>
{{ $invoices->links() }}
@else
<div class="alert alert-info">
Nie znaleziono faktur
</div>
@endif
</div>
@else
<div class="panel-heading">
<div class="alert alert-danger">Brak uprawnien</div>
</div>
@endif
@endsection