@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 @include('admin_menu')
 <div class="col-sm-10">
<div class="panel panel-default">
  
<h1 class="panel-heading">
Dodawanie sklepu
</h1>
 
{!! Form::open(['url'=>'shops','class'=>'form-horizontal']) !!}


@include('shops.form_errors')
@include('shops.form',["ButtonSave"=>"Dodaj"])





</div>

{!! Form::close() !!}
 
</div>
 </div>
@stop