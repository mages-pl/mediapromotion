@extends('pages')

@section('content')
 
<div class="col-sm-12">
<div class="category_image" style="margin-bottom:20px;background-image:url({{ asset('img/category/shop.jpg') }});background-size:cover;background-position:center;width:100%;height:250px;display:block;">
<h1 class="page-header section">
Sklepy
</h1>
</div>

</div>


<div class="clearfix"></div>
@foreach($shops as $shop)
<div class="col-sm-12 col-md-6 col-lg-3">
<div class="panel panel-default">
<div class="panel-body text-center">

 <div class="logo_sklep thumbnail">
 <figure>
<img src="{{ asset('img/shops/logo/300x300-'.$shop->logo_sklepu) }}" alt="{{$shop->nazwa_sklepu}}" />
 </figure>
 </div>
 
<div class="page-header">
<h4>{{$shop->nazwa_sklepu}}</h4>
</div>
<div class="panel-body">
{{ str_limit($shop->opis_sklepu,$limit=125)}}
</div>
<div class="card-footer">
<a href="/shops/{{$shop->id}}" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>
 {{$shop->nazwa_sklepu}}  
 </a> 
</div>
</div>

</div>
</div>
@endforeach

@stop

