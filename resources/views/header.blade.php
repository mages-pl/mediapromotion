<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />

     <link rel="stylesheet" href="{{ URL::asset('custom.css') }}" />  
     <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js')}}"></script>
    
     <script type="text/javascript" src="{{ URL::asset('js/lazzy.min.js')}}"></script>
     <script type="text/javascript" src="{{ URL::asset('js/mediapromotion.js')}}"></script>
      
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
            <div class="col-sm-2">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    {{--  <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                        
                    </a>  --}}
                
                    <a href="/" class="navbar-brand"><img src="{{ URL::asset('img/brand.png') }}" alt="" />MediaPromotion</a>
               
                </div>
                </div>
 
 <div class="col-sm-10">
 <div class="col-sm-8"> 
 <div class="wyszukiwarka">
{!! Form::open(['url'=>'#','method'=>'get','class'=>'navbar-form','role'=>'search']) !!}
<div class="input-group">
{!! Form::text('szukaj_produktu',null,['class'=>'form-control','placeholder'=>'Szukaj produktów, marek, sklepów...']) !!}
<span class="input-group-btn">
{!! Form::button('<i class="fa fa-search"></i>',['class'=>'btn btn-default']) !!}
</span>
</div>
{!! Form::close() !!}
</div>
</div>
 <div class="collapse navbar-collapse" id="app-navbar-collapse">
<div class="col-sm-4">
   
    
 <!-- Authentication Links -->
      <ul class="nav navbar-nav navbar-right">
                        @guest
                            <li><a href="{{ route('login') }}"> 
                            <i class="fa fa-user-o" aria-hidden="true"></i>
 Zaloguj</a></li>
                            <li>
<a href="{{ route('register') }}">
<i class="fa fa-sign-in" aria-hidden="true"></i>
Stwórz konto</a></li>
                        @else
                       <li>
                       <span class="btn btn-default saldo"> 
                                 @if(Auth::user()->role_id == 1)
                       {{--  0,00 PLN  --}}
FREE
                       @endif
                        @if(Auth::user()->role_id == 2)
                       Moderator
                       @endif
                        @if(Auth::user()->role_id == 3)
                      Admin
                       @endif
                       </span>
                       </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                   <i class="fa fa-user-o" aria-hidden="true"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                <li>
                                <a href="/shops/{{Auth::user()->id}}/edit">
                                Moje konto
                                </a>
                                </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                        </ul>
</div>
<div class="col-sm-12">
            
                    <!-- Left Side Of Navbar -->
                    {{--  <ul class="nav navbar-nav menu-poziome">
           <li>
              <a href="/products">Meble</a>
            </li>
            <li>
              <a href="/#mezczyzna">Oświetlenie</a>
            </li>
            <li>
              <a href="/#dziecko">Dodatki</a>
            </li>
            <li>
              <a href="/shops">Sklepy</a>
            </li>
            <li>
              <a  href="/promotions">Promocje</a>
            </li>
            <li>
              <a  href="/brands">Marki</a>
            </li>
          

           
                    </ul>  --}}
{{--  {{$categories}}  --}}
<ul class="nav navbar-nav menu-poziome">
{{--  fgfg: {{ $categories }}  --}}
{{--  {{$categories}}  --}}
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



   {{--  @include('menu_top',['categories'=>$categories])       --}}
</div>
        
                </div>
                </div>
            </div>
        </nav>