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
{{--  
                <form class="navbar-form" role="search">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="q">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
        </form>  --}}
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
                       <span class="btn btn-default saldo">0,00 PLN</span>
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
                    <ul class="nav navbar-nav menu-poziome">
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
          

           
                    </ul>
</div>
        
                </div>
                </div>
            </div>
        </nav>