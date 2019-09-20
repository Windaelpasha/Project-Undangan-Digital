<!DOCTYPE html>
<html lang="en" class="no-js">
	<!-- Head -->
	<head>
		<title>Undangan</title>

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
		<link ... href="http://sstatic.net/stackoverflow/all.css?v=c298c7f8233d">

		<!-- Custom Charts --><!--  -->
		<style>
			/**{
            margin:0; 
            padding:0;
        }
*/
        body {
            /*overflow: hidden;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
            background-position: center center;
            background-repeat: no-repeat ;
            height: 100%;
            margin: 0;
            user-select: none;
            -webkit-tap-highlight-color:transparent;*/
        }
			.js-doughnut-chart {
				width: 70px !important;
				height: 70px !important;
			}
		</style>
	</head>
	<!-- End Head -->

	<body>
		<!-- Header (Topbar) -->
		<!-- End Header -->
			@yield('content')
		<!-- Vertically Centered Modals -->
		
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
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js?v=1.0"></script> -->
		<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js?v=1.1"></script> -->
   		<script src="{{ asset('assets/css/master.css/js/turn.min.js?v=1.0') }}" type="text/javascript"></script>
   		<script src="{{ asset('assets/css/master.css/js/turn.min.js?v=1.1') }}" type="javascript/text"></script>
          
		@section('js')

		@show
		
	</body>
</html>