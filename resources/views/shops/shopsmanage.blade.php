@extends('admin_pages')


@section('content')
 
  
 
 <div class="panel-body">
<table class="table table-striped">
<thead>
<th>
Logo sklepu
</th>
<th>
Nazwa sklepu
</th>  
<th>
Link sklepu
</th>
<th>
Saldo sklepu
</th>
<th>
Wlasciciel
</th>
 
 <th>
 Akcja
 </th>
 </tr>
</thead>
<tbody>
{{--  {{var_dump($shopsmanage)}}  --}}
@foreach($shopsmanage as $user)
<tr>
<td>
<img src="img/shops/logo/{{ $user->shop->logo_sklepu }}" class="thumbnail slider_min"/>
</td>
<td>
{{ $user->shop->nazwa_sklepu }}

</td>

<td>{{ $user->shop->link_sklepu }}   </td>
 <td>{{ $user->shop->saldo_sklepu }}   </td>
<td>

     {{$user->name}}       
</td>
 <td>

<a href="/shops/{{$user->shop->id}}/edit" class="btn btn-default">
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
 {{--  {{ $shopsmanage->links() }}   --}}
</div>
 
@endsection
