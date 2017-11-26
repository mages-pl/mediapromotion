@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 @include('admin_menu')
<div class="panel panel-default col-md-8">
  
<h1 class="panel-heading">
Dodawanie sklepu
</h1>
 
{!! Form::open(['url'=>'sklepy','class'=>'form-horizontal']) !!}


@include('shops.form_errors')
@include('shops.form',["ButtonSave"=>"Dodaj"])





</div>

{!! Form::close() !!}
 
</div>
 
@stop