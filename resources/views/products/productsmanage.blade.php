@extends('admin_pages')


@section('content')

 <div class="panel-heading">
<h3>
Produkty
</h3>
 </div>
 <span>
 Produktów: {{ $qty }}
 </span>
 <div class="panel-body">
<table class="table table-striped">
<thead>
<th>
SKU
</th>  
<th>
Obrazek
</th>
<th>
Nazwa produktu
</th>
<th>
Stan
</th>
<th>
Cena
</th>
<th>
Sklep
</th>
 </tr>
</thead>
<tbody>
@foreach($productsmanage as $product)
<tr>
<td>{{ $product->sku_produktu }}</td>
<td><img src="{{ $product->obrazek_produktu }}" alt="miniatura" width="120" class="thumbnail"/></td>

<td>{{ $product->nazwa_produktu }}</td>
<td>rtre</td>
<td>{{ number_format($product->cena_produktu,2) }}</td>

<td>
{{$product->user_id}}
</td>
</tr>

@endforeach

</tbody>
</table>
{{ $productsmanage->links() }}
</div>

@endsection