@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 @include('admin_menu')
 <div class="col-sm-10"> 
<div class="panel panel-default">
  
 <div class="panel-heading">
<h3>
{{--  Promocja: {{$edit_promotion->nazwa_promocji}}  --}}
</h3>
 </div>
 <div class="panel-body">
 
{!! Form::open(['method'=>'PATCH','class'=>'form-horizontal','action'=>['PromotionsController@update',$edit_promotion->id]]) !!}


@include('promotions.form_errors')
@include('promotions.form',["ButtonSave"=>"Zapisz","ValuesForm"=>"1"])





</div>

{!! Form::close() !!}
 
</div>
 </div>
@stop