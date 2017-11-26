@extends('admin_pages')


@section('content')
 @include('admin_menu')
<div class="panel panel-default col-md-8">
 <div class="panel-heading">
<h3>
Promocje
</h3>
 </div>
<div class="panel panel-default">
<div class="panel-heading">
Dodaj nową promocję
</div>
<div class="panel-body">
<a href="/promotions/create" class="btn btn-success">Dodaj nową promocję</a>
</div>
</div>

 <div class="panel-body">
<table class="table table-striped">
<thead>
<th>
Nazwa promocji
</th>  
<th>
Wartość promocji 
</th>
<th>
Czas promocji
</th>
<th>
Status
</th>
 <th>
 Akcja
 </th>
 </tr>
</thead>
<tbody>
@foreach($promotions as $promotion)
<tr>
<td>
{{ $promotion->nazwa_promocji }}
</td>
<td>
{{ $promotion->wartosc_promocji }}

</td>

<td>{{ $promotion->promocja_od }} - {{ $promotion->promocja_do }} </td>
<td>
@if((date('Y-m-d') <= $promotion->promocja_do) && (date('Y-m-d') >= $promotion->promocja_od))
Aktywna
@else
Nieaktywna
@endif
</td>
 <td>

<a href="/promotions/{{$promotion->id}}/edit" class="btn btn-default">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
 <a href="#" class="btn btn-default">
 <i class="fa fa-trash-o" aria-hidden="true"></i>
</a>
 </td>
</tr>

@endforeach

</tbody>
</table>
 {{ $promotions->links() }} 
</div>
</div>
@endsection