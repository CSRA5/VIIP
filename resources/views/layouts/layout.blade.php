<!DOCTYPE html>

<html>
    
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>   

         <title> @yield('title') </title>

       
        <meta name="description" content="@yield('description')"/>
        <meta name="author" content="Christian Ramirez"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png"/>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css"/>

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css"/>
        <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css"/>
        <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css"/>
        <link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css"/>
        <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css"/>

        <!-- Theme CSS -->
        <link rel="stylesheet" href="css/theme.css"/>
        <link rel="stylesheet" href="css/theme-elements.css"/>
        <link rel="stylesheet" href="css/theme-blog.css"/>
        <link rel="stylesheet" href="css/theme-shop.css"/>
        <link rel="stylesheet" href="css/theme-animate.css"/>

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen"/>
        <link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen"/>

        <!-- Skin CSS -->
        <link rel="stylesheet" href="css/skins/default.css"/>

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="css/custom.css"/>

        <!-- Head Libs -->
        <script src="vendor/modernizr/modernizr.js"></script>

        <!--[if IE]>
            <link rel="stylesheet" href="css/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="vendor/respond/respond.js"></script>
            <script src="vendor/excanvas/excanvas.js"></script>
        <![endif]-->

    </head>   

    <body>

        <div class="body">
           
            <header id="header" class="header-no-border-bottom" data-plugin-options='{"stickyEnabled": true, "stickyEnableOnBoxed": true, "stickyEnableOnMobile": true, "stickyStartAt": 153, "stickySetTop": "-153px", "stickyChangeLogo": false}'>
                <div class="header-body">
                    
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-logo">
                                    <a href="index.html">
                                        <img alt="Mega" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="img/logo.png">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <ul class="header-extra-info hidden-xs">
                                    <li>
                                        <div class="feature-box feature-box-style-3">
                                            <div class="feature-box-icon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="mb-none">044-22661/ #934488 </h4>
                                                <p><small>Comunícate con nosotros</small></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="feature-box feature-box-style-3">
                                            <div class="feature-box-icon">
                                                <i class="fa fa-envelope"></i>
                                            </div>
                                            <div class="feature-box-info">
                                                <h4 class="mb-none">informes@megacorredores.pe</h4>
                                                <p><small>Envíanos un mensaje</small></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="header-container header-nav header-nav-bar header-nav-bar-primary">
                        <div class="container">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="header-nav-main header-nav-main-light header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="index.html">Empresa</a></li>

                                        <li class="dropdown">
                                           <a class="dropdown-toggle" href="index.html">
                                                Segura para personas
                                            </a>
                                       
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html">Seguro de salud</a></li>
                                                <li><a href="index.html">SOAT</a></li>
                                                <li><a href="index.html">Seguro vehicular</a></li>
                                                <li><a href="index.html">Seguro domicialiario</a></li>
                                                <li><a href="index.html">Seguro oncológico</a></li>
                                                <li><a href="index.html">Seguro de vida</a></li>
                                                <li><a href="index.html">Accidentes personales</a></li>
                                                <li><a href="index.html">Rapiseguros</a></li>
                                            </ul>
                                        </li>

                                        <li class="dropdown">
                                           <a class="dropdown-toggle" href="index.html">
                                                Segura para empresas
                                            </a>
                                       
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html">Seguro de vida ley</a></li>
                                                <li><a href="index.html">SCTR</a></li>
                                                <li><a href="index.html">Seguro flota vehicular</a></li>
                                                <li><a href="index.html">Seguros de transporte</a></li>
                                                <li><a href="index.html">Multiriesgo Pyme</a></li>
                                                <li><a href="index.html">Seguros de ingienería</a></li>
                                                <li><a href="index.html">EPS</a></li>
                                                <li><a href="index.html">Responsabilidad civil para hidrocabruros</a></li>
                                                <li><a href="index.html">Responsabilidad civil general</a></li>

                                            </ul>
                                        </li>

                                        <li><a href="index.html">Staff</a></li>
                                        <li><a href="index.html">Contacto</a></li>

                                    </ul>
                                </nav>  
                            </div>
                        </div>
                    </div>
                </div>
            </header>
     
        
        @yield('content')

        <footer class="short" id="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Nosotros</h4>
                            <p>Organización MEGA Corredores de Seguros SAC, se constituye como un nexo entre las diferentes compañías de seguros del país y nuestros clientes, brindando un servicio eficaz, puntual y adecuándonos a los requerimientos y planes que nos soliciten.... <a href="#" class="btn-flat btn-xs">Ver más <i class="fa fa-arrow-right"></i></a></p>
                            <hr class="light">
                        </div>
                        <div class="col-md-3 col-md-offset-1">
                            <h5 class="mb-sm">Comunícate con nosotros</h5>
                            <span class="phone">044-22661/ #934488</span>
                            <ul class="list list-icons list-icons-sm">
                                <li><i class="fa fa-envelope"></i> <a href="mailto:okler@okler.net">informes@megacorredores.pe</a></li>
                            </ul>
                            <ul class="social-icons">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <div class="container">
                        <div class="row">
                            
                            <div class="col-md-12">
                                <p>© Organización Mega 2015 powered by <a href="http://dmark.pro/">Dmark</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        <!-- Vendor -->
        <!--[if lt IE 9]>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <![endif]-->
        <!--[if gte IE 9]><!-->
        <script src="vendor/jquery/jquery.js"></script>
        <!--<![endif]-->
        <script src="vendor/jquery.appear/jquery.appear.js"></script>
        <script src="vendor/jquery.easing/jquery.easing.js"></script>
        <script src="vendor/jquery-cookie/jquery-cookie.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.js"></script>
        <script src="vendor/common/common.js"></script>
        <script src="vendor/jquery.validation/jquery.validation.js"></script>
        <script src="vendor/jquery.stellar/jquery.stellar.js"></script>
        <script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="vendor/jquery.gmap/jquery.gmap.js"></script>
        <script src="vendor/jquery.lazyload/jquery.lazyload.js"></script>
        <script src="vendor/isotope/jquery.isotope.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.js"></script>
        <script src="vendor/jflickrfeed/jflickrfeed.js"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
        <script src="vendor/vide/vide.js"></script>
        
        <!-- Theme Base, Components and Settings -->
        <script src="js/theme.js"></script>
        
        <!-- Specific Page Vendor and Views -->
        <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
        <script src="js/views/view.home.js"></script>
        
        <!-- Theme Custom -->
        <script src="js/custom.js"></script>
        
        <!-- Theme Initialization Files -->
        <script src="js/theme.init.js"></script>

     </div>
    </body>

