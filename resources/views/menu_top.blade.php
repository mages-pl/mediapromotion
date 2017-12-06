<ul class="nav navbar-nav menu-poziome">
@foreach($categories as $c)
@if(($c->glowna) == 1)
<li><a href="#{{$c->id}},{{$c->tag_kategorii}}" class="parent-category">{{$c->nazwa_kategorii}}</a>
<ul class="submenu">
@foreach($categories as $sub) 
@if($sub->id_glownej_kategorii == $c->id)  <li><a href="#{{$sub->id}},{{$sub->tag_kategorii}}">{{$sub->nazwa_kategorii}}</a></li> @endif  @endforeach
</ul>
</li>
@endif
@endforeach      
<li><a href="/promotions">Promocje</a></li>
<li><a href="/shops">Sklepy</a></li>
<li><a href="/brands">Marki</a></li>
</ul>