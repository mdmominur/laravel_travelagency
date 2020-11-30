@php
    use App\footer;
    use App\genarel_setting;
    $footer = footer::first();
    $genarel_setting = genarel_setting::first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('admin/images'.'/'.$genarel_setting->logo) }}" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/main.css">
</head>

<body @yield('body_class')>
    <div class="preloader">
        <img src="{{ asset('frontend') }}/preloader.gif" alt="preloader.gif">
    </div>
   <!-- navbar start -->
   <nav class="navbar navbar-expand-lg d-lg-none " id="navbar1">
       <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img src="{{ asset('admin/images'.'/'.$genarel_setting->logo) }}" alt="travelling logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="icon-align-justify"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item @if($_SERVER['PHP_SELF'] == '/index.php') active @endif">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/about') active @endif @endif">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/destination') active @endif @endif"">
                    <a class="nav-link" href="{{ route('destination') }}">Destination</a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/blog') active @endif @endif"">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/contact') active @endif @endif"">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Book now!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   <nav class="navbar navbar-expand-lg d-none d-lg-block " id="navbar2">
       <div class="container">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav2" >
                    <li class="nav-item @if($_SERVER['PHP_SELF']  == '/index.php') active @endif">
                    <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/about') active  @endif @endif">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/destination') active @endif @endif">
                    <a class="nav-link" href="{{ route('destination') }}">Destination</a>
                    </li>
                    <li class="nav-item logo">
                    <a class="nav-link" href="{{ route('index') }}"><img src="{{ asset('admin/images'.'/'.$genarel_setting->logo) }}" alt="{{ $genarel_setting->logo }}"></a>
                    <span>Whare to?</span>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/blog') active @endif @endif">
                    <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item @if($_SERVER['PHP_SELF'] != '/index.php') @if($_SERVER['PATH_INFO'] == '/contact') active @endif @endif">
                    <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}">Book now!</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   <!-- navbar End -->

    <!-- header-section start -->
    <header class="container-fluid" id="header" style="@yield('margin_top') height: 100vh; text-align: center; background:@yield('header_background'); 
    background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;
    position: relative; display: flex; flex-direction: row; justify-content: center; align-items: center;">
        <div class="container wow fadeInUp" data-wow-delay="2s">
            @yield('header-section')
        </div>
        <form action="{{ route('search') }}" method="get">
            <input type="text" name="search" placeholder="Country, City, Price, Days"> 
            <button><i class="icon-search"></i></button>
        </form>
    </header>
    <!-- header-section End -->
    @yield('content')

    <!-- footer start -->
    <footer class="container-fluid" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 logo2"><img width="100" src="{{ asset('admin/images'.'/'.$genarel_setting->logo) }}" alt=""></div>
                <div class="col-lg-3 terms-condition">
                    <a href="#">Terms and condition</a>
                    <a href="#">Refund policy</a>
                    <a href="#">Privacy policy</a>
                    <a href="#">E-mail us</a>
                </div>
                <div class="col-lg-3 about-us">
                    <a href="{{ route('about') }}">About us</a>
                    <p>{{substr($genarel_setting->description, 0, 70).' ...' }}</p>
                </div>
                <div class="col-lg-3 address">
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/locationwhitelow@2x.png" alt="">
                        {{ $genarel_setting->address }}
                    </a>
                    <a href="#">
                        <img src="{{ asset('frontend') }}/img/call white@2x.png" alt="">
                        {{ $genarel_setting->phone }}
                    </a>
                </div>
            </div>
            <div class="social-icons">
                <a href="{{ $footer->instagram }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_-2@2x.png" alt=""></a>
                <a href="{{ $footer->facebook }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_2018_social_media_popular_app_logo_facebook_3225194@2x.png" alt=""></a>
                <a href="{{ $footer->twitter }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_-4@2x.png" alt=""></a>
                <a href="{{ $footer->whatsapp }}"><img src="{{ asset('frontend').'/' }}img/iconfinder_2018_social_media_popular_app_logo-whatsapp_3225179@2x.png" alt=""></a>
            </div>
            <div class="copy-right">
               {!! $footer->copyright !!}
            </div>
        </div>
    </footer>
    <!-- footer End -->

    
    <script src="{{ asset('frontend') }}/js/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/Waypoints.js"></script>
    <script src="{{ asset('frontend') }}/js/jquery.counterup.js"></script>
    <script src="{{ asset('frontend') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend') }}/js/main.js"></script>
</body>
</html>