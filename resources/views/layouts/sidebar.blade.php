<!-- Sidebar -->
<aside id="sidebar" class="u-sidebar" style="box-shadow: 5px 5px 5px 5px lightgrey">
	<div class="u-sidebar-inner" style="box-shadow: 2px 2px 2px 2px lightgrey">
		<header class="u-sidebar-header">
			<a class="u-sidebar-logo" href="index.html">
				<img class="img-fluid" src="./assets/img/logo.png" width="124" alt="Stream Dashboard">
			</a>
		</header>

		<nav class="u-sidebar-nav">
			<ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
				<!-- Dashboard -->
				<li class="u-sidebar-nav-menu__item">
					<a class="u-sidebar-nav-menu__link active" href="/dashboard">
						<i class="fa fa-cubes u-sidebar-nav-menu__item-icon"></i>
						<span class="u-sidebar-nav-menu__item-title">Dashboard</span>
					</a>
				</li>
				<!-- End Dashboard -->
				<li class="u-sidebar-nav-menu__item">
					<a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu4">
						<i class="far fa-folder-open u-sidebar-nav-menu__item-icon"></i>
						<span class="u-sidebar-nav-menu__item-title">Data Mitra</span>
						<i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
						<span class="u-sidebar-nav-menu__indicator"></span>
					</a>

					<ul id="subMenu4" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
						<li class="u-sidebar-nav-menu__item">
							<a class="u-sidebar-nav-menu__link" href="{{route('undangan.mitra')}}">
								<span class="u-sidebar-nav-menu__item-icon"></span>
								<span class="u-sidebar-nav-menu__item-title">Mitra</span>
							</a>
						</li>
					</ul>


				</li>

				<li class="u-sidebar-nav-menu__item">
					<a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu3">
						<i class="far fa-folder-open u-sidebar-nav-menu__item-icon"></i>
						<span class="u-sidebar-nav-menu__item-title">Data master</span>
						<i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
						<span class="u-sidebar-nav-menu__indicator"></span>
					</a>

					<ul id="subMenu3" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
						<li class="u-sidebar-nav-menu__item">
							<a class="u-sidebar-nav-menu__link" href="{{route('undangan.type')}}">
								<span class="u-sidebar-nav-menu__item-icon">T</span>
								<span class="u-sidebar-nav-menu__item-title">Type</span>
							</a>
						</li>
					</ul>


				</li>

				<!-- Forms -->
				<li class="u-sidebar-nav-menu__item">
					<a class="u-sidebar-nav-menu__link" href="{{ route('undangan.pemesan') }}">
						<i class="far fa-edit u-sidebar-nav-menu__item-icon"></i>
						<span class="u-sidebar-nav-menu__item-title">Data Pemesan</span>
					</a>
				</li>
				<!-- End Forms -->

				<!-- Tables -->
				<!-- <li class="u-sidebar-nav-menu__item">
					<a class="u-sidebar-nav-menu__link" href="{{route('undangan.create')}}">
						<i class="far fa-list-alt u-sidebar-nav-menu__item-icon"></i>
						<span class="u-sidebar-nav-menu__item-title">Pembuatan</span>
					</a>
				</li> -->
				<!-- End Tables -->


				<hr>

				<!-- Documentation -->
				<li class="u-sidebar-nav-menu__item">
					<a class="u-sidebar-nav-menu__link" href="./docs.html">
						<i class="far fa-newspaper u-sidebar-nav-menu__item-icon"></i>
						<span class="u-sidebar-nav-menu__item-title">Dokumentasi</span>
					</a>
				</li>
				<!-- End Documentation -->
			</ul>
		</nav>
	</div>
</aside>
<!-- End Sidebar -->