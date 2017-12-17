@extends('admin_pages')
@section('content')

 <div class="panel-heading">
<h3>
Kategorie
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
 
   --}}
   
   <a href="/categories/create" class="btn col-sm-12 btn-success">Dodaj nowa kategorie</a>
   <table class="table table-striped">
<thead>
<th>
Nazwa kategorii
</th>  
<th>
Status kategorii
</th> 
<th>
Kateogria główna
</th>
 <th>
Akcja
</th>

 
 </tr>
</thead>
<tbody>

   @foreach($categorieslist as $category) 
<tr>
<td>
{{ $category->nazwa_kategorii }}
</td>
<td>
{{ $category->status_kategorii }}
</td>
<td>
{{ $category->glowna }}
</td>
 <td>
 <a href="/categories/{{$category->id}}/edit" class="btn btn-default">Edycja</a>
 {!! Form::open(['method'=>'DELETE','class'=>'form-inline','action'=>['CategoriesController@destroy',$category->id]]) !!}
  <button class="btn btn-danger"> 
 
 <i class="fa fa-trash-o" aria-hidden="true"></i>
 
</button>
 {!! Form::close() !!}
 </td>
 

</tr>

@endforeach


</tbody>
</table>
 {{ $categorieslist->links() }} 

 </div>

{{--  {!! Form::close() !!}  --}}
@stop