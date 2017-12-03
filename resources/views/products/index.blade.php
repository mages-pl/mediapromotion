@extends('pages')


@section('content')
<div class="">
<div class="frontend__category_image" style="margin-bottom:20px;background-image:url({{ asset('img/category/furniture.jpg') }});background-size:cover;background-position:center;width:100%;height:400px;display:block;">
<h1 class="page-header section">
Meble
</h1>
</div>

<div class="breadcrumb">
        
    <a href="#" class="btn btn-default">MediaPromotion</a> 
    <a href="#" class="btn btn-default">Meble</a></div>

</div>
 <div class="row">
 <div class="col-sm-3">
 <div class="panel panel-default" id="frontend__left_menu">
 <h3 class="panel-heading">Meble</h3>
 <ul class="list-group">
	<li class="list-group-item"><a href="#">Komody</a></li>
	<li class="list-group-item"><a href="#">Regaly</a></li>
	<li class="list-group-item"><a href="#">Witryny</a></li>
	<li class="list-group-item"><a href="#">Kredensy</li>
	<li class="list-group-item"><a href="#">Szafy</a></li>
	<li class="list-group-item"><a href="#">Polki</a></li>
	<li class="list-group-item"><a href="#">Stoly</a></li>
	<li class="list-group-item"><a href="#">Krzesla</a></li>
	<li class="list-group-item"><a href="#">Lozka</a></li>
	<li class="list-group-item"><a href="#">Skrzynie</a></li>
	<li class="list-group-item"><a href="#">Organizery</a></li>
	<li class="list-group-item"><a href="#">Stoliki</a></li>
	<li class="list-group-item"><a href="#">Biurka</a></li>
	<li class="list-group-item"><a href="#">Toaletki</a></li>
	<li class="list-group-item"><a href="#">Komody RTV</a></li>
	<li class="list-group-item"><a href="#">Mebloscianki</a></li>
	<li class="list-group-item"><a href="#">Lustra</a></li>
	<li class="list-group-item"><a href="#">Fotele</a></li>
	<li class="list-group-item"><a href="#">Szafki nocne</a></li>
	<li class="list-group-item"><a href="#">Szafki</a></li>
	<li class="list-group-item"><a href="#">Stoly i krzesla</a></li>
	<li class="list-group-item"><a href="#">Sofy</a></li>
	<li class="list-group-item"><a href="#">Zestawy</a></li>
    </ul>
    </div>


 <div class="panel panel-default" id="frontend__left_menu">
 <h3 class="panel-heading">Cena</h3>
 <form class="" style="margin: 15px;">
 <div class="form-group">
 <div class="col-sm-6"><input type="text" placeholder="500" class="form-control"></div>
 <div class="col-sm-6"><input type="text" class="form-control" placeholder="2500"></div>
<input type="submit" value="Filtruj" class="btn btn-primary" style="width: 100%;margin: 15px 0 0 0;">
</div>
</form>    
</div>

 <div class="panel panel-default" id="frontend__left_menu">
 <h3 class="panel-heading">Promocje</h3>
 <form class="" style="margin: 15px;">
 <input type="submit" value="% Promocje" class="btn btn-primary btn-promocje" style="width: 100%;margin: 15px 0 0 0;">
</form>    
 
</div>



    <div class="panel panel-default" id="frontend__left_menu">
 <h3 class="panel-heading">Marki</h3>
 <ul class="list-group">
	<li class="list-group-item"><a href="#">Patiomeble.eu</a></li>
	<li class="list-group-item"><a href="#">Lazienka.shop</a></li>
	  
    </ul>
    </div>
</div>
 <div class="col-sm-9">
 

@for($i=0;$i<count($responsedata);$i++)
  
@foreach($responsedata[$i]->offers->offer as $item) 

<div class="col-sm-4">
<div class="panel panel-default product__panel">
<a href="{{$item->url}}">

<div class="product__image">
   
   <div class="product__image--inner">  
 
   @if(($item->IsPromoted) == '1')
<span class="product__image--inner-sale">{{((number_format((float)(1-($item->price/$item->oldprice)),2))*100) }}% </span>
   @endif 
<img src="img/gui/loader.gif" data-src="{{ $item->imgs->img[0] }}" alt="{{ $item->name }}" />
   </div>   
   </div>
<span class="product__shop"><i aria-hidden="true" class="fa fa-user-o"></i>{{$item->brand}}</span>

<span class="product__name">{{ $item->name }}</span>
@if(($item->IsPromoted) == '1')
<span class="product__price--old">{{ $item->oldprice }} zł</span>
@endif
<span class="product__price">{{ $item->price }} zł</span>
</a>
</div>
</div>

@endforeach  

@endfor
</div>
</div>
<br/>
<br/>
@endsection