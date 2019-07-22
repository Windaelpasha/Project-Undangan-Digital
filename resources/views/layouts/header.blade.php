<!-- Header (Topbar) -->
<header class="u-header"  style="box-shadow: 1px 1px 1px 1px lightgrey">
			<div class="u-header-left">
				<a class="u-header-logo" href="index.html">
					<img class="u-logo-desktop" src="/assets/img/logo.png" width="160" alt="Stream Dashboard">
					<img class="img-fluid u-logo-mobile" src="/assets/img/logo-mobile.png" width="50" alt="Stream Dashboard">
				</a>
			</div>

			<div class="u-header-middle">
				<a class="js-sidebar-invoker u-sidebar-invoker" href="#!"
				   data-is-close-all-except-this="true"
				   data-target="#sidebar">
					<i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
					<i class="fa fa-times u-sidebar-invoker__icon--close"></i>
				</a>

				<div class="u-header-search"
				     data-search-mobile-invoker="#headerSearchMobileInvoker"
				     data-search-target="#headerSearch">
					<a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="#!">
						<i class="fa fa-search"></i>
					</a>

					<div id="headerSearch" class="u-header-search-form">
						<form>
							<div class="input-group">
								<button class="btn-link input-group-prepend u-header-search__btn" type="submit">
									<i class="fa fa-search"></i>
								</button>
								<input class="form-control u-header-search__field" type="search" placeholder="Ketik pencarian">
							</div>
						</form>
					</div>
				</div>
			</div>

			<div class="u-header-right">

		  	<!-- Notifications -->
				<div class="dropdown mr-4">
				  <a class="link-muted" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <span class="h3">
			    		<i class="far fa-bell"></i>
				    </span>
				    <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-info"></span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
				  	<div class="card">
							<div class="card-header d-flex align-items-center py-3">
								<h2 class="h4 card-header-title">Notifikasi</h2>
								<a class="ml-auto" href="#">Hapus semua</a>
							</div>

							<div class="card-body p-0">
								<div class="list-group list-group-flush">
									<!-- Notification -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="/assets/img/avatars/img1.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Chad Cannon</h4>
													<small class="text-muted ml-auto">23 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													We've just done the project.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->

									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="/assets/img/avatars/img2.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Jane Ortega</h4>
													<small class="text-muted ml-auto">18 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													<span class="text-primary">@Bruce</span> advertising your project is not good idea.
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->

									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="/assets/img/avatars/user-unknown.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Stella Hoffman</h4>
													<small class="text-muted ml-auto">15 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													When the release date is expexted for the advacned settings?
												</p>
											</div>
										</div>
								  </a>
									<!-- End Activity -->

									<!-- Activity -->
								  <a class="list-group-item list-group-item-action" href="#">
										<div class="media align-items-center">
											<img class="u-avatar--sm rounded-circle mr-3" src="/assets/img/avatars/img4.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-flex align-items-center">
													<h4 class="mb-1">Htmlstream</h4>
													<small class="text-muted ml-auto">05 Jan 2018</small>
												</div>

												<p class="text-truncate mb-0" style="max-width: 250px;">
													Adwords Keyword research for beginners
												</p>
											</div>
										</div>
								  </a>
									<!-- End Notification -->
								</div>
							</div>

							<div class="card-footer py-3">
								<a class="btn btn-block btn-outline-primary" href="#">Lihat semua notifikasi</a>
							</div>
				  	</div>
				  </div>
				</div>
		  	<!-- End Notifications -->

		  	
		  	<!-- User Profile -->
				<div class="dropdown ml-2">
				  <a class="link-muted d-flex align-items-center" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
				    <img class="u-avatar--xs img-fluid rounded-circle mr-2" src="/assets/img/avatars/img1.jpg" alt="User Profile">
						<span class="text-dark d-none d-sm-inline-block">
							Aku <small class="fa fa-angle-down text-muted ml-1"></small>
						</span>
				  </a>

				  <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
				  	<div class="card">
							<div class="card-header py-3">
								<!-- Storage -->
								<div class="d-flex align-items-center mb-3">
									<span class="h6 text-muted text-uppercase mb-0">Status</span>
								</div>

								<div class="progress" style="height: 4px;margin-bottom: 20px;">
									<div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="height: 4px;margin-bottom: 20px;">
									<div class="progress-bar bg-success" role="progressbar" style="width: 100%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<div class="progress" style="height: 4px;">
									<div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<!-- End Storage -->
							</div>

							<div class="card-body">
								<ul class="list-unstyled mb-0">
									<li class="mb-4">
										<a class="d-flex align-items-center link-dark" href="account-profile.html">
											<span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-3"></i></span> Lihat profil
										</a>
									</li>
									<li class="mb-4">
										<a class="d-flex align-items-center link-dark" data-toggle="modal" href="#ModalCenter">
											<span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span> Pengaturan
										</a>
									</li>
									<li class="mb-4">
										<a class="d-flex align-items-center link-dark" href="tables.html">
											<span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-3"></i></span> Anggota
										</a>
									</li>
									<li>
										<a class="d-flex align-items-center link-dark" href="#!">
											<span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span> Keluar
										</a>
									</li>
								</ul>
							</div>
				  	</div>
				  </div>
				</div>
		  	<!-- End User Profile -->
			</div>
		</header>
		<!-- End Header (Topbar) -->