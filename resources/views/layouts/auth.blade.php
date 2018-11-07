<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title>{{ config('app.name', 'Social Audit BD') }}</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, Vendroid" />
    <meta name="description" content="Login Pages - Responsive Admin HTML Template">
    <meta name="author" content="Venmond">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/ico/favicon.png">


    <!-- CSS -->

    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="css/font-awesome-ie7.min.css"><![endif]-->
    <link href="{{asset('assets/css/font-entypo.css')}}" rel="stylesheet" type="text/css">

    <!-- Fonts CSS -->
    <link href="{{asset('assets/css/fonts.css')}}" rel="stylesheet" type="text/css">
     <!-- Plugin CSS -->
    <link href="{{asset('assets/plugins/jquery-ui/jquery-ui.custom.min.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{asset('assets/plugins/prettyPhoto-plugin/css/prettyPhoto.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/isotope/css/isotope.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/pnotify/css/jquery.pnotify.css')}}" media="screen" rel="stylesheet" type="text/css">    
	<link href="{{asset('assets/plugins/google-code-prettify/prettify.css')}}" rel="stylesheet" type="text/css"> 
   
         
    <link href="{{asset('assets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/tagsInput/jquery.tagsinput.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/bootstrap-switch/bootstrap-switch.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{asset('assets/plugins/daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css">    
    <link href="{{asset('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/plugins/colorpicker/css/colorpicker.css')}}" rel="stylesheet" type="text/css">   


    <!-- Specific CSS -->


    <!-- Theme CSS -->
    <link href="{{asset('assets/css/theme.min.css')}}" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="{{asset('assets/css/chrome.css')}}" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->

    <!-- Responsive CSS -->
    <link href="{{asset('assets/css/theme-responsive.min.css')}}" rel="stylesheet" type="text/css">




    <!-- for specific page in style css -->

    <!-- for specific page responsive in style css -->


    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="{{asset('assets/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/mobile-detect.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/mobile-detect-modernizr.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/html5shiv.js"></script>
        <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->

</head>

<body id="pages" class="full-layout no-nav-left no-nav-right nav-top-fixed background-login responsive remove-navbar login-layout clearfix"
    data-active="pages " data-smooth-scrolling="1">
    <div class="vd_body">
        <!-- Header Start -->

        <!-- Header Ends -->
        <div class="content">
            <div class="container">

                <!-- Middle Content Start -->

                <div class="vd_content-wrapper">
                    <div class="vd_container">
                        <div class="vd_content clearfix">
                            <div class="vd_content-section clearfix">
                                @yield('content')
                            </div>
                            <!-- .vd_content-section -->

                        </div>
                        <!-- .vd_content -->
                    </div>
                    <!-- .vd_container -->
                </div>
                <!-- .vd_content-wrapper -->

                <!-- Middle Content End -->

            </div>
            <!-- .container -->
        </div>
        <!-- .content -->

        <!-- Footer Start -->
        <footer class="footer-2" id="footer">
            <div class="vd_bottom ">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12">
                            <div class="copyright text-center">
                                Copyright &copy;2014 Venmond Inc. All Rights Reserved
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div>
        </footer>
        <!-- Footer END -->

    </div>

    <!-- .vd_body END  -->
    <a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>
    <!--<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

    <!-- Javascript =============================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="js/excanvas.js"></script>      
    <![endif]-->
    <script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script> 
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-ui/jquery-ui.custom.min.js')}}></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/caroufredsel.js')}}"></script> 
    <script type="text/javascript" src="{{asset('assets/js/plugins.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/plugins/breakpoints/breakpoints.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/dataTables/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/prettyPhoto-plugin/js/jquery.prettyPhoto.js')}}"></script> 

    <script type="text/javascript" src="{{asset('assets/plugins/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/tagsInput/jquery.tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/bootstrap-switch/bootstrap-switch.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/blockUI/jquery.blockUI.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/pnotify/js/jquery.pnotify.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/js/theme.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/custom/custom.js')}}"></script>


    <!-- Specific Page Scripts Put Here -->

    @yield('page_specific_scripts')

    <!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

    <script>
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-XXXXX-X']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>

</body>

</html>
