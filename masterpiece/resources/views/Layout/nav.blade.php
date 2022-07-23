<!DOCTYPE html>
<html lang="en">
<head>

     <title>SPEEDY</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
     <link rel="stylesheet" href="assets/css/owl.carousel.css">
     <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    
     {{-- auth --}}
     
     {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" > --}}
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
     
     {{-- end auth --}}

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="assets/css/style.css">

</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="#" class="navbar-brand" style="font-size:22px">SPEEDY</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li ><a href="/">Home</a></li>
						 <li><a href="/cars">Cars</a></li>
	                     <li><a href="/about">About Us</a></li>
                         <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
			                         <li><a href="/team">Team</a></li>
			                         <li><a href="/testimonial">Testimonials</a></li>
                              </ul>
                         </li>
                         <li><a href="/contact">Contact us</a></li>
                         {{-- <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                              
                              <ul class="dropdown-menu">
			                         <li><a href="/login">Login</a></li>
                                        <li><a href="/register">Sign up</a></li>
                              </ul>
                         </li> --}}
                         @guest
@if (Route::has('login'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ ('Login') }}</a>
    </li>
@endif

@if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ ('Register') }}</a>
    </li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="/profile/{{ Auth::user()->id }}">
            {{ ('Profile') }}
        </a>
        @if (Auth::user()->role_type == 1)
        <a class="dropdown-item" href="/admin">
            {{ ('Admin Dashboard') }}
        </a>
   @endif
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                                                                                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
            class="d-none">
            @csrf
        </form>
    </div>
</li>
@endguest
                    </ul>
               </div>

          </div>
     </section>