</html>
   


<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="template, tour template, city tours, city tour, tours tickets, transfers, travel, travel template" />
    <meta name="description" content= "@yield('description')"/>
    <meta name="author" content="Christian Ramirez">
    <title> @yield('title') </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href={{asset('css/base.css') }}  rel="stylesheet">

    <!-- Google web fonts -->
   <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>

  
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!--[if lte IE 8]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a>.</p>
<![endif]-->

    <div id="preloader">
        <div class="sk-spinner sk-spinner-wave">
            <div class="sk-rect1"></div>
            <div class="sk-rect2"></div>
            <div class="sk-rect3"></div>
            <div class="sk-rect4"></div>
            <div class="sk-rect5"></div>
        </div>
    </div>
    <!-- End Preload -->

    <div class="layer"></div>
    <!-- Mobile menu overlay mask -->


    <!-- Header================================================== -->
    <header id="colored">
    	
    	<!--Container-->
    	 <div class="container">
			
			 <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="img/logo.png" width="100" height="44" alt="City tours" data-retina="true" class="logo_normal"></a>
                        <a href="url('/')"><img src="img/logo-sticky.png" width="100" height="44" alt="City tours" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="img/logo.png" width="100" height="44" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
  							<li><a href="{{ url('empresa') }}">Empresa</a></li>
                             
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_hotels_list.html">Tour número 1</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 2</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 3</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 4</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 5</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 6</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 7</a></li>
                                    <li><a href="all_hotels_list.html">Tour número 8</a></li>

                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Guía Turística <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_transfer_list.html">Ica</a></li>
                                    <li><a href="all_transfer_list.html">Paracas</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="">Testimonios</a></li>

                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Vehiculos<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_hotels_list.html">Vehiculo 1</a></li>
                                    <li><a href="all_hotels_list.html">Vehiculo 2</a></li>
                                    <li><a href="all_hotels_list.html">Vehiculo 3</a></li>
                                    <li><a href="all_hotels_list.html">Vehiculo 4</a></li>
                                   
                                </ul>
                            </li>

							<li><a>Contacto</a></li>

                        </ul>
                    </div><!-- End main-menu -->
               </nav>
            </div>

    	 </div>
		<!--End container-->
    </header>
	<!-- End Header-->

	  @yield('content')


	  <footer>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-3">
                    <h3>Mas información?</h3>
                    <a href="tel://004542344599" id="phone">+51 01 484-8619</a>
                    <a href="mailto:help@citytours.com" id="email_footer">info@viajesicaparacas.com</a>
                </div>
                                 
            </div><!-- End row -->
            <div class="row">
                <div class="col-md-12">
                    <div id="social_footer">
                        <ul>
                            <li><a href="#"><i class="icon-facebook"></i></a></li>
                            <li><a href="#"><i class="icon-twitter"></i></a></li>
                            <li><a href="#"><i class="icon-google"></i></a></li>
                            <li><a href="#"><i class="icon-instagram"></i></a></li>
                    		<li><a href="#"><i class="icon-youtube-play"></i></a></li>
                   		</ul>
                        <p>© Turinet Group 2015 powered by <a href="http://dmark.pro/">Dmark Pro</a></p>
                    </div>
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </footer><!-- End footer -->

<div id="toTop"></div><!-- Back to top button -->

<!-- Jquery -->
<script src="{{ asset('js/jquery-1.11.2.min.js') }}"></script>
<script src="{{ asset('js/common_scripts_min.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>

<script src="{{ asset('js/modernizr.js') }}"></script>  
<script src="{{ asset('js/video_header.js') }}"></script>
<script>
$(document).ready(function() {

   HeaderVideo.init({
      container: $('.header-video'),
      header: $('.header-video--media'),
      videoTrigger: $("#video-trigger"),
      autoPlayVideo: false
    });    

});
</script>

 @yield('script')


</body>

</html>
>>>>>>> upstream/master
