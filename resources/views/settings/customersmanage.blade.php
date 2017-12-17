@extends('admin_pages')


@section('content')
 
  
 
 <div class="panel-body">
<table class="table table-striped">
<thead>
<th>
Nazwa firmy
</th>
<th>
Uzytkownik
</th>
<th>
Sklep 
</th>
<th>
Telefon
</th>  
 
<th>
Adres
</th>
<th>
Miasto
</th>
<th>
NIP
</th>
<th>
REGON
</th>
  <th>
 Akcja
 </th>
 </tr>
</thead>
<tbody>
@foreach($customersmanage as $customer)
<tr>
<td>
{{$customer->nazwa_firmy}}
</td>
<td>

{{$customer->user->name}}
</td>


<td>

{{$customer->user->shop->nazwa_sklepu}}
</td>
<td>
{{ $customer->telefon_firmy }}

</td>

<td>{{ $customer->adres_firmy }}, {{$customer->kod_pocztowy_firmy}}   </td>
 <td>{{ $customer->miasto_firmy }}   </td>
 <td>
{{$customer->nip_firmy}}
</td>
<td>
{{$customer->regon_firmy}}
</td>

 <td>

<a href="/settings/{{$customer->id}}/edit" class="btn btn-default">
<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a>
{{--  {!! Form::open(['method'=>'DELETE','class'=>'form-inline','action'=>['PromotionsController@destroy',$shop->id]]) !!}
 <button class="btn btn-default"> 
 {{--  <a href="/promotions/{{$promotion->id}}/destroy" class="btn btn-default">    
 <i class="fa fa-trash-o" aria-hidden="true"></i>
{{--  </a>   
</button>
{!! Form::close() !!}  --}}
 </td>
</tr>

@endforeach

</tbody>
</table>
 {{ $customersmanage->links() }} 
</div>
 
@endsection
