{{-- TODO: set active sidebar panel somehow based on page --}}

<div class="page-container">
    <div class="sidebar-menu">
        <div class="sidebar-menu-inner">
            <header class="logo-env">
                <!-- logo --> 
                <div class="logo"> <a href="#"> <img src="{{asset('images/logos/logo.png')}}" width="120" alt=""/> </a> </div>
                <!-- logo collapse icon --> 
                <div class="sidebar-collapse">
                    <a href="index.html#" class="sidebar-collapse-icon with-animation">
                    <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition --> 
                    <i class="fa fa-reorder" style="margin-left: 5px; margin-right: 5px;"></i> 
                    </a>
                </div>
                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) --> 
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="index.html#" class="with-animation">
                        <!-- add class "with-animation" to support animation -->
                        <i class="fa fa-reorder" style="margin-left: 5px; margin-right: 5px;"></i> 
                    </a>
                </div>
            </header>

            <ul id="main-menu" class="main-menu">
                <li class="opened active has-sub">
                    <a href="#"><i class="fa fa-tachometer"></i>
                        <span class="title">Dashboard</span>
                    </a> 
                    <ul class="visible">
                        <li> <a href="{{route('home')}}"><span class="title">Home</span></a> </li>
                        <li> <a href="{{route('admin.manageusers')}}"><span class="title">User Management</span></a> </li>
                     {{-- <li class="active"> --}}
                    </ul>
                </li>
                <li> 
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                       <i class="fa fa-sign-out"></i>
                       <span class="title">Log Out</span> 
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                        </form>
                    </a>
                </li>
                


            </ul>
        </div>
    </div>

