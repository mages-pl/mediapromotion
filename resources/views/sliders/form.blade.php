{{Form::label('nazwa_slidera', 'Tytuł slidera')}}
{{Form::text('nazwa_slidera',null,['class'=>'form-control'])}}

{{Form::label('link_slidera', 'URL slidera')}}
{{Form::text('link_slidera',null,['class'=>'form-control'])}}

@if($Slider == '1')
<img src="/img/slider/{{$edycja_slidera->obrazek_slidera}}" alt="{{$edycja_slidera->nazwa_slidera}}" class="thumbnail slider_min" />
@endif

{{Form::label('obrazek_slidera', 'Obrazek slidera')}}
{{Form::file('obrazek_slidera',null,['class'=>'form-control'])}}

{{Form::label('opis_slidera', 'Opis slidera')}}
{{Form::textarea('opis_slidera',null,['class'=>'form-control'])}}

{{Form::label('status_slidera', 'Status slidera')}}

{{Config::get('constans.on')}} {{ Form::radio('status_slidera', 1, true, ['class' => 'field']) }}
{{Config::get('constans.on')}} {{ Form::radio('status_slidera', 0, false, ['class' => 'field']) }}

<div class="text-right">

{{Form::submit($ButtonSave,['class'=>'btn btn-primary']) }}
</div>
{{--  {{Form::radio('status_slidera[0]',"1",['class'=>'form-control'])}}
{{Form::radio('status_slidera[1]',"0",['class'=>'form-control'])}}  --}}