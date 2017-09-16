{{-- Template to be used for admin pages --}}



@include('_includes.header')
{{-- Sidebar Navigation --}}
@include('_includes.nav.sidenav_admin')

<div class="main-content">
	{{-- Top bar --}}
	@include('_includes.nav.topbar_admin')
	{{-- Content Goes Here --}}
    @yield('content')
</div>

@include('_includes.footer')
