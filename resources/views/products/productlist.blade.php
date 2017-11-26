@extends('admin_pages')


@section('content')
 @include('admin_menu')
<div class="panel panel-default col-md-8">
 <div class="panel-heading">
<h3>
Produkty
</h3>
 </div>
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
 </tr>
</thead>
<tbody>
@foreach($products as $product)
<tr>
<td>{{ $product->sku_produktu }}</td>
<td><img src="{{ $product->obrazek_produktu }}" alt="miniatura" width="120" class="thumbnail"/></td>

<td>{{ $product->nazwa_produktu }}</td>
<td>rtre</td>
<td>{{ $product->cena_produktu }}</td>

</tr>

@endforeach

</tbody>
</table>
{{ $products->links() }}
</div>
</div>
@endsection