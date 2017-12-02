 

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">

 {!! Form::label('nazwa_promocji','Nazwa promocji') !!}
</div>
 
<div class="col-md-6">
@if($ValuesForm == "0")
{!! Form::text('nazwa_promocji', null, ['class'=>'form-control']) !!}
@endif
@if($ValuesForm != "0")
{!! Form::text('nazwa_promocji', $edit_promotion->nazwa_promocji, ['class'=>'form-control']) !!}
@endif
{{--  <input type="text" name="nazwa_sklepu" class="form-control"/>  --}}

</div>
</div>
 
<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('opis_promocji','Opis promocji') !!}
</div>
 
<div class="col-md-6">
@if($ValuesForm == "0")
{!! Form::textarea('opis_promocji', null, ['class'=>'form-control']) !!}
@endif
@if($ValuesForm != "0")
{!! Form::textarea('opis_promocji', $edit_promotion->opis_promocji, ['class'=>'form-control']) !!}
 @endif
</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 {!! Form::label('kod_promocji','Kod promocji') !!}
</div>
 
<div class="col-md-6">
@if($ValuesForm == "0")
{!! Form::text('kod_promocji', null, ['class'=>'form-control']) !!}
@endif
@if($ValuesForm != "0")
{!! Form::text('kod_promocji', $edit_promotion->kod_promocji, ['class'=>'form-control']) !!}
@endif
  
</div>
</div>

<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('wartosc_promocji','Wartość zniżki (%)') !!}
</div>
 {{--  {{ var_dump($errors) }}  --}}

<div class="col-md-6">
@if($ValuesForm == "0")
{!! Form::text('wartosc_promocji', null, ['class'=>'form-control',"maxlength"=>"2","pattern"=>"[0-9]{2}"]) !!}
@endif
@if($ValuesForm != "0")
{!! Form::text('wartosc_promocji', $edit_promotion->wartosc_promocji, ['class'=>'form-control',"maxlength"=>"2","pattern"=>"[0-9]{2}"]) !!}
@endif
 
</div>
</div>


<div class="form-group row col-sm-12">
<div class="col-sm-4 col-form-label">
 
 {!! Form::label('promocja_od','Czas promocji') !!}
</div>
  

<div class="col-md-3">
@if($ValuesForm == "0")
{!! Form::date('promocja_od', null, ['class'=>'form-control']) !!}
@endif
@if($ValuesForm != "0")
{!! Form::date('promocja_od', $edit_promotion->promocja_od, ['class'=>'form-control']) !!}
 
@endif
</div>
<div class="col-md-3">
 
 @if($ValuesForm == "0")
{!! Form::date('promocja_do', null, ['class'=>'form-control']) !!}
@endif
@if($ValuesForm != "0")
{!! Form::date('promocja_do', $edit_promotion->promocja_do, ['class'=>'form-control']) !!}

@endif
</div>
</div>
    


<div class="form-group">
<div class="col-sm-12">
<div class="text-right">
  {!! Form::submit($ButtonSave,['class'=>"btn btn-primary"]) !!}   
</div>
</div>
</div>
