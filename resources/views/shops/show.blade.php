@extends("pages")

@section("content")

 <div class="col-sm-3">
 <div class="card">

 <div class="card-body text-center">
 <div class="card-img-top thumbnail">
<img src="{{ asset('img/shops/logo/300x300-'.$shop->logo_sklepu) }}" alt="{{$shop->nazwa_sklepu}}" /> 

 </div>
</div>
 </div>
 
     
 <div class="list-group">

<a href="{{$shop->link_sklepu}}" target="_blank" class="list-group-item active">O sklepie</a>
  

<a href="{{$shop->link_sklepu}}" target="_blank" class="list-group-item">Produkty</a>
 

<a href="{{$shop->link_sklepu}}" target="_blank" class="list-group-item">Promocje</a>
  
 
<a href="{{$shop->link_sklepu}}" target="_blank" class="list-group-item">Strona www</a>
 
 </div>

  
 </div>
 <div class="col-sm-9">
 <div class="panel panel-default">
 <div class="panel-heading">
   
<h1>
  {{$shop->nazwa_sklepu}}  
</h1>
 
 </div>
 <div class="panel-body">


 
 {{$shop->opis_sklepu}}
 </div>
 </div>
 <div class="panel panel-default">
 <div class="panel-heading">
 Media
 </div>
 <div class="panel-body">
 @foreach($products as $product)
 <div class="col-sm-3">
 
 <img src="{{$product->obrazek_produktu}}" class="thumbnail" alt="{{ $product->nazwa_produktu }}"/>
 </div>
@endforeach
 
 
  </div>
 </div>

<div class="panel panel-default">
 <div class="panel-heading">
 Produkty
 </div>
 <div class="panel-body">
 
 </div>
 </div>

 </div>
  
@stop