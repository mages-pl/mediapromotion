@extends('admin_pages')
{{--  @extends('pages')  --}}
@section('content')
 
 <div class="panel-heading">
<h3>
Edytuj kategorie
</h3>
 </div>
 <div class="panel-body">
 
{!! Form::Model($edycja_kategorii, ['method' => 'PATCH','class'=>'form-horizontal', 'action' => ['CategoriesController@update',$edycja_kategorii->id]]) !!}


@include('categories.form_errors')
@include('categories.form',["ButtonSave"=>"Zapisz","ValuesForm"=>"1"])





</div>

{!! Form::close() !!}
 
 
@stop