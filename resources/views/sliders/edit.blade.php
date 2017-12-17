@extends('admin_pages')
@section('content')

 <div class="panel-heading">
<h3>
Edycja slidera
</h3> 
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

{{Form::Model($edycja_slidera,['method'=>'PATCH','files'=>true,'class'=>'form-horizontal','action'=>['SlidersController@update',$edycja_slidera->id]])}}

{{--  {{var_dump($edycja_slidera)}}  --}}

@include('sliders.form',["ButtonSave"=>"Zapisz","Slider"=>'1'] )

{{Form::close()}}
   {{--  <a href="/slides/create" class="col-sm-12 btn btn-success">Dodaj nowy slider</a>
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
<img src="{{ $slider->obrazek_slidera }}" alt="" class="thumbnail slider_min" />
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
 <a href="#" class="btn btn-default">Edycja</a>
  <a href="#" class="btn btn-default">Usun</a>
 </td>
 
 

</tr>

@endforeach


</tbody>
</table>
 </div>  --}}

{{--  {!! Form::close() !!}  --}}

</div>
@stop