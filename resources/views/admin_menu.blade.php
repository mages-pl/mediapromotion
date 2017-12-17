<div class="col-sm-2" id="menu_left_admin">
<div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
 
                
                    <a href="/" class="navbar-brand"><img src="{{ URL::asset('img/brand.png') }}" alt="" /></a>
               
                </div>
<div class="list-group">
@if(Auth::user()->role_id == 1)
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
Ustawienia</a>
@endif
@if(Auth::user()->role_id == 3)
 <a href="/shopsmanage" class="list-group-item"><i class="fa fa-cog" aria-hidden="true"></i>
Sklepy</a>
 <a href="/promotionsmanage" class="list-group-item">
<i class="fa fa-tags" aria-hidden="true"></i>
Promocje</a>

 <a href="/sliders" class="list-group-item">
<i class="fa fa-picture-o" aria-hidden="true"></i>

Bannery</a>
{{--  {{route(integrates) }}  --}}
 <a href="/integrates/list" class="list-group-item">
<i class="fa fa-retweet" aria-hidden="true"></i>
Integracje</a>

 <a href="/productsmanage" class="list-group-item">
<i class="fa fa-shopping-cart" aria-hidden="true"></i>
Produkty</a>

 
 <a href="/customersmanage" class="list-group-item">
<i class="fa fa-suitcase" aria-hidden="true"></i>

Kontrahenci</a>


<a href="/categorieslist" class="list-group-item">
<i class="fa fa-book" aria-hidden="true"></i>
Kategorie</a>
 <a href="/usersmanage" class="list-group-item">
<i class="fa fa-users" aria-hidden="true"></i>
Uzytkownicy</a>
<a href="/invoicesmanage" class="list-group-item">
<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
Platnosci</a>
@endif


</div>
</div>