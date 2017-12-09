@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')

 
<h1 class="panel-heading">
Dodawanie sklepu
</h1>
 
{!! Form::open(['url'=>'shops','class'=>'form-horizontal']) !!}


@include('shops.form_errors')
@include('shops.form',["ButtonSave"=>"Dodaj"])
 

{!! Form::close() !!}
 

@stop