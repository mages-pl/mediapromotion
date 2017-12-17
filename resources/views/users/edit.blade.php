 @extends('admin_pages')
@section('content')

 <div class="panel-heading">
<h3>
Edycja uzytkownika
</h3> 
 </div>
<div class="panel-body">

 

{{Form::Model($edycja_usera,['method'=>'PATCH','files'=>true,'class'=>'form-horizontal','action'=>['UsersController@update',$edycja_usera->id]])}}

 
@include('users.form',["ButtonSave"=>"Zapisz","User"=>'1'] )

{{Form::close()}}
 

</div>
@stop