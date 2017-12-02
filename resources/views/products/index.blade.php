@extends('pages')


@section('content')
<div class="col-sm-12">
<div class="category_image" style="margin-bottom:20px;background-image:url({{ asset('img/category/furniture.jpg') }});background-size:cover;background-position:center;width:100%;height:400px;display:block;">
<h1 class="page-header section">
Meble
</h1>
</div>

</div>
{{--  {{ print_r($responsejson)}}  --}}

{{--  @foreach($user_xml as $url_xml)
 {{$url_xml->xml_sklepu}}
@endforeach  --}}
{{--  {{$user_xml}}  --}}

@foreach($responsedata->offers->offer as $item) 

<div class="col-sm-3">
<div class="panel panel-default product__panel">
<a href="{{$item->url}}">
<div class="product__image">
<img src="{{ $item->imgs->img[0] }}" alt="{{ $item->name }}" />
</div>
<span class="product__name">{{ $item->name }}</span>
<span class="product__price">{{ $item->price }} zł</span>
</a>
</div>
</div>

@endforeach
<br/>
<br/>
{{--  
@foreach($products as $product)
<div class="col-sm-3">
<div class="panel panel-default product__panel">
<img src="{{ $product->obrazek_produktu }}" alt="{{ $product->nazwa_produktu }}" />
<span class="product__name">{{ $product->nazwa_produktu }}</span>
<span class="product__price">{{ $product->cena_produktu }} zł</span>
</div>
</div>
@endforeach  --}}
@endsection