<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>مدیریت کتابخانه</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="{{asset('css/admin-theme/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin-theme/css/bootstrap-responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/admin-theme/css/stylesheet.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Le fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.html">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.html">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <![endif]-->
</head>

<body>
<header class="dark_grey">
    <!-- Header start -->
    <a href="#" class="logo_image"><span class="hidden-480">FlatPoint</span></a>
    <ul class="header_actions pull-right hidden-480 hidden-768">
        <li rel="tooltip" data-placement="bottom" title="Hide/Show main navigation"><a href="#" class="hide_navigation"><i
                        class="icon-chevron-right"></i></a>
        </li>
        <li rel="tooltip" data-placement="left" title="Change navigation color scheme"
            class="color_pick navigation_color_pick"><a class="iconic" href="#"><i class="icon-th"></i></a>
            <ul>
                <li><a class="blue" href="#"></a>
                </li>
                <li><a class="light_blue" href="#"></a>
                </li>
                <li><a class="grey" href="#"></a>
                </li>
                <li><a class="dark_grey" href="#"></a>
                </li>
                <li><a class="pink" href="#"></a>
                </li>
                <li><a class="red" href="#"></a>
                </li>
                <li><a class="orange" href="#"></a>
                </li>
                <li><a class="yellow" href="#"></a>
                </li>
                <li><a class="green" href="#"></a>
                </li>
                <li><a class="dark_green" href="#"></a>
                </li>
                <li><a class="turq" href="#"></a>
                </li>
                <li><a class="dark_turq" href="#"></a>
                </li>
                <li><a class="purple" href="#"></a>
                </li>
                <li><a class="violet" href="#"></a>
                </li>
                <li><a class="dark_blue" href="#"></a>
                </li>
                <li><a class="dark_red" href="#"></a>
                </li>
                <li><a class="brown" href="#"></a>
                </li>
                <li><a class="black" href="#"></a>
                </li>
                <a class="dark_navigation" href="#">Dark navigation</a>
            </ul>
        </li>
    </ul>
    <ul class="header_actions">
        <li rel="tooltip" data-placement="right" title="Header color scheme"
            class="color_pick header_color_pick hidden-480"><a class="iconic" href="#"><i class="icon-th"></i></a>
            <ul>
                <li><a class="blue set_color" href="#"></a>
                </li>
                <li><a class="light_blue set_color" href="#"></a>
                </li>
                <li><a class="grey set_color" href="#"></a>
                </li>
                <li><a class="dark_grey set_color" href="#"></a>
                </li>
                <li><a class="pink set_color" href="#"></a>
                </li>
                <li><a class="red set_color" href="#"></a>
                </li>
                <li><a class="orange set_color" href="#"></a>
                </li>
                <li><a class="yellow set_color" href="#"></a>
                </li>
                <li><a class="green set_color" href="#"></a>
                </li>
                <li><a class="dark_green set_color" href="#"></a>
                </li>
                <li><a class="turq set_color" href="#"></a>
                </li>
                <li><a class="dark_turq set_color" href="#"></a>
                </li>
                <li><a class="purple set_color" href="#"></a>
                </li>
                <li><a class="violet set_color" href="#"></a>
                </li>
                <li><a class="dark_blue set_color" href="#"></a>
                </li>
                <li><a class="dark_red set_color" href="#"></a>
                </li>
                <li><a class="brown set_color" href="#"></a>
                </li>
                <li><a class="black set_color" href="#"></a>
                </li>
            </ul>
        </li>
        <li><a href=""><i class="icon-signout"></i> <span class="hidden-768 hidden-480">Logout</span></a>
        </li>
        <li class="responsive_menu"><a class="iconic" href="#"><i class="icon-reorder"></i></a>
        </li>
    </ul>
