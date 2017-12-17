{!! Form::label('nazwa_kategorii', 'Nazwa kategorii') !!}

{!! Form::text('nazwa_kategorii',null,['class'=>'form-control']) !!} 


<div class="form-row"> 
{!! Form::label('glowna', 'Kategoria Glowna') !!}


{{Config::get('constans.on')}} {!! Form::radio('glowna',1,['class'=>'field']) !!}
{{Config::get('constans.off')}} {!! Form::radio('glowna',0,['class'=>'field']) !!}
</div>

<div class="form-row"> 
{!! Form::label('id_glownej_kategorii', 'ID kategorii nadrzędnej') !!}
 {!! Form::text('id_glownej_kategorii',null,['class'=>'form-control']) !!}
 
</div>

<div class="form-row">
{!! Form::label('status_kategorii', 'Status kategorii') !!}

{{Config::get('constans.on')}} {!! Form::radio('status_kategorii',1,['class'=>'field']) !!}
{{Config::get('constans.off')}} {!! Form::radio('status_kategorii',0,['class'=>'field']) !!}
</div>
 
<div class="form-row">
{!! Form::label('tag_kategorii', 'Tag kategorii') !!}

  {!! Form::text('tag_kategorii',null,['class'=>'form-control']) !!}
 
</div>


<div class="form-group">
<div class="col-sm-12">
<div class="text-right">
  {!! Form::submit($ButtonSave,['class'=>"btn btn-primary"]) !!}   
</div>
</div>
</div>