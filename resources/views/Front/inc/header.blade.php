<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>

<meta name="csrf-token" content="{{ csrf_token() }}">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('Front/css/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('Front/css/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/templatemo-klassy-cafe.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/owl-carousel.css')}}">

    <link rel="stylesheet" href="{{asset('Front/css/lightbox.css')}}">

    </head>
    
    <body>
      <!-- ***** Preloader Start ***** -->
    <div id="preloader">
      <div class="jumper">
          <div></div>
          <div></div>
          <div></div>
      </div>
  </div>  
  <!-- ***** Preloader End ***** -->
  
  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->
                      <a href="{{route('Front.index')}}" class="logo">
                          <img src="{{asset('Front/images/klassy-logo.png')}}" height="80" width="250" align="klassy cafe html template">
                      </a>
                      <!-- ***** Logo End ***** -->
                      <!-- ***** Menu Start ***** -->
                      <ul class="nav">
                          <li class="scroll-to-section"><a href="{{route('Front.index')}}" class="active">Home</a></li>
                          <li class="scroll-to-section"><a href="{{route('Front.about')}}">About</a></li>
                          
                
                          <li class="scroll-to-section"><a href="{{route('Front.menu')}}">Menu</a></li>
                          <li class="scroll-to-section"><a href="{{route('Front.cheefs')}}">Chefs</a></li> 
                          <li class="scroll-to-section"><a href="{{route('Front.teams')}}">Teams</a></li> 
                         
                          <li class="scroll-to-section"><a href="{{route('Front.contact')}}">Contact Us</a></li> 
                          
                          @guest

                         

                    @else
                  

                    
                          <li class="submenu">
                            <a href="javascript:;">{{ Auth::user()->name }}</a>
                            <ul>
                                <li> ali </li>
                                <li> ali </li>
                                <li> ali </li>
                            </ul>
                            
                        </li>
                        @endguest

                      </ul>        
                      <a class='menu-trigger'>
                          <span>Menu</span>
                      </a>
                      <!-- ***** Menu End ***** -->
                  </nav>
              </div>
          </div>
      </div>
  </header>
  <!-- ***** Header Area End ***** -->