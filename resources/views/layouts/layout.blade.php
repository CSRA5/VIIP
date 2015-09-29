<!DOCTYPE html>
<!--[if IE 8]><html class="ie ie8"> <![endif]-->
<!--[if IE 9]><html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content= "@yield('description')"/>
    <meta name="author" content="Christian Ramirez">
    <title> @yield('title') </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="{{asset('css/base.css') }}"  rel="stylesheet">

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

    <div id="top_line">
            <div class="container">
                <ul id="top_links">
                     <li><strong>(51) 01 440-8819/(51) 01 9856 19968</strong></li>
                    <li><strong>info@viajesicaparacas.com </strong></li>
                 </ul>
            </div><!-- End container-->
    </div><!-- End top line-->

    	
    	<!--Container-->
    	 <div class="container">
			
			 <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3">
                    <div id="logo">
                        <a href="{{url('/')}}"><img src="{{asset('img/logo.png') }}" width="149" height="66" alt="City tours" data-retina="true" class="logo_normal"></a>
                        <a href="url('/')"><img src="{{asset('img/logo-sticky.png') }}" width="100" height="44" alt="City tours" data-retina="true" class="logo_sticky"></a>
                    </div>
                </div>
                <nav class="col-md-9 col-sm-9 col-xs-9">
                    <a class="cmn-toggle-switch cmn-toggle-switch__htx open_close" href="javascript:void(0);"><span>Menu mobile</span></a>
                    <div class="main-menu">
                        <div id="header_menu">
                            <img src="{{ asset('img/logo.png') }}" width="100" height="44" alt="City tours" data-retina="true">
                        </div>
                        <a href="#" class="open_close" id="close_in"><i class="icon_set_1_icon-77"></i></a>
                        <ul>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
  							<li><a href="{{ url('empresa') }}">Empresa</a></li>
                             
                             <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Tours<i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="all_hotels_list.html">Ruta del Pisco</a></li>
                                    <li><a href="all_hotels_list.html">Full Day Paracas</a></li>
                                    <li><a href="all_hotels_list.html">Paracas Inolvidable</a></li>
                                    <li><a href="all_hotels_list.html">Paracas con Sobrevuelo Nazca</a></li>
                                    <li><a href="all_hotels_list.html">Paracas-Ica Relax</a></li>
                                    <li><a href="all_hotels_list.html">Ruta del Pisco Delux</a></li>
                                    <li><a href="all_hotels_list.html">Ica-Paracas Mágicos</a></li>
                               
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="show-submenu">Guía Turística <i class="icon-down-open-mini"></i></a>
                                <ul>
                                    <li><a href="{{ url('guia-turistica/ica') }}">Ica</a></li>
                                    <li><a href="{{ url('guia-turistica/paracas') }}">Paracas</a></li>
                                </ul>
                            </li>
                            
                            <li><a href="{{ url('testimonios') }}">Testimonios</a></li>

                            <li class="submenu">
                                <a  href="{{ url('nuestros-vehiculos') }}" class="show-submenu">Vehiculos</a>                              
                            </li>

							<li><a href="{{ url('contacto') }}">Contacto</a></li>

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
                
                 <div class="col-md-8 col-sm-9">
                   <p> <br/><strong>Viajes Ica Paracas</strong> nace con el propósito de brindar un servicio de alta calidad a los turistas más exigentes que desean visitar y conocer la cultura y las maravillas turísticas del Perú.
                    Pertenecemos a la Agencia de Viajes y Tour Operador <strong>TURINET PERU</strong>, que cuenta con una amplia experiencia en turismo, reconocida por la National Geographic Traveler y la Revista Amura quienes realizaron reportajes al Perú.
                    </p>
                 </div>
                <div class="col-md-4 col-sm-3">
                    <h3>Mas información?</h3>
                    <a href="tel://004542344599" id="phone">+(51) 01 440-8819</a>
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
 

 @yield('script')


</body>

</html>