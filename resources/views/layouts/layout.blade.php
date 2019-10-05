<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title', 'Home')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Google Fonts
		============================================ -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <!-- Bootstrap CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
        <!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}">
        <!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
        <!-- normalize CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
        <!-- meanmenu icon CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
        <!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <!-- educate icon CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/educate-custon-icon.css')}}">
        <!-- morrisjs CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/morrisjs/morris.css')}}">
        <!-- mCustomScrollbar CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/scrollbar/jquery.mCustomScrollbar.min.css')}}">
        <!-- metisMenu CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/metisMenu/metisMenu.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/metisMenu/metisMenu-vertical.css')}}">
        <!-- calendar CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/calendar/fullcalendar.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/calendar/fullcalendar.print.min.css')}}">
        <!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/style.css')}}">
        <!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        <!-- modernizr JS
		============================================ -->
        {{--  <script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>  --}}
        {{-- datepickercdn --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">

        

    </head>

    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <!-- Start Left menu area -->
        <div class="left-sidebar-pro">
            <nav id="sidebar" class="">
                <div class="sidebar-header">
                    <a href="{{url('/')}}"><img class="main-logo" src="https://www.taufikagroup.com/images/logo.png" alt="" style="width:150px"/></a>

                    <strong><a href="{{url('/')}}"><img src="https://www.taufikagroup.com/images/logo.png" alt=""  /></a></strong>
                </div>
                <div class="left-custom-menu-adp-wrap comment-scrollbar">
                    @auth
                    <nav class="sidebar-nav left-sidebar-menu-pro">
                        <ul class="metismenu" id="menu1">
                            <li class="active">
                                <a class="has-arrow" href="index.html">
                                    <span class="educate-icon educate-home icon-wrap"></span>
                                    <span class="mini-click-non">Bank</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Create" href="{{route('bank.create')}}"><span class="mini-sub-pro">Create</span></a></li>
                                    <li><a title="List" href="{{route('bank.index')}}"><span class="mini-sub-pro">List</span></a></li>
                                </ul>
                            </li>
                            <li class="active">
                                <a class="has-arrow" href="index.html">
                                    <span class="educate-icon educate-form icon-wrap"></span>
                                    <span class="mini-click-non">Cheque</span>
                                </a>
                                <ul class="submenu-angle" aria-expanded="true">
                                    <li><a title="Create" href="{{route('cheque.create')}}"><span class="mini-sub-pro">Create</span></a></li>
                                    <li><a title="List" href="{{route('cheque.index')}}"><span class="mini-sub-pro">List</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    @endauth
                </div>
            </nav>
        </div>
        <!-- End Left menu area -->
        <!-- Start Welcome area -->
        <div class="all-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="logo-pro">
                            {{--  <a href="{{url('/')}}"><img class="main-logo" src="https://www.taufikagroup.com/images/logo.png" alt="" /></a>  --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-advance-area">
                <div class="header-top-area">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="header-top-wraper">
                                    <div class="row">
                                        <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                            {{--  <div class="menu-switcher-pro">
                                                <button type="button" id="sidebarCollapse"
                                                    class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                            </div>  --}}
                                        </div>
                                        <div class="col-md-12" style="padding:20px">
                                            <div class="header-top-menu tabl-d-n" style="margin-left:85%" >
                                                    <!-- Left Side Of Navbar -->
                                                    <ul class="navbar-nav mr-auto">

                                                    </ul>

                                                    <!-- Right Side Of Navbar -->
                                                    <ul class="navbar-nav ml-auto">
                                                        <!-- Authentication Links -->
                                                        @guest
                                                            <li class="nav-item">
                                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                            </li>
                                                            @if (Route::has('register'))
                                                                <li class="nav-item">
                                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                                </li>
                                                            @endif
                                                        @else
                                                            <li class="nav-item dropdown">
                                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                                </a>

                                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                                       onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                                                        {{ __('Logout') }}
                                                                    </a>

                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </li>
                                                        @endguest
                                                    </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                            <div class="header-right-info">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-sales-area mg-tb-30">
                <div class="container-fluid">
                    <div class="row" style="padding-top: 50px">
                        <div class="col-md-12">
                            <div class="" style="background:white; padding:30px" >
                                @include('layouts.flashMessage')
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jquery
		============================================ -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <!-- bootstrap JS
		============================================ -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- wow JS
		============================================ -->
        <script src="{{asset('assets/js/wow.min.js')}}"></script>
        <!-- price-slider JS
		============================================ -->
        <script src="{{asset('assets/js/jquery-price-slider.js')}}"></script>
        <!-- meanmenu JS
		============================================ -->
        <script src="{{asset('assets/js/jquery.meanmenu.js')}}"></script>
        <!-- owl.carousel JS
		============================================ -->
        <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
        <!-- sticky JS
		============================================ -->
        <script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
        <!-- scrollUp JS
		============================================ -->
        <script src="{{asset('assets/js/jquery.scrollUp.min.js')}}"></script>
        <!-- counterup JS
		============================================ -->
        <script src="{{asset('assets/js/counterup/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('assets/js/counterup/waypoints.min.js')}}"></script>
        <script src="{{asset('assets/js/counterup/counterup-active.js')}}"></script>
        <!-- mCustomScrollbar JS
		============================================ -->
        <script src="{{asset('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('assets/js/scrollbar/mCustomScrollbar-active.js')}}"></script>
        <!-- metisMenu JS
		============================================ -->
        <script src="{{asset('assets/js/metisMenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/js/metisMenu/metisMenu-active.js')}}"></script>
        <!-- morrisjs JS
		============================================ -->
        <script src="{{asset('assets/js/morrisjs/raphael-min.js')}}"></script>
        {{--  <script src="{{asset('assets/js/morrisjs/morris.js')}}"></script>  --}}
        {{--  <script src="{{asset('assets/js/morrisjs/morris-active.js')}}"></script>  --}}
        <!-- morrisjs JS
		============================================ -->
        <script src="{{asset('assets/js/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('assets/js/sparkline/jquery.charts-sparkline.js')}}"></script>
        <script src="{{asset('assets/js/sparkline/sparkline-active.js')}}"></script>
        <!-- calendar JS
		============================================ -->
        <script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
        <script src="{{asset('assets/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('assets/js/calendar/fullcalendar-active.js')}}"></script>
        <!-- plugins JS
		============================================ -->
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <!-- main JS
		============================================ -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <!-- tawk chat JS
		=========================================== -->
        {{-- <script src="{{asset('assets/js/tawk-chat.js')}}"></script> --}}
        {{-- jquery ui --}}
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

    </body>

</html>

@yield('script')
