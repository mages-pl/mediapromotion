{{--  <input type="hidden" name="user_id" id="user_id" value="1">  --}}
{{--  {!! Form::hidden("user_id",1) !!}  --}}
<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">

 {!! Form::label('nazwa_sklepu','Nazwa sklepu') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('nazwa_sklepu', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('opis_sklepu','Opis sklepu') !!}
</div>
 
<div class="col-md-6">
{!! Form::textarea('opis_sklepu', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('link_sklepu','URL sklepu') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('link_sklepu', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('logo_sklepu','Logo sklepu') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
{!! Form::file('logo_sklepu', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}
<img src="{{ URL::asset('img/shops/logo/'.$edycja_sklepu->logo_sklepu) }}" class="thumbnail" alt="logo sklepu"/>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
<div class="text-right">
  {!! Form::submit($ButtonSave,['class'=>"btn btn-primary"]) !!}   
</div>
</div>
</div>
