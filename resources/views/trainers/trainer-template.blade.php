<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/strong.png')}}">

    <title>Dashboard</title>
    <link href="{{asset('dashboard/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:900i|Varela+Round&display=swap" rel="stylesheet"> 

</head>

<body class="fix-header">
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <a href="/" style="margin-left:20%;"><span class="shape">Shape</span></a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        {{-- <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> 
                            <a href="">
                                <i class="fa fa-search"></i>
                            </a> 
                        </form> --}}
                    </li>
                    <li>
                        @php $trainer = Auth::user(); @endphp
                        <a href="/trainer/profile" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Trainer {{ $trainer->tname }}</a>
                    </li>
                </ul>
            </div>
           
        </nav>
       
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu shape">Shape</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="/trainers" class="waves-effect"><i class="fa fa-dashboard fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                    </li>
                        @php $gid = Auth::user()->gid; @endphp             
                    @if ($gid)    
                        <li>
                            <a href="{{action('TrainerController@customers',$gid)}}" class="waves-effect"><i class="fa fa-group fa-fw" aria-hidden="true"></i>Members</a>
                        </li>
                    @endif
                    <li>
                        <a href="/trainer/dietplan" class="waves-effect"><i class="fa fa-spoon fa-fw" aria-hidden="true"></i>Diet Plans</a>
                    </li>
                    <li>
                        <a class="waves-effect" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-backward fa-fw" aria-hidden="true"></i>Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            
        </div>
     
        <footer class="footer text-center"> 2019-2020 &copy; <span style="color:#1b68e4">Shape</span> Gyms. All rights reserved. </footer>

        @yield('content')

   
    <script src="{{asset('dashboard/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('dashboard/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{asset('dashboard/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('dashboard/js/waves.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{asset('dashboard/js/custom.min.js')}}"></script>
    <script src="{{asset('dashboard/js/dashboard1.js')}}"></script>
    <script src="{{asset('dashboard/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>

</body>

</html>
