<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- Head -->
	<head>
		<title>Dashboard</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
		<meta name="description" content="Stream - Dashboard UI Kit">
		<meta name="author" content="htmlstream.com">

		<!-- Favicon -->
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

		<!-- Web Fonts -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link rel="stylesheet" href="/assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css">

		<!-- Components Vendor Styles -->
	  <link rel="stylesheet" href="/assets/vendor/font-awesome/css/all.min.css">
		<link rel="stylesheet" href="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

		<!-- Theme Styles -->
		<link rel="stylesheet" href="/assets/css/theme.css">

		<!-- Custom Charts -->
		<style>
			.js-doughnut-chart {
				width: 70px !important;
				height: 70px !important;
			}
		</style>
	</head>
	<!-- End Head -->

	<body>
		<!-- Header (Topbar) -->
		@include('layouts.header')
		<!-- End Header -->

		<main class="u-main" role="main">
			@include('layouts.sidebar')

			<div class="u-content">
				@yield('content')

				@include('layouts.footer')
			</div>
		</main>

		<!-- Vertically Centered Modals -->
		<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle">Vertically Centered Modal</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
						<button type="button" class="btn btn-primary">Simpan Perubahan</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Vertically Centered Modals -->

		<!-- Global Vendor -->
		<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
		<script src="/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
		<script src="/assets/vendor/popper.js/dist/umd/popper.min.js"></script>
		<script src="/assets/vendor/bootstrap/bootstrap.min.js"></script>

		<!-- Plugins -->
		<script src="/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
		<script src="/assets/vendor/chart.js/dist/Chart.min.js"></script>

		<!-- Initialization  -->
		<script src="/assets/js/sidebar-nav.js"></script>
		<script src="/assets/js/main.js"></script>
		<script src="/assets/js/dashboard-page-scripts.js"></script>
		<script src="/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="/assets/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		
	</body>
</html>