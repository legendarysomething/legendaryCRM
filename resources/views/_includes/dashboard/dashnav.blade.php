{{-- Template to be used for admin pages --}}



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no.js')}}">
<!--<![endif]-->
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('pageheader')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    {{-- Favicon --}}
    <link rel="icon" href="{{asset('img/icons/favicon.ico')}}" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Fonts  -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
    <!-- CSS Sweet Alerts -->
    <link rel="stylesheet" href="{{asset('css/sweetalert2.min.css')}}">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Feature detection -->
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <!-- DataTables-->
    <link rel="stylesheet" href="{{asset('plugins/dataTables/css/dataTables.css')}}">
    {{-- For any extra header scripts --}}
    @yield('header')



    
</head>

<body>
    <section id="main-wrapper" class="theme-dark-full">
        <header id="header">
            <!--logo start-->
            <div class="brand">
                <a href="{{route('home')}}" class="logo">
                    <i class="fa fa-language"></i>&nbsp;
                    <span>J-SQU</span>ARED
                </a>
            </div>
            <!--logo end-->
            <ul class="nav navbar-nav navbar-left">
                <li class="toggle-navigation toggle-left">
                    <button class="sidebar-toggle" id="toggle-left">
                        <i class="fa fa-bars"></i>
                    </button>
                </li>
                <li class="toggle-profile hidden-xs">
                    <button type="button" class="btn btn-default" id="toggle-profile">
                        <i class="icon-user"></i>
                    </button>
                </li>

             {{--    <li class="hidden-xs">
                    <input type="text" class="search" placeholder="Search project...">
                    <button type="submit" class="btn btn-sm btn-search"><i class="fa fa-search"></i>
                    </button>
                </li> --}}

            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li class="toggle-navigation toggle-right">
                    <button class="sidebar-toggle" id="toggle-right" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out"></i>
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>


        </header>
        <!--sidebar left start-->
        <aside class="sidebar sidebar-left">
            <div class="sidebar-profile">
                <div class="avatar">
                    <img class="img-circle profile-image" src="{{Auth::user()->gravatar}}" onerror="this.onerror=null;this.src='{{asset('img/profile.jpg')}}'">
                    <i class="on border-dark animated bounceIn"></i>
                </div>
                <div class="profile-body dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4>{{ ucfirst(Auth::user()->username) }}&nbsp;<span class="caret"></span></h4></a>
                    <small class="title">Software Developer</small>
                </div>
            </div>



            {{-- Sidebar Section --}}
            <nav>
                <h5 class="sidebar-header">@lang('main.navigation')</h5>
                <ul class="nav nav-pills nav-stacked">

                    <li class=" {{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{route('home')}}" title="Home">
                            <i class="fa  fa-fw fa-home"></i> 
                            @lang('main.home')
                        </a>
                    </li>
                    

                    @role('superadministrator|administrator')
                    <li class="nav-dropdown {{ Request::is('admin/*') ? 'active open' : '' }}">
                        <a href="#" title="Admin Panel">
                            <i class="fa fa-ra"></i> Admin Panel
                        </a>
                        <ul class="nav-sub">
                            <li class="{{ (Request::is('admin/manage') || Request::is('admin/manage/*')) ? 'active' : '' }}">
                                <a href="{{route('admin.manage')}}" title="Manage Users">
                                    <i class="fa fa-users"></i> 
                                    @lang('main.manageusers')
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/test_submissions') ? 'active' : '' }}">
                                <a href="{{route('admin.test_submissions')}}" title="Manage Submissions">
                                    <i class="fa fa-clipboard"></i> 
                                    @lang('main.test_submissions')
                                    {{-- <span class="label label-primary label-circle pull-right">8</span> --}}
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endrole
                    
                    {{-- Beta --}}
                   {{--  @role('superadministrator')
                    <li>
                        <a href="{{route('home')}}" title="Knowledge Base">
                            <i class="fa fa-book"></i> 
                            @lang('main.knowledge_base')
                        </a>
                    </li>
                    @endrole
 --}}
                    
                    @role('superadministrator|administrator|applicant')
                    <li class="{{ Request::is('translationstest') ? 'active' : '' }}">
                        <a href="{{route('translationstest')}}" title="Translations Test">
                            <i class="fa fa-file-text"></i> 
                            @lang('main.translationstest')
                        </a>
                    </li>
                    @endrole

                    

                    <li class=" {{ Request::is('reportabug') ? 'active' : '' }}">
                        <a href="{{route('reportabug')}}" title="Report A Bug">
                            <i class="fa fa-bug"></i> 
                            @lang('main.reportabug')
                        </a>
                    </li>

                   

                </ul>
            </nav>
        </aside>
        <!--sidebar left end-->
        <!--main content start-->
        <section class="main-content-wrapper">
            
			{{-- Main Content --}}
			@yield('content')


        </section>
        <!--main content end-->
    </section>






    <!--/sidebar right end-->
    <!--Global JS-->
    <script src="{{asset('js/vendor/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/navgoco/jquery.navgoco.min.js')}}"></script>
    <script src="{{asset('plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('plugins/fullscreen/jquery.fullscreen-min.js')}}"></script>
    <script src="{{asset('js/src/app.js')}}"></script>
    {{-- Sweetalert --}}
    <script src="{{asset('js/sweetalert/sweetalert2.min.js')}}"></script>



    @yield('footer')

</body>

</html>

