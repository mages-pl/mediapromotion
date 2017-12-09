@extends('admin_pages')
@section('content')

 <div class="panel-heading">
<h3>
Uzytkownicy
</h1> 
 </div>
<div class="panel-body">
{{--  @if(Session::has('update_shop'))
<div class="alert alert-success">
 {{--  {{ Session('update_shop') }} 
 </div>
@endif  --}}
{{--  {!! Form::Model($edit_shop,['method'=>'PATCH','class'=>'form-horizontal','action'=>['SettingsController@update',$edit_shop->id]]) !!}
  --}}

{{--  @include('settings.form_errors')
@include('settings.form',["ButtonSave"=>"Zapisz"])
 
   --}}<table class="table table-striped">
<thead>
<th>
Nazwa uzytkownika
</th>  
<th>
e-mail
</th> 
 <th>
Status
</th> 
 <th>
Uprawnienia
</th> 

 
 </tr>
</thead>
<tbody>

   @foreach($users as $user) 
<tr>
<td>
{{ $user->name }}
</td>
<td>
 
{{ $user->email }}
 
</td>
<td>
 
{{ $user->status_uzytkownika }}
 
</td>
<td>
 
{{ $user->role_id }}
 
</td>
 <td>
 <a href="#" class="btn btn-default">Edycja</a>
 </td>
 
 

</tr>

@endforeach


</tbody>
</table>
 </div>

{{--  {!! Form::close() !!}  --}}

@stop