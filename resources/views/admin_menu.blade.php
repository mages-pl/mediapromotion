<div class="col-md-4">
<div class="list-group">
<a href="/shops/{{Auth::user()->id}}/edit" class="list-group-item">
<i class="fa fa-tachometer" aria-hidden="true"></i>
Pulpit</a>
<a href="/products-list" class="list-group-item">
<i class="fa fa-shopping-cart" aria-hidden="true"></i>

Sklep</a>
 <a href="/promotions-list" class="list-group-item"><i class="fa fa-tags" aria-hidden="true"></i>
Promocje</a>
<a href="/statistics" class="list-group-item">
<i class="fa fa-bar-chart" aria-hidden="true"></i>
Statystyki</a> 
<a href="/invoices"  class="list-group-item"><i class="fa fa-credit-card" aria-hidden="true"></i>
Faktury</a>
 <a href="/settings/{{Auth::user()->id}}/edit" class="list-group-item"><i class="fa fa-cog" aria-hidden="true"></i>
Ustawienia</a></div>
</div>