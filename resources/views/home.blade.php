@include("header")

 
<!-- start slider -->


<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">

    @foreach($sliders as $slider) 
  @if($sliders->first() == $slider) 
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
 @else 
    <li data-target="#myCarousel" data-slide-to="1"></li>
  @endif
  
  @endforeach

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  @foreach($sliders as $slider) 
  @if($sliders->first() == $slider) 
 <div class="item active">
 @else 
 <div class="item">
  @endif
      <img src="img/slider/{{$slider->obrazek_slidera}}" alt="{{$slider->nazwa_slidera}}">
    </div>
  @endforeach

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="fa fa-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="fa fa-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div>
<!-- end slider --> 
<div class="container">
<h1 class="title__site home">Najnowsze produkty</h1>
@foreach($last_products as $last_product)
<div class="col-sm-3">
<div class="panel panel-default product__panel">
<img src="{{ $last_product->obrazek_produktu }}" alt="{{ $last_product->nazwa_produktu }}" />
<span class="product__name">{{ $last_product->nazwa_produktu }}</span>
<span class="product__price">{{ $last_product->cena_produktu }} zł</span>
</div>
</div>
@endforeach
</div>

@include("footer")



 
 
