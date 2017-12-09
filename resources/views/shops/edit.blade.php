@extends('admin_pages')
@section('content')

 
 <div class="panel-heading">
<h3>
Informacje o sklepie
</h3>
 </div>
 <div class="panel-body">
@if(Session::has('update_shop'))
<div class="alert alert-success">
 {{ Session('update_shop') }}
 </div>
@endif
{!! Form::Model($edycja_sklepu,['method'=>'PATCH','files'=>true,'class'=>'form-horizontal','action'=>['ShopsController@update',$edycja_sklepu->id]]) !!}


@include('shops.form_errors')
@include('shops.form',["ButtonSave"=>"Zapisz"])
 
 
</div>

{!! Form::close() !!}
</div>
 
@stop