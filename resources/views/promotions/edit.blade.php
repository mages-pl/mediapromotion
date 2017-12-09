@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 
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
 
 
@stop