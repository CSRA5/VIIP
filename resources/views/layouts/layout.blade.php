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
   

