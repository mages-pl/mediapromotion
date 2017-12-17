 
{{Form::label('email', 'Adres e-mail')}}
{{Form::text('email',null,['class'=>'form-control'])}}

 

{{Form::label('name', 'Nazwa uzytkownika')}}
{{Form::text('name',null,['class'=>'form-control'])}}

 {{Form::label('role_id', 'Rola uzytkownika')}}
{{Form::text('role_id',null,['class'=>'form-control'])}}


{{Form::label('status_uzytkownika', 'Status uzytkownika')}}

{{ Form::radio('status_uzytkownika', 1, true, ['class' => 'field']) }}
{{ Form::radio('status_uzytkownika', 0, false, ['class' => 'field']) }}

<div class="text-right">

{{Form::submit($ButtonSave,['class'=>'btn btn-primary']) }}
</div>
{{--  {{Form::radio('status_slidera[0]',"1",['class'=>'form-control'])}}
{{Form::radio('status_slidera[1]',"0",['class'=>'form-control'])}}  --}}