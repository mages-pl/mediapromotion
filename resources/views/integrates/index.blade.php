@extends('admin_pages')
@section('content')

 <div class="panel-heading">
<h3>
Integracja
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
 
   --}}<table class="table table-striped">
<thead>
<th>
Nazwa sklepu
</th>  
<th>
XML sklepu
</th> 
 
 

 
 </tr>
</thead>
<tbody>

   @foreach($integrates as $integrate) 
<tr>
<td>
{{ $integrate->nazwa_sklepu }}
</td>
<td>
@if(($integrate->xml_sklepu) != '' ) 
{{ $integrate->xml_sklepu }}
@else 
Brak pliku XML
@endif
</td>
 <td>
 <a href="/integrates/process" class="btn btn-default">Integracja</a>
 </td>
 
 

</tr>

@endforeach


</tbody>
</table>
 </div>

{{--  {!! Form::close() !!}  --}}

@stop