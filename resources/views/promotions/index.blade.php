@extends('pages')

@section('content')
<div class="col-sm-12">
<div class="category_image" style="margin-bottom:20px;background-image:url({{ asset('img/category/sale.jpg') }});background-size:cover;background-position:center;width:100%;height:400px;display:block;">
<h1 class="page-header section">
Promocje
</h1>
</div>

</div>
  @foreach($promotions as $promotion)
<div class="col-sm-12 col-md-6 col-lg-3">
<div class="panel panel-default">
<div class="panel-body text-center">

 <div class="logo_sklep thumbnail">
<img src="{{ URL::asset('img/shops/logo/300x300-'.$promotion->user->shop->logo_sklepu) }}" alt="{{$promotion->nazwa_promocji}}" />
 </div>
 
<div class="page-header promocja__content--h">
<h4 class="promocja__nazwa">{{$promotion->nazwa_promocji}}</h4>
<span class="promocja_dyskont">-{{$promotion->wartosc_promocji}}%</span>
</div>
<div class="panel-body">
{{ str_limit($promotion->opis_promocji,$limit=125)}}
</div>
<div class="card-footer">
<a href="/promotions/{{$promotion->id}}" class="btn btn-primary"><i class="fa fa-user" aria-hidden="true"></i>
{{$promotion->user->name}}</a>
 <div class="clearfix"></div>
 <i class="fa fa-clock-o" aria-hidden="true"></i>

Promocja ważna do:
 {{$promotion->promocja_do}}
</div>
</div>

</div>
</div>
@endforeach  

@stop

