<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PURCHASE ORDER | Dashboard</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}"  type="text/css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" type="text/css" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('js/plugins/gritter/jquery.gritter.css') }}" type="text/css" rel="stylesheet">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" type="text/css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <span>
                                <img alt="image" class="img-circle" src="{{ asset('img/12s.jpg') }}" style="width: 80"px; />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong></span> 
                                    <span class="text-muted text-xs block">Directure<b class="caret"></b></span> 
                                </span> 
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            PO+
                        </div>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-user-circle-o"></i><span class="nav-label">User Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">                            
                            <li><a href="{{ url('/role') }}">Manage Role</a></li>
                            <li><a href="{{ url('/Group') }}">Manage User Group</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i><span class="nav-label">Vendor Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('/registrasi') }}">Register Vendor</a></li>
                            <li><a href="{{ url('/verifikasi') }}">Verification Vendor</a></li>
                            <li><a href="{{ url('/blacklist')  }}">Manage Black list</a></li>
                            <li><a href="{{ url('/Whitelist')  }}">Manage White list</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/monitoring') }}"><i class="fa fa-laptop"></i><span class="nav-label">Vendor Monitoring</span></a></li>
                    <li>
                        <a href="#"><i class="fa fa-file-text"></i><span class="nav-label">Order Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('/inisiasi') }}">Inisiation</a></li>
                            <li><a href="{{ url('/planning') }}">Planning</a></li>
                            <li><a href="{{ url('/executing')  }}">Executing</a></li>
                            <li><a href="{{ url('/closing')  }}">Closing</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-book"></i><span class="nav-label">Catalog Management</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('/Aproval') }}">Approval</a></li>
                            <li><a href="{{ url('/upload') }}">Upload Catalog</a></li>
                            <li><a href="{{ url('/categori')  }}">Manage Category</a></li>
                        </ul>
                    </li>
					<li>
                        <a href="#"><i class="fa fa-book"></i><span class="nav-label">Management Administratif</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('/') }}">Data Perusahaaan</a></li>
                            <li><a href="{{ url('/') }}"></a></li>
                            <li><a href="{{ url('/')  }}"></a></li>
                        </ul>
                    </li>
				</ul>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html"></form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to  our PURCHASE ORDER Admin.</span>
                        </li>
                        <li>
            				<a class="fa fa-sign-out" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                            </a>
                        </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                            </form>
                        <li>
                            <a class="right-sidebar-toggle">
                                <i class=""></i>
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row">
                 @yield('content')
            </div>
            <div class="footer">
                <div class="pull-right">
                    
                </div>
                <div>
                    <strong>Copyright</strong> Purchase Order &copy; 2018
                </div>
            </div>
          
        </div>
    </div>
    <!-- Mainly scripts -->
    <!--html-->
    <script src="{{ asset('js/jquery-3.1.1.min.js')}}"></script>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script type="text/javascript">
      var baseUrl = '<?php echo URL::to('/');?>';
    </script>
    @yield('script')

    <!-- Flot -->
    <script src="{{ asset('js/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.spline.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('js/plugins/flot/jquery.flot.pie.js') }}"></script>

    <!-- Peity -->
    <script src="{{ asset('js/plugins/peity/jquery.peity.min.js') }}"></script>
    
    <!-- Custom and plugin javascript -->
    <script src="{{ asset('js/inspinia.js') }}"></script>
    <script src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>

    <!-- jQuery UI -->
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- GITTER -->
    <script src="{{ asset('js/plugins/gritter/jquery.gritter.min.js') }}"></script>

    <!-- Sparkline -->
    <script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}"></script>

    <script src="{{ asset('js/plugins/chartJs/Chart.min.js') }}"></script>

    <!-- Toastr -->
    <script src="{{ asset('js/plugins/toastr/toastr.min.js') }}"></script>
	
    <!--// CUSTOM SCRIPT GROUP//-->
    
</body>
</html>
