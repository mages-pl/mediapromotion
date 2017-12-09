@extends('admin_pages')
@section('content')
 
 <div class="panel-heading">
<h3>
Dane firmy
</h1> 
 </div>
<div class="panel-body">
@if(Session::has('update_shop'))
<div class="alert alert-success">
 {{ Session('update_shop') }}
 </div>
@endif
{!! Form::Model($edit_shop,['method'=>'PATCH','class'=>'form-horizontal','action'=>['SettingsController@update',$edit_shop->id]]) !!}


@include('settings.form_errors')
@include('settings.form',["ButtonSave"=>"Zapisz"])
 
 
</div>

{!! Form::close() !!}
 
@stop