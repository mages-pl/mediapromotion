<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">

 {!! Form::label('nazwa_firmy','Nazwa firmy') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('nazwa_firmy', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('adres_firmy','Adres firmy') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('adres_firmy', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}


</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('miasto_firmy','Miasto') !!}
</div>
 
<div class="col-md-6">
{!! Form::text('miasto_firmy', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('kod_pocztowy_firmy','Kod pocztowy') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
{!! Form::text('kod_pocztowy_firmy', null, ['class'=>'form-control',"placeholder"=>"00-000","maxlength"=>"6","pattern"=>"[0-9]{2}-[0-9]{3}"]) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>


<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('telefon_firmy','Telefon') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
{!! Form::text('telefon_firmy', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>


<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('nip_firmy','NIP') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
{!! Form::text('nip_firmy', null, ['class'=>'form-control']) !!}
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>



<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('regon_firmy','REGON') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
{!! Form::text('regon_firmy', null, ['class'=>'form-control']) !!}
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
