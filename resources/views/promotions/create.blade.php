@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 @include('admin_menu')
<div class="panel panel-default col-md-8">
  
 <div class="panel-heading">
<h3>
Nowa promocja
</h3>
 </div>
 <div class="panel-body">
 
{!! Form::open(['url'=>'promotions','class'=>'form-horizontal']) !!}


@include('promotions.form_errors')
@include('promotions.form',["ButtonSave"=>"Dodaj","ValuesForm"=>"0"])





</div>

{!! Form::close() !!}
 
</div>
 
@stop