</header>
<div id="main_navigation" class="dark_navigation">
    <!-- Main navigation start -->
    <div class="inner_navigation">
        <ul class="main">
            <li class="active navAct"><a class="expand" id="current" href=""><i class="icon-home"></i> Dashboard</a>
                <ul class="sub_main">
                    <li><a href="">مدیریت درخواست ها </a></li>
                    <li><a href="">مدیریت امانت داده شده ها</a></li>
                    <li><a href="">مدیریت کتاب ها </a></li>
                    <li><a href="">کتاب های تاخیری </a></li>
                    <li><a href="">مدیریت سرپرستان </a></li>
                    <li><a href="">مدیریت کاربران </a></li>
                    <li><a href="">ثبت امانت</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="content" class="sidebar">
    <!-- Content start -->
    <div class="top_bar">
        <ul class="breadcrumb">
            <li>
                <p style='color:green;font-family:tahoma,serif;text-align:center;'>

                </p>
            </li>
        </ul>
    </div>
    <div class="widgets_area">
        <div class="row-fluid">
            <div class="span12">
                <!--start part-->
                <div class="well red">
                    <div class="well-header">
                        <h5 style="font-family:'tahoma',serif;"> سیستم مدیریت کاربران</h5>
                        <ul>
                            <li class="color_pick"><a href="#"><i class="icon-th"></i></a>
                                <ul>
                                    <li><a class="blue set_color" href="#"></a>
                                    </li>
                                    <li><a class="light_blue set_color" href="#"></a>
                                    </li>
                                    <li><a class="grey set_color" href="#"></a>
                                    </li>
                                    <li><a class="pink set_color" href="#"></a>
                                    </li>
                                    <li><a class="red set_color" href="#"></a>
                                    </li>
                                    <li><a class="orange set_color" href="#"></a>
                                    </li>
                                    <li><a class="yellow set_color" href="#"></a>
                                    </li>
                                    <li><a class="green set_color" href="#"></a>
                                    </li>
                                    <li><a class="dark_green set_color" href="#"></a>
                                    </li>
                                    <li><a class="turq set_color" href="#"></a>
                                    </li>
                                    <li><a class="dark_turq set_color" href="#"></a>
                                    </li>
                                    <li><a class="purple set_color" href="#"></a>
                                    </li>
                                    <li><a class="violet set_color" href="#"></a>
                                    </li>
                                    <li><a class="dark_blue set_color" href="#"></a>
                                    </li>
                                    <li><a class="dark_red set_color" href="#"></a>
                                    </li>
                                    <li><a class="brown set_color" href="#"></a>
                                    </li>
                                    <li><a class="black set_color" href="#"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="well-content no-search">
                        @yield('Content')
                    </div>
                </div>
            </div>
        </div>
        <!--end part -->
    </div>
</div>
<!--prigramer:fardin masoudi -->
<!-- Content start -->
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('js/admin-theme/js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('js/admin-theme/js/jquery-ui-1.10.3.js')}}"></script>
<script src="{{asset('js/admin-theme/js/bootstrap.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/chosen.jquery.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.easytabs.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/flot/excanvas.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/flot/jquery.flot.orderBars.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/maps/jquery.vmap.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.autosize-min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/charCount.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.minicolors.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.tagsinput.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/footable/footable.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/footable/data-generator.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/bootstrap-datetimepicker.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.collapsible.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.inputmask.bundle.js')}}"></script>
<script src="{{asset('js/admin-theme/js/flatpoint_core.js')}}"></script>
<script src="{{asset('js/admin-theme/js/forms.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/bootstrap-fileupload.js')}}"></script>
<script src="{{asset('js/admin-theme/js/dashboard.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/maps/maps/jquery.vmap.world.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/maps/data/jquery.vmap.sampledata.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/flot/jquery.flot.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/flot/jquery.flot.selection.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.collapsible.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.mCustomScrollbar.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.mousewheel.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.uniform.min.js')}}"></script>
<script src="{{asset('js/admin-theme/js/library/jquery.sparkline.min.js')}}"></script>

</body>
</html>
