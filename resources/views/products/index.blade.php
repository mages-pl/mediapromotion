@extends('pages')


@section('content')
<div class="col-sm-12">
<div class="category_image" style="margin-bottom:20px;background-image:url({{ asset('img/category/furniture.jpg') }});background-size:cover;background-position:center;width:100%;height:400px;display:block;">
<h1 class="page-header section">
Meble
</h1>
</div>

</div>

@foreach($products as $product)
<div class="col-sm-3">
<div class="panel panel-default product__panel">
<img src="{{ $product->obrazek_produktu }}" alt="{{ $product->nazwa_produktu }}" />
<span class="product__name">{{ $product->nazwa_produktu }}</span>
<span class="product__price">{{ $product->cena_produktu }} zł</span>
</div>
</div>
@endforeach
@endsection