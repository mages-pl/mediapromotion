@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 
 <div class="panel-heading">
<h3>
Nowa kategoria
</h3>
 </div>
 <div class="panel-body">
 
{!! Form::open(['url'=>'categories','class'=>'form-horizontal']) !!}


@include('categories.form_errors')
@include('categories.form',["ButtonSave"=>"Dodaj","ValuesForm"=>"0"])





</div>

{!! Form::close() !!}
 
 
@stop