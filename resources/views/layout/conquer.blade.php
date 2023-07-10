@can('access-permission')
    <!DOCTYPE html>
    <!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
    <!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
    <!--[if !IE]><!-->
    <html lang="en" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Conquer | Admin Dashboard Template</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="MobileOptimized" content="320">
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
        <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet"
            type="text/css" />
        <link href="{{ asset('assets/plugins/jqvmap/jqvmap/jqvmap.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGIN STYLES -->
        <!-- BEGIN THEME STYLES -->
        <link href="{{ asset('assets/css/style-conquer.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/pages/tasks.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <!-- END THEME STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->

    <body class="page-header-fixed">
        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="header-inner">
                <!-- BEGIN LOGO -->
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <img src="{{ asset('assets/img/menu-toggler.png') }}" alt="" />
                </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN TODO DROPDOWN -->
                    <li class="dropdown" id="header_task_bar">
                        <a href="/home">
                            <i class="icon-home"></i>
                        </a>
                    </li>
                    <!-- END TODO DROPDOWN -->
                    <li class="devider">
                        &nbsp;
                    </li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" src="{{ asset('assets/img/avatar3_small.jpg') }}"/>
        <span class="username username-hide-on-mobile">Nick </span>
        <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
         <li>
          <a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
         </li>
         <li>
          <a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
         </li>
         <li>
          <a href="page_inbox.html"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
          3 </span>
          </a>
         </li>
         <li>
          <a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
          7 </span>
          </a>
         </li>
         <li class="divider">
         </li>
         <li>
          <a href="login.html"><i class="fa fa-key"></i> Log Out</a>
         </li>
        </ul>
       </li> -->
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <div class="clearfix">
        </div>
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
                    <ul class="page-sidebar-menu">
                        <li class="sidebar-toggler-wrapper">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                            </div>
                            <div class="clearfix">
                            </div>
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                        </li>
                        <li class="sidebar-search-wrapper">
                            <form class="search-form" role="form" action="index.html" method="get">
                                <div class="input-icon right">
                                    <i class="icon-magnifier"></i>
                                    <input type="text" class="form-control" name="query" placeholder="Search...">
                                </div>
                            </form>
                        </li>
                        {{-- <li class="start active ">
                        <a href="{{ route('categories.index') }}">
                            <i class="icon-home"></i>
                            <span class="title">Category</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('products.index') }}">
                            <i class="icon-puzzle"></i>
                            <span class="title">Product</span>
                            <span class="selected "></span>
                        </a>
                    <li>
                        <a href="{{ route('suppliers.index') }}">
                            <i class="icon-present"></i>
                            <span class="title">Supplier</span>
                            <span class="selected "></span>
                        </a>

                    </li> --}}
                        <li>
                            <a href="{{ route('products.index') }}">
                                <i class="icon-calendar"></i>
                                <span class="title">Product</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/products">
                                        Product List</a>
                                    @can('access-permission')
                                        <a href="/products/create">
                                            Add Product</a>
                                    @endcan
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('brands.index') }}">
                                <i class="icon-docs"></i>
                                <span class="title">Brand</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/brands">
                                        Brands List</a>
                                    @can('access-permission')
                                        <a href="/brands/create">
                                            Add Brand</a>
                                    @endcan
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/category">
                                <i class="icon-docs"></i>
                                <span class="title">Category</span>
                                <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="/categories">
                                        Category List</a>
                                </li>
                                <li>
                                    <a href="/categories/create">
                                        Add Category</a>
                                </li>
                            </ul>
                        <li class="last ">
                            <a href="/home">
                                <i class="icon-user"></i>
                                <span class="title">Home</span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <div class="page-content">
                    @yield('content')
                </div>
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="footer">
            <div class="footer-inner">
                2013 &copy; Conquer by keenthemes.
            </div>
            <div class="footer-tools">
                <span class="go-top">
                    <i class="fa fa-angle-up"></i>
                </span>
            </div>
        </div>
        <!-- END FOOTER -->
        <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset('assets/plugins/jquery-1.11.0.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>
        <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
        <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"
            type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/jquery.vmap.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets/plugins/jquery.peity.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/jquery-knob/js/jquery.knob.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
        <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
        <script src="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript">
        </script>
        <script src="{{ asset('assets/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{ asset('assets/scripts/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/scripts/index.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/scripts/tasks.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script>
            jQuery(document).ready(function() {
                App.init(); // initlayout and core plugins
                Index.init();
                Index.initJQVMAP(); // init index page's custom scripts
                Index.initCalendar(); // init index page's custom scripts
                Index.initCharts(); // init index page's custom scripts
                Index.initChat();
                Index.initMiniCharts();
                Index.initPeityElements();
                Index.initKnowElements();
                Index.initDashboardDaterange();
                Tasks.initDashboardWidget();
            });
        </script>
        @yield('javascript')
        <!-- END JAVASCRIPTS -->
    </body>
    <!-- END BODY -->

    </html>
@endcan
