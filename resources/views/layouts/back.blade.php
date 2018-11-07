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
    <title>E-Commerce Dashboard - Responsive Multipurpose Admin Templates | Vendroid</title>
    <meta name="keywords" content="HTML5 Template, CSS3, All Purpose Admin Template, " />
    <meta name="description" content="Responsive Admin Template for e-commerce dashboard">
    <meta name="author" content="Venmond">

    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/apple-touch-icon-114-precomposed.png')}}')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/apple-touch-icon-72-precomposed.png')}}')}}">
    <link rel="apple-touch-icon-precomposed" href="img/ico/apple-touch-icon-57-precomposed.png')}}')}}">
    <link rel="shortcut icon" href="img/ico/favicon.png')}}')}}">


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

</head>

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix"
    data-active="dashboard " data-smooth-scrolling="1">
    <div class="vd_body" id="app">
        <!-- Header Start -->
        <header class="header-1" id="header">
            <div class="vd_top-menu-wrapper">
                <div class="container ">
                    <div class="vd_top-nav vd_nav-width  ">
                        <div class="vd_panel-header">
                            <div class="logo">
                                <a href="index-2.html"><img alt="logo" src="{{asset('assets/img/logo.png')}}"></a>
                            </div>
                            <!-- logo -->
                            <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation."
                                data-step="1">
                                <span class="nav-medium-button menu" data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Medium Nav Toggle" data-action="nav-left-medium">
                                    <i class="fa fa-bars"></i>
                                </span>

                                <span class="nav-small-button menu" data-toggle="tooltip" data-placement="bottom"
                                    data-original-title="Small Nav Toggle" data-action="nav-left-small">
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>

                            </div>
                            <div class="vd_panel-menu left-pos visible-sm visible-xs">

                                <span class="menu" data-action="toggle-navbar-left">
                                    <i class="fa fa-ellipsis-v"></i>
                                </span>


                            </div>
                            <div class="vd_panel-menu visible-sm visible-xs">
                                <span class="menu visible-xs" data-action="submenu">
                                    <i class="fa fa-bars"></i>
                                </span>

                                <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                                    <i class="fa fa-comments"></i>
                                </span>

                            </div>
                            <!-- vd_panel-menu -->
                        </div>
                        <!-- vd_panel-header -->

                    </div>
                    <div class="vd_container">
                        <div class="row">
                            <div class="col-sm-5 col-xs-12">

                                <div class="vd_menu-search">
                                    <form id="search-box" method="post" action="#">
                                        <input type="text" name="search" class="vd_menu-search-text width-60"
                                            placeholder="Search">
                                        <div class="vd_menu-search-category"> <span data-action="click-trigger"> <span
                                                    class="separator"></span> <span class="text">Category</span> <span
                                                    class="icon"> <i class="fa fa-caret-down"></i></span> </span>
                                            <div class="vd_mega-menu-content width-xs-2 center-xs-2 right-sm"
                                                data-action="click-target" style="display: none;">
                                                <div class="child-menu">
                                                    <div class="content-list content-menu content">
                                                        <ul class="list-wrapper">
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" value="all-files">
                                                                    <span>All Files</span></label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" value="photos">
                                                                    <span>Photos</span></label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" value="illustrations">
                                                                    <span>Illustrations</span></label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" value="video">
                                                                    <span>Video</span></label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" value="audio">
                                                                    <span>Audio</span></label>
                                                            </li>
                                                            <li>
                                                                <label>
                                                                    <input type="checkbox" value="flash">
                                                                    <span>Flash</span></label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="vd_menu-search-submit"><i class="fa fa-search"></i> </span>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-7 col-xs-12">
                                <div class="vd_mega-menu-wrapper">
                                    <div class="vd_mega-menu pull-right">
                                        <ul class="mega-ul">
                                            <li id="top-menu-1" class="one-icon mega-li">
                                                <a href="index-2.html" class="mega-link" data-action="click-trigger">
                                                    <span class="mega-icon"><i class="fa fa-users"></i></span>
                                                    <span class="badge vd_bg-red">1</span>
                                                </a>
                                                <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs left-sm"
                                                    data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="title">
                                                            Friend Requests
                                                            <div class="vd_panel-menu">
                                                                <span data-original-title="Find User" data-toggle="tooltip"
                                                                    data-placement="bottom" class="menu">
                                                                    <i class="fa fa-search"></i>
                                                                </span>
                                                                <span data-original-title="Message Setting" data-toggle="tooltip"
                                                                    data-placement="bottom" class="menu">
                                                                    <i class="fa fa-cog"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="content-grid column-xs-2 column-sm-3 height-xs-4">
                                                            <div data-rel="scroll" class="mCustomScrollbar _mCS_1"
                                                                style="overflow: hidden;">
                                                                <div class="mCustomScrollBox mCS-light" id="mCSB_1"
                                                                    style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                                    <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                                        <ul class="list-wrapper">
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Gabriella
                                                                                    Montagna
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">San
                                                                                            Diego</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="warning">
                                                                                <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Jonathan Fuzzy
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">Seattle</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-3.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Sakura Hinata
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">Hawaii</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-4.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Rikudou Sennin
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">Las
                                                                                            Vegas</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-5.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Kim Kardiosun
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">New York</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-6.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Brad Pita
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">Seattle</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-7.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Celline Dior
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">Los
                                                                                            Angeles</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon"><img alt="example image"
                                                                                            src="{{asset('assets/img/avatar/avatar-8.jpg')}}"></div>
                                                                                </a>
                                                                                <div class="menu-text"> Goerge Bruno
                                                                                    Marz
                                                                                    <div class="menu-info">
                                                                                        <div class="menu-date">Las
                                                                                            Vegas</div>
                                                                                        <div class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Approve"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-check"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Reject"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-times"></i>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                                        <div class="mCSB_draggerContainer">
                                                                            <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                                                oncontextmenu="return false;">
                                                                                <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                                            </div>
                                                                            <div class="mCSB_draggerRail"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="closing text-center" style="">
                                                                <a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- child-menu -->
                                                </div> <!-- vd_mega-menu-content -->
                                            </li>
                                            <li id="top-menu-2" class="one-icon mega-li">
                                                <a href="index-2.html" class="mega-link" data-action="click-trigger">
                                                    <span class="mega-icon"><i class="fa fa-envelope"></i></span>
                                                    <span class="badge vd_bg-red">10</span>
                                                </a>
                                                <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 width-lg-4 right-xs left-sm"
                                                    data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="title">
                                                            Messages
                                                            <div class="vd_panel-menu">
                                                                <span data-original-title="Message Setting" data-toggle="tooltip"
                                                                    data-placement="bottom" class="menu">
                                                                    <i class="fa fa-cog"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="content-list content-image">
                                                            <div data-rel="scroll" class="mCustomScrollbar _mCS_2"
                                                                style="overflow: hidden;">
                                                                <div class="mCustomScrollBox mCS-light" id="mCSB_2"
                                                                    style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                                    <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                                        <ul class="list-wrapper pd-lr-10">
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                                <div class="menu-text"> Do you play or
                                                                                    follow any sports?
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">12
                                                                                            Minutes Ago </span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li class="warning">
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                                <div class="menu-text"> Good job mate !
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">1 Hour
                                                                                            20 Minutes Ago </span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Read"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye-slash"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-3.jpg')}}"></div>
                                                                                <div class="menu-text"> Just calm down
                                                                                    babe, everything will work out.
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">12 Days
                                                                                            Ago</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-4.jpg')}}"></div>
                                                                                <div class="menu-text"> Euuh so
                                                                                    gross....
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">19 Days
                                                                                            Ago</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-5.jpg')}}"></div>
                                                                                <div class="menu-text"> That's the
                                                                                    way.. I like it :D
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">20 Days
                                                                                            Ago</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-6.jpg')}}"></div>
                                                                                <div class="menu-text"> Oooh don't be
                                                                                    shy ;P
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">21 Days
                                                                                            Ago</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-7.jpg')}}"></div>
                                                                                <div class="menu-text"> Hello, please
                                                                                    call my number..
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">24 Days
                                                                                            Ago</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-8.jpg')}}"></div>
                                                                                <div class="menu-text"> Don't go
                                                                                    anywhere, i will be coming soon
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">1 Month
                                                                                            2 days Ago</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Mark as Unread"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-eye"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                                        <div class="mCSB_draggerContainer">
                                                                            <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                                                oncontextmenu="return false;">
                                                                                <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                                            </div>
                                                                            <div class="mCSB_draggerRail"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="closing text-center" style="">
                                                                <a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- child-menu -->
                                                </div> <!-- vd_mega-menu-content -->
                                            </li>
                                            <li id="top-menu-3" class="one-icon mega-li">
                                                <a href="index-2.html" class="mega-link" data-action="click-trigger">
                                                    <span class="mega-icon"><i class="fa fa-globe"></i></span>
                                                    <span class="badge vd_bg-red">51</span>
                                                </a>
                                                <div class="vd_mega-menu-content  width-xs-3 width-sm-4  center-xs-3 left-sm"
                                                    data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="title">
                                                            Notifications
                                                            <div class="vd_panel-menu">
                                                                <span data-original-title="Notification Setting"
                                                                    data-toggle="tooltip" data-placement="bottom" class="menu">
                                                                    <i class="fa fa-cog"></i>
                                                                </span>
                                                                <!--<span class="text-menu" data-original-title="Settings" data-toggle="tooltip" data-placement="bottom"> Settings</span> -->
                                                            </div>
                                                        </div>
                                                        <div class="content-list">
                                                            <div data-rel="scroll" class="mCustomScrollbar _mCS_3"
                                                                style="overflow: hidden;">
                                                                <div class="mCustomScrollBox mCS-light" id="mCSB_3"
                                                                    style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                                    <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                                        <ul class="list-wrapper pd-lr-10">
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_yellow"><i
                                                                                            class="fa fa-suitcase"></i></div>
                                                                                    <div class="menu-text"> Someone has
                                                                                        give you a surprise
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">12
                                                                                                Minutes Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_blue"><i
                                                                                            class=" fa fa-user"></i></div>
                                                                                    <div class="menu-text"> Change your
                                                                                        user profile details
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">1
                                                                                                Hour 20 Minutes Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_red"><i
                                                                                            class=" fa fa-cogs"></i></div>
                                                                                    <div class="menu-text"> Your
                                                                                        setting is updated
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">12
                                                                                                Days Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_green"><i
                                                                                            class=" fa fa-book"></i></div>
                                                                                    <div class="menu-text"> Added new
                                                                                        article
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">19
                                                                                                Days Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_green"><img
                                                                                            alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                                    <div class="menu-text"> Change
                                                                                        Profile Pic
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">20
                                                                                                Days Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_red"><i
                                                                                            class=" fa fa-cogs"></i></div>
                                                                                    <div class="menu-text"> Your
                                                                                        setting is updated
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">12
                                                                                                Days Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_green"><i
                                                                                            class=" fa fa-book"></i></div>
                                                                                    <div class="menu-text"> Added new
                                                                                        article
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">19
                                                                                                Days Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>
                                                                            <li> <a href="#">
                                                                                    <div class="menu-icon vd_green"><img
                                                                                            alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                                    <div class="menu-text"> Change
                                                                                        Profile Pic
                                                                                        <div class="menu-info"><span
                                                                                                class="menu-date">20
                                                                                                Days Ago</span></div>
                                                                                    </div>
                                                                                </a> </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                                        <div class="mCSB_draggerContainer">
                                                                            <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                                                oncontextmenu="return false;">
                                                                                <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                                            </div>
                                                                            <div class="mCSB_draggerRail"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="closing text-center" style="">
                                                                <a href="#">See All Notifications <i class="fa fa-angle-double-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div> <!-- child-menu -->
                                                </div> <!-- vd_mega-menu-content -->
                                            </li>

                                            <li id="top-menu-profile" class="profile mega-li">
                                                <a href="#" class="mega-link" data-action="click-trigger">
                                                    <span class="mega-image">
                                                        <img src="{{asset('assets/img/avatar/avatar.jpg')}}" alt="example image">
                                                    </span>
                                                    <span class="mega-name">
                                                        Caroline <i class="fa fa-caret-down fa-fw"></i>
                                                    </span>
                                                </a>
                                                <div class="vd_mega-menu-content  width-xs-2  left-xs left-sm"
                                                    data-action="click-target" style="display: none;">
                                                    <div class="child-menu">
                                                        <div class="content-list content-menu">
                                                            <ul class="list-wrapper pd-lr-10">
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-user"></i></div>
                                                                        <div class="menu-text">Edit Profile</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-trophy"></i></div>
                                                                        <div class="menu-text">My Achievements</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-envelope"></i></div>
                                                                        <div class="menu-text">Messages</div>
                                                                        <div class="menu-badge">
                                                                            <div class="badge vd_bg-red">10</div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-tasks"></i></div>
                                                                        <div class="menu-text"> Tasks</div>
                                                                        <div class="menu-badge">
                                                                            <div class="badge vd_bg-red">5</div>
                                                                        </div>
                                                                    </a> </li>
                                                                <li class="line"></li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-lock"></i></div>
                                                                        <div class="menu-text">Privacy</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-cogs"></i></div>
                                                                        <div class="menu-text">Settings</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class="  fa fa-key"></i></div>
                                                                        <div class="menu-text">Lock</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-sign-out"></i></div>
                                                                        <div class="menu-text">Sign Out</div>
                                                                    </a> </li>
                                                                <li class="line"></li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" fa fa-question-circle"></i></div>
                                                                        <div class="menu-text">Help</div>
                                                                    </a> </li>
                                                                <li> <a href="#">
                                                                        <div class="menu-icon"><i class=" glyphicon glyphicon-bullhorn"></i></div>
                                                                        <div class="menu-text">Report a Problem</div>
                                                                    </a> </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </li>

                                            <li id="top-menu-settings" class="one-big-icon hidden-xs hidden-sm mega-li"
                                                data-intro="<strong>Toggle Right Navigation </strong><br/>On smaller device such as tablet or phone you can click on the middle content to close the right or left navigation."
                                                data-step="2" data-position="left">
                                                <a href="#" class="mega-link" data-action="toggle-navbar-right">
                                                    <span class="mega-icon">
                                                        <i class="fa fa-comments"></i>
                                                    </span>
                                                    <!--<span  class="mega-image"><img src="{{asset('assets/img/avatar/avatar.jpg')}}" alt="example image" /></span> -->
                                                    <span class="badge vd_bg-red">8</span>
                                                </a>

                                            </li>
                                        </ul>
                                        <!-- Head menu search form ends -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- container -->
            </div>
            <!-- vd_primary-menu-wrapper -->

        </header>
        <!-- Header Ends -->
        <div class="content">
            <div class="container">
                <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
                    <div class="navbar-tabs-menu clearfix">
                        <span class="expand-menu" data-action="expand-navbar-tabs-menu">
                            <span class="menu-icon menu-icon-left">
                                <i class="fa fa-ellipsis-h"></i>
                                <span class="badge vd_bg-red">
                                    20
                                </span>
                            </span>
                            <span class="menu-icon menu-icon-right">
                                <i class="fa fa-ellipsis-h"></i>
                                <span class="badge vd_bg-red">
                                    20
                                </span>
                            </span>
                        </span>
                        <div class="menu-container">
                            <div class="vd_mega-menu-wrapper">
                                <div class="vd_mega-menu" data-intro="<strong>Tabs Menu</strong><br/>Can be placed for dropdown menu, tabs, or user profile. Responsive for medium and small size navigation."
                                    data-step="3">
                                    <ul class="mega-ul">
                                        <li id="home" class="one-icon mega-li">
                                            <a class="mega-link  vd_bg-blue" href="javascript:void(0);" data-action="click-trigger">
                                                <span class="mega-icon">
                                                    <i class="fa fa-cloud"></i>
                                                </span>
                                                <span class="badge vd_bg-red">
                                                    10
                                                </span>
                                            </a>
                                            <div class="vd_mega-menu-content width-xs-3 width-sm-5 width-md-6   right-xs "
                                                data-action="click-target" style="display: none;">
                                                <div class="child-menu">
                                                    <div class="title">
                                                        Server Status
                                                        <div class="vd_panel-menu">
                                                            <span data-original-title="Find Server" data-toggle="tooltip"
                                                                data-placement="bottom" class="menu">
                                                                <i class="fa fa-search"></i>
                                                            </span>
                                                            <span data-original-title="Message Setting" data-toggle="tooltip"
                                                                data-placement="bottom" class="menu">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="content-grid column-md-3 column-sm-2 column-xs-1 height-xs-auto height-sm-4">
                                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_4" style="overflow: hidden;">
                                                            <div class="mCustomScrollBox mCS-light" id="mCSB_4" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                                    <ul class="list-wrapper">
                                                                        <li><a>
                                                                                <div class="menu-icon">
                                                                                    <i class="fa fa-cloud"></i>
                                                                                </div>
                                                                                <div class="menu-text"> Venmond.com
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date vd_bg-green badge">Online</span>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">Disk
                                                                                                Usage</span>
                                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:15%"
                                                                                                    class="progress-bar progress-bar-info">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">BW Usage</span>
                                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:65%"
                                                                                                    class="progress-bar  progress-bar-warning">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Reboot Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-refresh"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Stop Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-stop"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li> <a>
                                                                                <div class="menu-icon">
                                                                                    <i class="fa fa-cloud"></i>
                                                                                </div>
                                                                                <div class="menu-text"> Venmond.com
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date vd_bg-grey badge">Offline</span>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">Disk
                                                                                                Usage</span>
                                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:15%"
                                                                                                    class="progress-bar progress-bar-info">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">BW Usage</span>
                                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:65%"
                                                                                                    class="progress-bar  progress-bar-warning">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Reboot Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-refresh"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Stop Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-stop"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li> <a>
                                                                                <div class="menu-icon">
                                                                                    <i class="fa fa-cloud"></i>
                                                                                </div>
                                                                                <div class="menu-text"> Venmond.com
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date vd_bg-grey badge">Offline</span>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">Disk
                                                                                                Usage</span>
                                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:15%"
                                                                                                    class="progress-bar progress-bar-info">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">BW Usage</span>
                                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:65%"
                                                                                                    class="progress-bar  progress-bar-warning">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Reboot Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-refresh"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Stop Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-stop"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>
                                                                        <li><a>
                                                                                <div class="menu-icon">
                                                                                    <i class="fa fa-cloud"></i>
                                                                                </div>
                                                                                <div class="menu-text"> Venmond.com
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date vd_bg-grey badge">Offline</span>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">Disk
                                                                                                Usage</span>
                                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:15%"
                                                                                                    class="progress-bar progress-bar-info">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="menu-status  text-left">
                                                                                            <span class="text">BW Usage</span>
                                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                                GB</span>
                                                                                        </div>
                                                                                        <div class="menu-info">
                                                                                            <div class="progress">
                                                                                                <div style="width:65%"
                                                                                                    class="progress-bar  progress-bar-warning">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                                data-original-title="Reboot Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-refresh"></i>
                                                                                            </span>
                                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                                data-original-title="Stop Server"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-stop"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </a></li>

                                                                    </ul>
                                                                </div>
                                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                                            oncontextmenu="return false;">
                                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div> <!-- data-rel="scroll" -->
                                                        <div class="closing text-center" style="">
                                                            <a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- child-menu -->
                                            </div> <!-- vd_mega-menu-content -->
                                        </li>
                                        <li id="tabs-menu-tasks" class="one-icon mega-li">
                                            <a class="mega-link  vd_bg-green" href="javascript:void(0);" data-action="click-trigger">
                                                <span class="mega-icon">
                                                    <i class="fa fa-tasks"></i>
                                                </span>
                                                <span class="badge vd_bg-red">
                                                    8
                                                </span>
                                            </a>
                                            <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 right-xs"
                                                data-action="click-target" style="display: none;">
                                                <div class="child-menu">
                                                    <div class="title">
                                                        You have 8 pending tasks
                                                        <div class="vd_panel-menu">
                                                            <span data-original-title="Task Setting" data-toggle="tooltip"
                                                                data-placement="bottom" class="menu">
                                                                <i class="fa fa-cog"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="content-list content-image">
                                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_5" style="overflow: hidden;">
                                                            <div class="mCustomScrollBox mCS-light" id="mCSB_5" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                                    <ul class="list-wrapper pd-lr-10">
                                                                        <li> <a href="#">
                                                                                <div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div>
                                                                                <div class="menu-text"> Electricity
                                                                                    Problem
                                                                                    <div class="menu-info">
                                                                                        <div class="progress progress-sm">
                                                                                            <div style="width:85%"
                                                                                                class="progress-bar progress-bar-info">
                                                                                                85%
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="#">
                                                                                <div class="menu-icon vd_yellow"><i
                                                                                        class="fa fa-code"></i></div>
                                                                                <div class="menu-text"> Finish coding
                                                                                    jquery plugin
                                                                                    <div class="menu-info">
                                                                                        <div class="progress progress-sm">
                                                                                            <div style="width:20%"
                                                                                                class="progress-bar progress-bar-danger">
                                                                                                20%
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-3.jpg')}}"></div>
                                                                                <div class="menu-text"> Client: Zoe
                                                                                    Project
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">Make a
                                                                                            call</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Call"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-phone"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="#">
                                                                                <div class="menu-icon"><i class=" fa fa-magic"></i></div>
                                                                                <div class="menu-text"> Final error
                                                                                    check on new templates
                                                                                    <div class="menu-info">
                                                                                        <div class="progress progress-sm">
                                                                                            <div style="width:95%"
                                                                                                class="progress-bar progress-bar-success">
                                                                                                95%
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="#">
                                                                                <div class="menu-icon vd_green"><i
                                                                                        class=" fa fa-camera"></i></div>
                                                                                <div class="menu-text"> Update product
                                                                                    image
                                                                                    <div class="menu-info">
                                                                                        <div class="progress progress-sm">
                                                                                            <div style="width:50%"
                                                                                                class="progress-bar progress-bar-warning">
                                                                                                50%
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="#">
                                                                                <div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div>
                                                                                <div class="menu-text"> Electricity
                                                                                    Problem
                                                                                    <div class="menu-info">
                                                                                        <div class="progress progress-sm">
                                                                                            <div style="width:85%"
                                                                                                class="progress-bar progress-bar-info">
                                                                                                85%
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a href="#">
                                                                                <div class="menu-icon vd_yellow"><i
                                                                                        class=" fa fa-code"></i></div>
                                                                                <div class="menu-text"> Finish coding
                                                                                    jquery plugin
                                                                                    <div class="menu-info">
                                                                                        <div class="progress progress-sm">
                                                                                            <div style="width:20%"
                                                                                                class="progress-bar progress-bar-danger">
                                                                                                20%
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>
                                                                        <li> <a>
                                                                                <div class="menu-icon"><img alt="example image"
                                                                                        src="{{asset('assets/img/avatar/avatar-3.jpg')}}"></div>
                                                                                <div class="menu-text"> Client: Zoe
                                                                                    Project
                                                                                    <div class="menu-info">
                                                                                        <span class="menu-date">Make a
                                                                                            call</span>
                                                                                        <span class="menu-action">
                                                                                            <span class="menu-action-icon"
                                                                                                data-original-title="Call"
                                                                                                data-toggle="tooltip"
                                                                                                data-placement="bottom">
                                                                                                <i class="fa fa-phone"></i>
                                                                                            </span>
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </a> </li>


                                                                    </ul>
                                                                </div>
                                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                                    <div class="mCSB_draggerContainer">
                                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                                            oncontextmenu="return false;">
                                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                                        </div>
                                                                        <div class="mCSB_draggerRail"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="closing text-center" style="">
                                                            <a href="#">See All Tasks <i class="fa fa-angle-double-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div> <!-- child-menu -->
                                            </div> <!-- vd_mega-menu-content -->
                                        </li>
                                        <li id="test-2" class="one-icon mega-li">
                                            <a class="mega-link vd_bg-yellow" href="javascript:void(0);" data-action="click-trigger">
                                                <span class="mega-icon">
                                                    <i class="fa fa-pencil"></i>
                                                </span>
                                            </a>
                                            <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-5 center-xs-3 right-sm pd-0"
                                                data-action="click-target" style="display: none;">
                                                <div class="child-menu">

                                                    <textarea class="no-bd" rows="3" placeholder="What are you doing?"></textarea>
                                                    <div class="vd_textarea-menu vd_bg-yellow vd_bd-yellow">
                                                        <ul class="nav nav-pills ">
                                                            <li class="one-icon">
                                                                <a data-toggle="tab-post" href="javascript:void(0);">
                                                                    <span class="menu-icon">
                                                                        <i class="fa fa-user fa-fw"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="one-icon">
                                                                <a data-toggle="tab-post" href="javascript:void(0);">
                                                                    <span class="menu-icon">
                                                                        <i class="fa fa-camera fa-fw"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="one-icon">
                                                                <a data-toggle="tab-post" href="javascript:void(0);">
                                                                    <span class="menu-icon">
                                                                        <i class="fa fa-smile-o fa-fw"></i>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="pull-right">
                                                                <a data-toggle="tab-post" href="javascript:void(0);"
                                                                    style="border-left:1px solid rgba(255,255,255,.3)">
                                                                    <span class="menu-icon">
                                                                        <i class="fa fa-check fa-fw"></i>
                                                                    </span>
                                                                    <span class="menu-text">
                                                                        Post
                                                                    </span>
                                                                </a>
                                                            </li>

                                                        </ul>

                                                    </div>

                                                </div> <!-- child-menu -->
                                            </div> <!-- vd_mega-menu-content -->

                                        </li>
                                        <li id="test" class="one-icon mega-li">
                                            <a class="mega-link vd_bg-red" href="javascript:void(0);" data-action="click-trigger">
                                                <span class="mega-icon">
                                                    <i class="fa fa-plus"></i>
                                                </span>
                                            </a>
                                            <div class="vd_mega-menu-content  width-xs-2  center-xs-2" data-action="click-target"
                                                style="display: none;">
                                                <div class="child-menu">
                                                    <div class="content-list content-menu">
                                                        <ul class="list-wrapper pd-lr-10">
                                                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-user"></i></span>
                                                                    <span class="menu-text">Write Article</span> </a>
                                                            </li>
                                                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-trophy"></i></span>
                                                                    <span class="menu-text">Write News</span> </a> </li>
                                                            <li> <a href="#"> <span class="menu-icon"><i class=" fa fa-flask"></i></span>
                                                                    <span class="menu-text">Add Product</span> </a>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div> <!-- vd_mega-menu-content  -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-menu clearfix">
                        <div class="vd_panel-menu hidden-xs">
                            <span data-original-title="Expand All" data-toggle="tooltip" data-placement="bottom"
                                data-action="expand-all" class="menu" data-intro="<strong>Expand Button</strong><br/>To expand all menu on left navigation menu."
                                data-step="4">
                                <i class="fa fa-sort-amount-asc"></i>
                            </span>
                        </div>
                        <h3 class="menu-title hide-nav-medium hide-nav-small">UI Features</h3>
                        <div class="vd_menu">
                            <ul>

                                <li>
                                    <a href="javascript:void(0);" id="dashboard">
                                        <span class="menu-icon"><i class="fa fa-dashboard"></i></span>
                                        <span class="menu-text">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" id="profile">
                                        <span class="menu-icon"><i class="fa fa-user"></i></span>
                                        <span class="menu-text">Profile</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:void(0);" data-action="click-trigger">
                                        <span class="menu-icon"><i class="icon-palette"> </i></span>
                                        <span class="menu-text">Skin Playground</span>
                                        <span class="menu-badge"><span class="badge vd_bg-black-30"><i class="fa fa-angle-down"></i></span></span>
                                    </a>
                                    <div class="child-menu" data-action="click-target" style="display: none;">
                                        <ul>
                                            <li>
                                                <a href="skin-clean-minimalist.html">
                                                    <span class="menu-text">Clean Minimalist Nav</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="skin-nav-medium-profile-dark.html">
                                                    <span class="menu-text">Dark Medium Navbar</span>
                                                    <span class="menu-badge"><span class="badge vd_bg-red">Hot</span></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                            </ul>
                            <!-- Head menu search form ends -->
                        </div>
                    </div>
                    <div class="navbar-spacing clearfix">
                    </div>
                    <div class="vd_menu vd_navbar-bottom-widget">
                        <ul>
                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>
                                    <span class="menu-text">Logout</span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
                    <div class="navbar-tabs-menu clearfix">
                        <span class="expand-menu" data-action="expand-navbar-tabs-menu">
                            <span class="menu-icon menu-icon-left">
                                <i class="fa fa-ellipsis-h"></i>
                                <span class="badge vd_bg-red">
                                    20
                                </span>
                            </span>
                            <span class="menu-icon menu-icon-right">
                                <i class="fa fa-ellipsis-h"></i>
                                <span class="badge vd_bg-red">
                                    20
                                </span>
                            </span>
                        </span>
                        <div class="menu-container">
                            <div class="navbar-search-wrapper">
                                <div class="navbar-search vd_bg-black-30">
                                    <span class="append-icon"><i class="fa fa-search"></i></span>
                                    <input type="text" placeholder="Search" class="vd_menu-search-text no-bg no-bd vd_white width-70"
                                        name="search">
                                    <div class="pull-right search-config">
                                        <a data-toggle="dropdown" href="javascript:void(0);" class="dropdown-toggle"><span
                                                class="prepend-icon vd_grey"><i class="fa fa-cog"></i></span></a>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Separated link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="navbar-menu clearfix">
                        <div class="content-list content-image content-chat">
                            <ul class="list-wrapper no-bd-btm pd-lr-10">
                                <li class="group-heading vd_bg-black-20">FAVORITE</li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar.jpg')}}" alt="example image"></div>
                                        <div class="menu-text">Jessylin
                                            <div class="menu-info">
                                                <span class="menu-date">Administrator </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-2.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Rodney Mc.Cardo
                                            <div class="menu-info">
                                                <span class="menu-date">Designer </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-3.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Theresia Minoque
                                            <div class="menu-info">
                                                <span class="menu-date">Engineering </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                    </a>
                                </li>
                                <li class="group-heading vd_bg-black-20">FRIENDS</li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-4.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Greg Grog
                                            <div class="menu-info">
                                                <span class="menu-date">Developer </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-5.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Stefanie Imburgh
                                            <div class="menu-info">
                                                <span class="menu-date">Dancer</span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-6.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Matt Demon
                                            <div class="menu-info">
                                                <span class="menu-date">Musician </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="vd_grey font-sm"><i class="fa fa-mobile"></i></span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-7.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Jeniffer Anastasia
                                            <div class="menu-info">
                                                <span class="menu-date">Senior Developer </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-8.jpg')}}"
                                                alt="example image"></div>
                                        <div class="menu-text">Daniel Dreamon
                                            <div class="menu-info">
                                                <span class="menu-date">Sales Executive </span>
                                            </div>
                                        </div>
                                        <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                    </a>
                                </li>

                            </ul>
                        </div>


                    </div>
                    <div class="navbar-spacing clearfix">
                    </div>
                </div>
                <!-- Middle Content Start -->

                <div class="vd_content-wrapper" id="vd_content-wrapper">
                    @include('backend.dashboard.index')
                </div>
                <!-- .vd_content-wrapper -->

                <!-- Middle Content End -->



            </div>
        </div>
        <!-- Footer Start -->
        <footer class="footer-1" id="footer">
            <div class="vd_bottom ">
                <div class="container">
                    <div class="row">
                        <div class=" col-xs-12">
                            <div class="copyright">
                                Copyright ©2014 Venmond Inc. All Rights Reserved
                            </div>
                        </div>
                    </div><!-- row -->
                </div><!-- container -->
            </div>
        </footer>
        <!-- Footer END -->
        <div class="vd_chat-menu hidden-xs">
            <div class="vd_mega-menu-wrapper">
                <div class="vd_mega-menu">
                    <ul class="mega-ul">
                        <li class="one-icon mega-li mgl-10">
                            <a class="mega-link vd_bg-green" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                    <i class="fa fa-cloud"></i>
                                </span>
                                <span class="badge vd_bg-red">
                                    10
                                </span>
                            </a>
                            <div class="vd_mega-menu-content width-xs-3 width-sm-5 width-md-6  center-xs-6 open-top"
                                data-action="click-target" style="display: none;">
                                <div class="child-menu">
                                    <div class="title">
                                        Server Status
                                        <div class="vd_panel-menu">
                                            <span data-original-title="Find Server" data-toggle="tooltip"
                                                data-placement="bottom" class="menu">
                                                <i class="fa fa-search"></i>
                                            </span>
                                            <span data-original-title="Message Setting" data-toggle="tooltip"
                                                data-placement="bottom" class="menu">
                                                <i class="fa fa-cog"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="content-grid column-md-3 column-sm-2 column-xs-1 height-xs-auto height-sm-4">
                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_9" style="overflow: hidden;">
                                            <div class="mCustomScrollBox mCS-light" id="mCSB_9" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                    <ul class="list-wrapper">
                                                        <li><a>
                                                                <div class="menu-icon">
                                                                    <i class="fa fa-cloud"></i>
                                                                </div>
                                                                <div class="menu-text"> Venmond.com
                                                                    <div class="menu-info">
                                                                        <span class="menu-date vd_bg-green badge">Online</span>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">Disk Usage</span>
                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:15%" class="progress-bar progress-bar-info">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">BW Usage</span>
                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:65%" class="progress-bar  progress-bar-warning">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="menu-action">
                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                data-original-title="Reboot Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-refresh"></i>
                                                                            </span>
                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                data-original-title="Stop Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-stop"></i>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li> <a>
                                                                <div class="menu-icon">
                                                                    <i class="fa fa-cloud"></i>
                                                                </div>
                                                                <div class="menu-text"> Venmond.com
                                                                    <div class="menu-info">
                                                                        <span class="menu-date vd_bg-grey badge">Offline</span>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">Disk Usage</span>
                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:15%" class="progress-bar progress-bar-info">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">BW Usage</span>
                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:65%" class="progress-bar  progress-bar-warning">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="menu-action">
                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                data-original-title="Reboot Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-refresh"></i>
                                                                            </span>
                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                data-original-title="Stop Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-stop"></i>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li> <a>
                                                                <div class="menu-icon">
                                                                    <i class="fa fa-cloud"></i>
                                                                </div>
                                                                <div class="menu-text"> Venmond.com
                                                                    <div class="menu-info">
                                                                        <span class="menu-date vd_bg-grey badge">Offline</span>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">Disk Usage</span>
                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:15%" class="progress-bar progress-bar-info">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">BW Usage</span>

                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:65%" class="progress-bar  progress-bar-warning">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="menu-action">
                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                data-original-title="Reboot Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-refresh"></i>
                                                                            </span>
                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                data-original-title="Stop Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-stop"></i>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a></li>
                                                        <li><a>
                                                                <div class="menu-icon">
                                                                    <i class="fa fa-cloud"></i>
                                                                </div>
                                                                <div class="menu-text"> Venmond.com
                                                                    <div class="menu-info">
                                                                        <span class="menu-date vd_bg-grey badge">Offline</span>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">Disk Usage</span>
                                                                            <span class="value pull-right vd_black">4.35/140
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:15%" class="progress-bar progress-bar-info">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="menu-status  text-left">
                                                                            <span class="text">BW Usage</span>
                                                                            <span class="value pull-right vd_black">1600/2500
                                                                                GB</span>
                                                                        </div>
                                                                        <div class="menu-info">
                                                                            <div class="progress">
                                                                                <div style="width:65%" class="progress-bar  progress-bar-warning">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <span class="menu-action">
                                                                            <span class="menu-action-icon vd_green vd_bd-green"
                                                                                data-original-title="Reboot Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-refresh"></i>
                                                                            </span>
                                                                            <span class="menu-action-icon vd_red vd_bd-red"
                                                                                data-original-title="Stop Server"
                                                                                data-toggle="tooltip" data-placement="bottom">
                                                                                <i class="fa fa-stop"></i>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a></li>

                                                    </ul>
                                                </div>
                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                            oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- data-rel="scroll" -->
                                        <div class="closing text-center" style="">
                                            <a href="#">See All Requests <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- child-menu -->
                            </div> <!-- vd_mega-menu-content -->
                        </li>
                        <li class="one-big-icon mega-li mgl-10">
                            <a class="mega-link" href="javascript:void(0);" data-action="click-trigger">
                                <span class="mega-icon">
                                    <i class="fa fa-tasks"></i>
                                </span>
                                <span class="badge vd_bg-red">
                                    8
                                </span>
                            </a>
                            <div class="vd_mega-menu-content width-xs-3 width-sm-4 width-md-4 center-xs-4 open-top"
                                data-action="click-target" style="display: none;">
                                <div class="child-menu">
                                    <div class="title">
                                        You have 8 pending tasks
                                        <div class="vd_panel-menu">
                                            <span data-original-title="Task Setting" data-toggle="tooltip"
                                                data-placement="bottom" class="menu">
                                                <i class="fa fa-cog"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="content-list content-image">
                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_10" style="overflow: hidden;">
                                            <div class="mCustomScrollBox mCS-light" id="mCSB_10" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                    <ul class="list-wrapper pd-lr-10">
                                                        <li> <a href="#">
                                                                <div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div>
                                                                <div class="menu-text"> Electricity Problem
                                                                    <div class="menu-info">
                                                                        <div class="progress progress-sm">
                                                                            <div style="width:85%" class="progress-bar progress-bar-info">
                                                                                85%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon vd_yellow"><i class="fa fa-code"></i></div>
                                                                <div class="menu-text"> Finish coding jquery plugin
                                                                    <div class="menu-info">
                                                                        <div class="progress progress-sm">
                                                                            <div style="width:20%" class="progress-bar progress-bar-danger">
                                                                                20%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a>
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-3.jpg')}}"></div>
                                                                <div class="menu-text"> Client: Zoe Project
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Make a call</span>
                                                                        <span class="menu-action">
                                                                            <span class="menu-action-icon"
                                                                                data-original-title="Call" data-toggle="tooltip"
                                                                                data-placement="bottom">
                                                                                <i class="fa fa-phone"></i>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><i class=" fa fa-magic"></i></div>
                                                                <div class="menu-text"> Final error check on new
                                                                    templates
                                                                    <div class="menu-info">
                                                                        <div class="progress progress-sm">
                                                                            <div style="width:95%" class="progress-bar progress-bar-success">
                                                                                95%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon vd_green"><i class=" fa fa-camera"></i></div>
                                                                <div class="menu-text"> Update product image
                                                                    <div class="menu-info">
                                                                        <div class="progress progress-sm">
                                                                            <div style="width:50%" class="progress-bar progress-bar-warning">
                                                                                50%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon vd_blue"><i class="fa fa-bolt"></i></div>
                                                                <div class="menu-text"> Electricity Problem
                                                                    <div class="menu-info">
                                                                        <div class="progress progress-sm">
                                                                            <div style="width:85%" class="progress-bar progress-bar-info">
                                                                                85%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon vd_yellow"><i class=" fa fa-code"></i></div>
                                                                <div class="menu-text"> Finish coding jquery plugin
                                                                    <div class="menu-info">
                                                                        <div class="progress progress-sm">
                                                                            <div style="width:20%" class="progress-bar progress-bar-danger">
                                                                                20%
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a>
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-3.jpg')}}"></div>
                                                                <div class="menu-text"> Client: Zoe Project
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Make a call</span>
                                                                        <span class="menu-action">
                                                                            <span class="menu-action-icon"
                                                                                data-original-title="Call" data-toggle="tooltip"
                                                                                data-placement="bottom">
                                                                                <i class="fa fa-phone"></i>
                                                                            </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>


                                                    </ul>
                                                </div>
                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                            oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="closing text-center" style="">
                                            <a href="#">See All Tasks <i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div> <!-- child-menu -->
                            </div> <!-- vd_mega-menu-content -->
                        </li>
                        <li class="one-big-icon mega-li mgl-10">
                            <a href="index-2.html" class="mega-link" data-action="click-trigger">
                                <span class="mega-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></span>
                                <span class="badge vd_bg-red">10</span>
                            </a>
                            <div class="vd_mega-menu-content  open-top width-xs-4 width-md-5 width-lg-4 center-xs-4"
                                data-action="click-target" style="display: none;">
                                <div class="child-menu">
                                    <div class="title">
                                        Jessyline <i>(online)</i>
                                        <div class="vd_panel-menu">
                                            <div data-rel="tooltip" data-original-title="Make a Call" class="menu entypo-icon smaller-font">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div data-rel="tooltip" data-original-title="Video Call" class="menu">
                                                <i class="fa fa-video-camera"></i>
                                            </div>
                                            <div data-rel="tooltip" data-original-title="Message Setting" class="menu smaller-font entypo-icon">
                                                <i class="icon-cog"></i>
                                            </div>
                                            <div data-rel="tooltip" data-original-title="Close" class="menu entypo-icon">
                                                <i class="icon-cross"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-list content-image content-menu">
                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_11" style="overflow: hidden;">
                                            <div class="mCustomScrollBox mCS-light" id="mCSB_11" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                    <ul class="list-wrapper pd-lr-10">
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> Do you play or follow any
                                                                    sports?
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">12 Minutes Ago </span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Good job mate !
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">1 Hour 20 Minutes Ago
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> Just calm down babe, everything
                                                                    will work out.
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">12 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Euuh so gross....
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">19 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> That's the way.. I like it :D
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">20 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Oooh don't be shy ;P
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">21 Days Ago</span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> Hello, please call my number..
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">24 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Don't go anywhere, i will be
                                                                    coming soon
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">1 Month 2 days Ago</span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>

                                                    </ul>
                                                </div>
                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                            oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="closing chat-area">
                                            <div class="chat-box">
                                                <input type="text" placeholder="chat here..">
                                            </div>
                                            <div class="vd_panel-menu">
                                                <div data-rel="tooltip" data-original-title="Insert Picture" class="menu">
                                                    <i class="icon-camera"></i>
                                                </div>
                                                <div data-rel="tooltip" data-original-title="Emoticons" class="menu">
                                                    <i class="fa fa-smile-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- child-menu -->
                            </div> <!-- vd_mega-menu-content -->
                        </li>
                        <li class="one-big-icon mega-li mgl-10">
                            <a href="index-2.html" class="mega-link" data-action="click-trigger">
                                <span class="mega-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-10.jpg')}}"></span>
                                <span class="badge vd_bg-red">3</span>
                            </a>
                            <div class="vd_mega-menu-content  open-top width-xs-4 width-md-5 width-lg-4 center-xs-4"
                                data-action="click-target" style="display: none;">
                                <div class="child-menu">
                                    <div class="title">
                                        Jessyline <i>(online)</i>
                                        <div class="vd_panel-menu">
                                            <div data-rel="tooltip" data-original-title="Make a Call" class="menu entypo-icon smaller-font">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div data-rel="tooltip" data-original-title="Video Call" class="menu">
                                                <i class="fa fa-video-camera"></i>
                                            </div>
                                            <div data-rel="tooltip" data-original-title="Message Setting" class="menu smaller-font entypo-icon">
                                                <i class="icon-cog"></i>
                                            </div>
                                            <div data-rel="tooltip" data-original-title="Close" class="menu entypo-icon">
                                                <i class="icon-cross"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content-list content-image content-menu">
                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_12" style="overflow: hidden;">
                                            <div class="mCustomScrollBox mCS-light" id="mCSB_12" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                    <ul class="list-wrapper pd-lr-10">
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> Do you play or follow any
                                                                    sports?
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">12 Minutes Ago </span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Good job mate !
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">1 Hour 20 Minutes Ago
                                                                        </span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> Just calm down babe, everything
                                                                    will work out.
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">12 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Euuh so gross....
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">19 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> That's the way.. I like it :D
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">20 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Oooh don't be shy ;P
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">21 Days Ago</span>
                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar.jpg')}}"></div>
                                                                <div class="menu-text"> Hello, please call my number..
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">24 Days Ago</span>

                                                                    </div>
                                                                </div>
                                                            </a> </li>
                                                        <li class="align-right"> <a href="#">
                                                                <div class="menu-icon"><img alt="example image" src="{{asset('assets/img/avatar/avatar-2.jpg')}}"></div>
                                                                <div class="menu-text"> Don't go anywhere, i will be
                                                                    coming soon
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">1 Month 2 days Ago</span>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                            oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="closing chat-area">
                                            <div class="chat-box">
                                                <input type="text" placeholder="chat here..">
                                            </div>
                                            <div class="vd_panel-menu">
                                                <div data-rel="tooltip" data-original-title="Insert Picture" class="menu">
                                                    <i class="icon-camera"></i>
                                                </div>
                                                <div data-rel="tooltip" data-original-title="Emoticons" class="menu">
                                                    <i class="fa fa-smile-o"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- child-menu -->
                            </div> <!-- vd_mega-menu-content -->
                        </li>

                        <li class="profile mega-li pdlr-15 bordered">
                            <a class="mega-link" href="#" data-action="click-trigger">
                                <span class="menu-name">
                                    <i class="fa fa-comments append-icon"></i> Chat
                                </span>
                            </a>
                            <div class="vd_mega-menu-content  width-xs-3  center-xs-3 open-top" data-action="click-target"
                                style="display: none;">
                                <div class="child-menu">
                                    <div class="content-list  content-image">
                                        <div data-rel="scroll" class="mCustomScrollbar _mCS_13" style="overflow: hidden;">
                                            <div class="mCustomScrollBox mCS-light" id="mCSB_13" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;">
                                                <div class="mCSB_container mCS_no_scrollbar" style="position: relative; top: 0px;">
                                                    <ul class="list-wrapper pd-lr-10">
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Jessylin
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Administrator </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-2.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Rodney Mc.Cardo
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Designer </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-3.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Theresia Minoque
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Engineering </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-4.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Greg Grog
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Developer </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-grey">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-5.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Stefanie Imburgh
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Dancer</span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-6.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Matt Demon
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Musician </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-7.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Jeniffer Anastasia
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Senior Developer </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#">
                                                                <div class="menu-icon"><img src="{{asset('assets/img/avatar/avatar-8.jpg')}}"
                                                                        alt="example image"></div>
                                                                <div class="menu-text">Daniel Dreamon
                                                                    <div class="menu-info">
                                                                        <span class="menu-date">Sales Executive </span>
                                                                    </div>
                                                                </div>
                                                                <div class="menu-badge"><span class="badge status vd_bg-green">&nbsp;</span></div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                    <div class="mCSB_draggerContainer">
                                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;"
                                                            oncontextmenu="return false;">
                                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                        </div>
                                                        <div class="mCSB_draggerRail"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                        <li class="profile border-left mega-li">
                            <a class="mega-link pd-10" href="javascript:void(0);" data-action="chat-close">
                                <span class="mega-icon">
                                    <i class="fa fa-sign-out"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- Head menu search form ends -->
                </div>
            </div>
        </div>

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
    <script type="
        text/javascript" src="{{asset('assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>

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


    <script type="text/javascript">
        $(window).load(function () {

            "use strict";

            $(window).on("resize", function () {
                plot.resize();
                plot.setupGrid();
                plot.draw();
            });


            $.fn.UseTooltip = function () {
                var previousPoint = null;

                $(this).bind("plothover", function (event, pos, item) {
                    if (item) {
                        if (previousPoint != item.dataIndex) {

                            previousPoint = item.dataIndex;

                            $("#tooltip").remove();
                            var x = item.datapoint[0].toFixed(2),
                                y = item.datapoint[1].toFixed(2);

                            showTooltip(item.pageX, item.pageY,
                                "<p class='vd_bg-green'><strong class='mgr-10 mgl-10'>" + Math.round(
                                    x) + " NOV 2013 </strong></p>" +
                                "<div style='padding: 0 10px 10px;'>" +
                                "<div>" + item.series.label + ": <strong>" + Math.round(y) +
                                "</strong></div>" +
                                "<div> Profit: <strong>$" + Math.round(y) * 7 +
                                "</strong></div>" +
                                "</div>"
                            );
                        }
                    } else {
                        $("#tooltip").remove();
                        previousPoint = null;
                    }
                });
            };

            function showTooltip(x, y, contents) {
                $('<div id="tooltip">' + contents + '</div>').css({
                    position: 'absolute',
                    display: 'none',
                    top: y + 5,
                    left: x + 20,
                    size: '10',
                    //				'border-top' : '3px solid #1FAE66',
                    'background-color': '#111111',
                    color: "#FFFFFF",
                    opacity: 0.85
                }).appendTo("body").fadeIn(200);
            }
        });

        $(document).ready(function () {
            $('body').on('click', '.vd_menu>ul>li a', function (e) {
                $(".vd_menu>ul>li>a").removeClass("active");
                $(this).addClass('active');
            });
            $('body').on('click', '#dashboard', function (e) {
                $.ajax({
                    url: '{{route("dashboard")}}',
                    success: function(data) {
                        $('#vd_content-wrapper').html(data);
                    }
                });
            });
            $('body').on('click', '#profile', function (e) {
                $.ajax({
                    url: '{{route("profile")}}',
                    success: function(data) {
                        $('#vd_content-wrapper').html(data);
                    }
                });
            });
        });

        

    </script>
    <!-- Specific Page Scripts END -->




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
