{{-- Template to be used for admin pages --}}



@include('_includes.login.header')
{{-- Sidebar Navigation --}}
@include('_includes.login.nav.sidenav_admin')

<body class="page-body page-fade gray" data-url="#">
	<div class="main-content">
		{{-- Top bar --}}
		@include('_includes.login.nav.topbar_admin')
		{{-- Content Goes Here --}}
	    @yield('content')
	</div>

@include('_includes.login.footer')
