@extends('admin_pages')
@section('title')
Slidery
@endsection
@section('content')

 <div class="panel-heading">
<h3>
Bannery
</h1> 
 </div>
<div class="panel-body">
{{--  @if(Session::has('update_shop'))
<div class="alert alert-success">
 {{--  {{ Session('update_shop') }} 
 </div>
@endif  --}}
{{--  {!! Form::Model($edit_shop,['method'=>'PATCH','class'=>'form-horizontal','action'=>['SettingsController@update',$edit_shop->id]]) !!}
  --}}

{{--  @include('settings.form_errors')
@include('settings.form',["ButtonSave"=>"Zapisz"])
 
   --}}
   <a href="/sliders/create" class="col-sm-12 btn btn-success">Dodaj nowy slider</a>
   <table class="table table-striped">
<thead>
<th>
Obrazek
</th>  
<th colspan="2">
Tytul
</th> 
<th>
Opis
</th> 
 <th>
Link
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

   @foreach($sliders as $slider) 
<tr>
<td class="slider_tab">
<img src="img/slider/{{ $slider->obrazek_slidera }}" alt="" class="thumbnail slider_min" />
</td>
<td colspan="2">
 
{{ $slider->nazwa_slidera }}
 
</td>
 <td>
 
{{ $slider->opis_slidera }}
 
</td>
<td>
 
{{ $slider->link_slidera }}
 
</td>
<td>
 
{{ $slider->status_slidera }}
 
</td>
 <td>
 <a href="/sliders/{{$slider->id}}/edit" class="btn btn-default">Edycja</a>
 
  {!! Form::open(['method'=>'DELETE','class'=>'form-inline','action'=>['SlidersController@destroy',$slider->id]]) !!}
 <button class="btn btn-danger"> 
 {{--  <a href="/promotions/{{$promotion->id}}/destroy" class="btn btn-default">  --}}
 <i class="fa fa-trash-o" aria-hidden="true"></i>
{{--  </a>  --}}
</button>
{!! Form::close() !!}
 </td>
 
 

</tr>

@endforeach


</tbody>
</table>
 </div>

{{--  {!! Form::close() !!}  --}}

@stop