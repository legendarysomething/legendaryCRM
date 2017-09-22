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
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Fonts  -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
    <!-- CSS Animate -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- Custom styles for this theme -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <!-- Feature detection -->
    <script src="{{asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
    <!-- DataTables-->
    <link rel="stylesheet" href="{{asset('plugins/dataTables/css/dataTables.css')}}">



    
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
                    <img class="img-circle profile-image" src="{{asset('img/profile.jpg')}}" alt="profile">
                    <i class="on border-dark animated bounceIn"></i>
                </div>
                <div class="profile-body dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><h4>{{ ucfirst(Auth::user()->username) }}&nbsp;<span class="caret"></span></h4></a>
                    <small class="title">Software Developer</small>
                    <ul class="dropdown-menu animated fadeInRight" role="menu">
                        <li class="profile-progress">
                            <h5>
                                <span>80%</span>
                                <small>Profile complete</small>
                            </h5>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-primary" style="width: 80%">
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-user"></i>
                                </span>My Account</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-envelope"></i>
                                </span>Messages</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="icon"><i class="fa fa-cog"></i>
                                </span>Settings</a>
                        </li>
                        {{-- <li class="divider"></li>
                        <li>
                           
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                <span class="icon"><i class="fa fa-sign-out"></i></span>Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>

                        </li> --}}
                    </ul>
                </div>
            </div>
            <nav>
                <h5 class="sidebar-header">@lang('main.navigation')</h5>
                <ul class="nav nav-pills nav-stacked">
                    <li class=" {{ Request::is('home') ? 'active' : '' }}">
                        <a href="{{route('home')}}" title="Dashboard">
                            <i class="fa  fa-fw fa-tachometer"></i> 
                            @lang('main.dashboard')
                        </a>
                    </li>
                    

                    @role('superadministrator|administrator')
                    <li class="{{ Request::is('admin/manage') ? 'active' : '' }}">
                        <a href="{{route('admin.manage')}}" title="Manage Users">
                            <i class="fa fa-users"></i> 
                            @lang('main.manageusers')
                        </a>
                    </li>
                    @endrole
                    

                    @role('superadministrator|administrator|applicant')
                    <li class="{{ Request::is('translationstest') ? 'active' : '' }}">
                        <a href="{{route('translationstest')}}" title="Translations Test">
                            <i class="fa fa-file-text"></i> 
                            @lang('main.translationstest')
                        </a>
                    </li>
                    @endrole


                    {{-- <li class="nav-dropdown">
                        <a href="#" title="UI Elements">
                            <i class="fa fa-fw fa-file-text"></i> Pages
                        </a>
                        <ul class="nav-sub">
                            <li>
                                <a href="pages-blank.html" title="Buttons">
                                     Blank Page
                                </a>
                            </li>
                            <li>
                                <a href="pages-another-blank.html" title="Sliders &amp; Progress">
                                     Another Blank Page
                                </a>
                            </li>
                        </ul>
                    </li> --}}


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




    @yield('footer')

</body>

</html>

