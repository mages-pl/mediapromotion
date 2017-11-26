@extends("pages")

@section("content")

 <div class="col-sm-3">
 <div class="card">

 <div class="card-body text-center">
 <div class="card-img-top thumbnail">
<img src="{{ asset('img/shops/logo/'.$shop->logo_sklepu) }}" alt="{{$shop->nazwa_sklepu}}" /> 

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
 <div class="panel-body">
 <div class="card-text">
 
<h1 class="page-header">
  {{$shop->nazwa_sklepu}}  
</h1>

 
 {{$shop->opis_sklepu}}
 </div>
 </div>
 </div>
 </div>
@stop