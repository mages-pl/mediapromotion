@extends('admin_pages')


@section('content')
 @include('admin_menu')
<div class="panel panel-default col-md-8">
 <div class="panel-heading">
<h3>
Faktury
</h3>
 </div>
 <div class="panel-body">
 <div class="panel panel-default">
   <div class="panel-heading">
    Dodaj nową fakturę
    </div>
    <div class="panel-body">
   {{ Form::open(['url'=>'/invoices/create', 'class'=>'form-inline']) }}

{{ Form::text('wartosc_faktury',null,['class'=>'form-control'])}}
{{ Form::submit('Wygeneruj fakturę pforoma',['class'=>'btn btn-success'])}}


   {{ Form::close() }}

</div>
</div>
@if(count($invoices) > 0) 
<table class="table table-striped">
<thead>
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
{{ $invoice->numer_faktury }}
</td>
<td>
{{ $invoice->data_wystawienia }}
</td>
<td>
{{ $invoice->wartosc_faktury }}
</td>
<td>
{{ $invoice->status_faktury }}
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
</div>
@endsection