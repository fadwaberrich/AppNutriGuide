<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Nutricare – Nutrition Health & Diet Consultancy HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />

<title>NutriGuide</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="images/fav-app.png" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="css/animate.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="css/themify-icons.css"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="css/flaticon.css"/>

<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">

    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="css/shortcodes.css"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="css/main.css"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<style>
    .prt_floting_customsett{
        display:none;
    }
    #rev_slider_4_1 .zeus.tparrows{
        display:none;
    }
    .ttm-btn.ttm-btn-size-md1 {
        font-size: 16px;
        padding: 10px 38px 12px 38px;
        border-radius: 5px;
        letter-spacing: 1.2px;
        border: none;
        color: #fff;
        display: block;
        text-align: center;
    }
    .mb-20 {
        margin-bottom: 20px !important;
        margin-left: 250px;
        margin-right: 250px;
    }

</style>
</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
        <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->
        <!--header start-->
        <header id="masthead" class="header ttm-header-style-stackcenter">


        <!-- ttm-header-wrap -->
                    <div class="ttm-header-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <!-- ttm-stickable-header-w -->
                                    <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
                                        <div id="site-header-menu" class="site-header-menu">
                                            <div class="site-header-menu-inner ttm-stickable-header">
                                                <div class="container">
                                                    <!--site-navigation -->
                                                    <div id="site-navigation" class="site-navigation">
                                                        <div class="ttm-menu-toggle">
                                                            <input type="checkbox" id="menu-toggle-form">
                                                            <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                                                <span class="toggle-block toggle-blocks-1"></span>
                                                                <span class="toggle-block toggle-blocks-2"></span>
                                                                <span class="toggle-block toggle-blocks-3"></span>
                                                            </label>
                                                        </div>
                                                        <nav id="menu" class="menu">

                                                            <ul class="dropdown">
                    
                                                                <li><a href="/accueil">Accueil</a></li>
                                                                <li><a href="/apropos">A propos</a></li>
                                                                <li><a href="/nutritionniste">Nutritionnistes</a></li>
                                                                <li><a href="/contact">Contact</a></li>
                                                                
                                                                    
                                                                
                                                            @guest
                                                            @if (Route::has('login'))
                                                                <li class="nav-item btn">
                                                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                                                </li>
                                                            @endif

                                                            @if (Route::has('register'))
                                                                <li class="nav-item btn">
                                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
                                                                </li>
                                                            @endif
                                                            @else
                                                            <li class="nav-item btn">
                                                            {{ Auth::user()->name }}
                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                                    </a>

                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                                    </form>
                                                            </li>
                                                            @endguest
                                                            </li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                <!-- site-navigation end-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- ttm-stickable-header-w end-->
                            </div>
                        </div>
                    </div><!--ttm-header-wrap end -->
                </header>
                <!--header end-->

                @yield('nav')




    <!-- Javascript -->

    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    <script src="js/jquery.easing.js"></script>    
    <script src="js/jquery-waypoints.js"></script>    
    <script src="js/jquery-validate.js"></script> 
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/numinate.min6959.js?ver=4.9.3"></script>
    <script src="js/main.js"></script>

    <!-- Revolution Slider -->
    <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="revolution/js/slider.js"></script>
    <script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>

    <!-- Javascript end-->
</body>
</html>