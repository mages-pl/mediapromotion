{{--  <input type="hidden" name="user_id" id="user_id" value="1">  --}}
{{--  {!! Form::hidden("user_id",1) !!}  --}}
<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">

 {!! Form::label('nazwa_promocji','Nazwa promocji') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('nazwa_promocji', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('opis_promocji','Opis promocji') !!}
</div>
 
<div class="col-md-6">
{!! Form::textarea('opis_promocji', null, ['class'=>'form-control']) !!}
 
</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('kod_promocji','Kod promocji') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('kod_promocji', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('wartosc_promocji','Wartość zniżki (%)') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
{!! Form::text('wartosc_promocji', null, ['class'=>'form-control',"maxlength"=>"2","pattern"=>"[0-9]{2}"]) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>


<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('promocja_od','Czas promocji') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-3">
{!! Form::date('promocja_od', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
<div class="col-md-3">
 
{!! Form::date('promocja_do', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>
 


<div class="form-group">
<div class="col-sm-12">
<div class="text-right">
  {!! Form::submit($ButtonSave,['class'=>"btn btn-primary"]) !!}   
</div>
</div>
</div>
