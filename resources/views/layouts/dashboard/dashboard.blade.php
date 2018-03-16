@include('layouts.partials.header_html')

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<!-- Main Header -->
	<header class="main-header">

		<!-- Logo -->
		<a href="{!! url('/') !!}" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>C</b>N</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Chuck</b>NORRIS</span>
		</a>

		<!-- Header Navbar -->
		<nav class="navbar navbar-static-top" role="navigation">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
			<!-- Navbar Right Menu -->
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">					
					<!-- User Account Menu -->
					<li class="dropdown user user-menu">
						<!-- Menu Toggle Button -->
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<!-- The user image in the navbar-->
							<img src="{{ asset('img/chuck.jpg') }}" class="user-image" alt="User Image">
							<!-- hidden-xs hides the username on small devices so only the image appears. -->
							<span class="hidden-xs">{{ auth()->user()->usernname }}</span>
						</a>
						<ul class="dropdown-menu">
							<!-- The user image in the menu -->
							<li class="user-header">
								<img src="{{ asset('img/chuck.jpg') }}" class="img-circle" alt="User Image">

								<p>
									{{ auth()->user()->username }}
									<small>Miembro desde {{ auth()->user()->created_at->format('d-m-Y') }}</small>
								</p>
							</li>
							
							<!-- Menu Footer-->
							<li class="user-footer">								
								<div class="pull-right">									
									<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">
											Salir
									</a>

									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											{{ csrf_field() }}
									</form>
								</div>
							</li>
						</ul>
					</li>
					
				</ul>
			</div>
		</nav>
	</header>
	@include('layouts.partials.sidebar')
	
	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<section class="content-header">@yield('content-header')</section>
		<!-- Main content -->
		<section class="content body">
			<div class="row">			
				@yield('content')   				
			</div>
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	@include('layouts.partials.footer')


</div>
<!-- ./wrapper -->

@include('layouts.partials.scripts')


</body>
</html>
