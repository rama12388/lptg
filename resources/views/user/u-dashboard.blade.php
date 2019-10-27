<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Sistem Jurnal Geodesi</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

	<!-- Fonts and icons -->
	<script src="{{asset('/assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['{{ asset('assets/css/fonts.min.css') }}']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>
    <link rel="icon" href="{{asset('/assets/img/icon.ico')}}" type="image/x-icon"/>
	<!-- CSS Files -->
	<link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('/assets/css/atlantis.min.css')}}">

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="green">

				<a href="{{route('user.home')}}" class="logo">
					<img src="{{asset('/assets/img/logo.png')}}" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="green2">
				<div class="container-fluid">

					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
									<a href="{{route('login.read')}}"><button type="button" class="navbar-nav topbar-nav btn btn-primary text-section">Login</button></a>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="{{asset('assets/img/user.png')}}" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
											</div>
										</div>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="{{ asset('assets/img/Logoundip.png') }}" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									Teknik Geodesi
									<span class="user-level">Universitas Diponegoro</span>

								</span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<a href="{{route('user.home')}}">
								<i class="fas fa-home"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Menu</h4>
						</li>
						<li class="nav-item">
							<a data-toggle="collapse" href="#base">
								<i class="fas fa-layer-group"></i>
								<p>Data</p>
								<span class="caret"></span>
							</a>
							<div class="collapse" id="base">
								<ul class="nav nav-collapse">
									<li>
										<a href="{{route('user.datatable')}}">
											<span class="sub-item">Table</span>
										</a>
									</li>
									<li>
										<a href="{{route('user.datagrafik')}}">
											<span class="sub-item">Graph</span>
										</a>
									</li>
									<li>
										<a href="{{route('user.datamaps')}}">
											<span class="sub-item">Maps</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section"><a href="https://ejournal3.undip.ac.id/index.php/geodesi/issue/archive">About Us</a></h4>
							<h5 class="text-section"><a href="{{route('comment.read')}}">Comment</a><h5>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				@yield('content')
			</div>

			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="/">
									SIG - Jurnal Geodesi
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
					© 2019 www.lptg.web.id with <i class="fa fa-heart heart text-danger"></i>
					</div>
				</div>
			</footer>
		</div>


	</div>
	<!--   Core JS Files   -->
	<script src="{{asset('/assets/js/core/jquery.3.2.1.min.js')}}"></script>
	<script src="{{asset('/assets/js/core/popper.min.js')}}"></script>
	<script src="{{asset('/assets/js/core/bootstrap.min.js')}}"></script>
	<!-- jQuery UI -->
	<script src="{{asset('/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')}}"></script>
	<script src="{{asset('/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')}}"></script>
	<!-- jQuery Scrollbar -->
	<script src="{{asset('/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>
	<!-- Chart JS -->
	<script src="{{asset('/assets/js/plugin/chart.js/chart.min.js')}}"></script>
	<!-- jQuery Sparkline -->
	<script src="{{asset('/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
	<!-- Chart Circle -->
	<script src="{{asset('/assets/js/plugin/chart-circle/circles.min.js')}}"></script>
	<!-- Datatables -->
	<script src="{{asset('/assets/js/plugin/datatables/datatables.min.js')}}"></script>
	<!-- Bootstrap Notify -->
	<script src="{{asset('/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>
	<!-- jQuery Vector Maps -->
	<script src="{{asset('/assets/js/plugin/jqvmap/jquery.vmap.min.js')}}"></script>
	<script src="{{asset('/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js')}}"></script>
	<!-- Sweet Alert -->
	<script src="{{asset('/assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
	<!-- Atlantis JS -->
	<script src="{{asset('/assets/js/atlantis.min.js')}}"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../assets/js/setting-demo.js"></script>
	<script src="../assets/js/setting-demo2.js"></script>
	<script src="../assets/js/demo.js"></script>
	@yield('script')
	<script>
		$('#multi-filter-select').DataTable({
				"pageLength": 25,
			});
	</script>
</body>
</html>
