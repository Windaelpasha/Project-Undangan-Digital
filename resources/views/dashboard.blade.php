@extends('layouts.admin')

@section('content')
<div class="u-body">
	<!-- Doughnut Chart -->
	<div class="row">
		<div class="col-sm-6 col-xl-4 mb-5">
			<div class="card">
				<div class="card-body media align-items-center px-xl-3">
					<div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
						<canvas class="js-doughnut-chart" width="70" height="70" data-set="[100, 0]" data-colors='["#2972fa","#f6f9fc"]'></canvas>

						<div class="u-doughnut__label text-info">100</div>
					</div>

					<div class="media-body">
						<h5 class="h6 text-muted text-uppercase mb-2">
							Total Pemesan <i class="fa fa-arrow-up text-success ml-1"></i>
						</h5>
						<span class="h2 mb-0">{{$total}}</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-xl-4 mb-5">
			<div class="card">
				<div class="card-body media align-items-center px-xl-3">
					<div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
						<canvas class="js-doughnut-chart" width="70" height="70" data-set="[35, 65]" data-colors='["#fab633", "#f6f9fc"]'></canvas>

						<div class="u-doughnut__label text-warning">35</div>
					</div>

					<div class="media-body">
						<h5 class="h6 text-muted text-uppercase mb-2">
							Yang sudah dibuat <i class="fa fa-arrow-down text-danger ml-1"></i>
						</h5>
						<span class="h2 mb-0">{{$sudah}}</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-6 col-xl-4 mb-5">
			<div class="card">
				<div class="card-body media align-items-center px-xl-3">
					<div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
						<canvas class="js-doughnut-chart" width="70" height="70" data-set="[70, 30]" data-colors='["#0dd157","#f6f9fc"]'></canvas>

						<div class="u-doughnut__label text-success">70</div>
					</div>

					<div class="media-body">
						<h5 class="h6 text-muted text-uppercase mb-2">
							Yang belum dibuat <i class="fa fa-arrow-up text-success ml-1"></i>
						</h5>
						<span class="h2 mb-0">{{ $belum }}</span>
					</div>
				</div>
			</div>
		</div>

		<!-- <span class="col-sm-6 col-xl-3 mb-4">
							<span class="card">
								<span class="card-body media align-items-center px-xl-3">
									<div class="u-doughnut u-doughnut--70 mr-3 mr-xl-2">
										<canvas class="js-doughnut-chart" width="70" height="70" data-set="[25, 85]"data-colors='["#fb4143","#f6f9fc"]'></canvas>

										<div class="u-doughnut__label text-danger">25</div>
									</div>

									<span class="media-body">
										<h5 class="h6 text-muted text-uppercase mb-2">
											Batal <i class="fa fa-arrow-up text-danger ml-1"></i>
										</h5>
										<span class="h2 mb-0">$3,400</span>
									</span>
								</span>
							</span>
						</span>
					</span>
					End Doughnut Chart -->

		<!-- Overall Income -->
		<div class="card mb-4">

			
		</div>
		<!-- End Overall Income -->

		<!-- Current Projects -->
		<div class="row">
			<!-- Current Projects -->
			<div class="col-md-6 mb-4 mb-md-0">
				<div class="card h-100">
					<header class="card-header d-flex align-items-center">
						<h2 class="h3 card-header-title">Panel Perkembangan</h2>

						<!-- Card Header Icon -->
						<ul class="list-inline ml-auto mb-0">
							<li class="list-inline-item mr-3">
								<a class="link-muted h3" href="#!">
									<i class="far fa-bell"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="link-muted h3" href="#!">
									<i class="far fa-edit"></i>
								</a>
							</li>
						</ul>
						<!-- End Card Header Icon -->
					</header>

					<div class="card-body">
						<div class="d-flex justify-content-between mb-4">
							<div>
								<span class="d-none d-lg-block text-muted small text-uppercase mb-1">Total User</span>
								<span class="h4 text-primary">56</span>
							</div>

							<div class="divider divider-vertical mx-2"></div>

							<div>
								<span class="d-none d-lg-block text-muted small text-uppercase mb-1">Total Transaksi</span>
								<span class="h4 text-info">2,800</span>
							</div>

							<div class="divider divider-vertical mx-2"></div>

							<div>
								<span class="d-none d-lg-block text-muted small text-uppercase mb-1">Sukses</span>
								<span class="h4 text-success">1,050</span>
							</div>

							<div class="divider divider-vertical mx-2"></div>

							<div>
								<span class="d-none d-lg-block text-muted small text-uppercase mb-1">Proses</span>
								<span class="h4 text-warning">1,750</span>
							</div>
						</div>

						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-active text-muted">
									<tr class="small text-muted text-uppercase">
										<th>DIVISI</th>
										<th>Dana</th>
										<th>Persentasi</th>
									</tr>
								</thead>

								<tbody>
									<tr>
										<td class="align-middle">
											<div class="media align-items-center">
												<div class="u-icon u-icon--sm text-white rounded-circle mr-3" style="background-color: gold;">
												</div>
												<div class="media-body">
													<h4 class="mb-0">Gold</h4>
												</div>
											</div>
										</td>
										<td class="align-middle font-weight-semibold">
											<span class="text-muted"></span>
										</td>
										<td class="align-middle font-weight-semibold"></td>
										<td class="align-middle">
											<div class="progress" style="height: 6px; border-radius: 3px;">
												<div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="align-middle">
											<div class="media align-items-center">
												<div class="u-icon u-icon--sm text-white rounded-circle mr-3" style="background-color: silver;">
												</div>

												<div class="media-body">
													<h4 class="mb-0">Silver</h4>
												</div>
											</div>
										</td>
										<td class="align-middle font-weight-semibold">
											<span class="text-muted"></span>
										</td>
										<td class="align-middle font-weight-semibold"></td>
										<td class="align-middle">
											<div class="progress" style="height: 6px; border-radius: 3px;">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr>

									<tr>
										<td class="align-middle">
											<div class="media align-items-center">
												<div class="u-icon u-icon--sm  text-white rounded-circle mr-3" style="background-color: maroon;">
												</div>

												<div class="media-body">
													<h4 class="mb-0">Bronze</h4>
												</div>
											</div>
										</td>
										<td class="align-middle font-weight-semibold">
											<span class="text-muted"></span>
										</td>
										<td class="align-middle font-weight-semibold"></td>
										<td class="align-middle">
											<div class="progress" style="height: 6px; border-radius: 3px;">
												<div class="progress-bar bg-secondary" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr>


								</tbody>
							</table>
						</div>
					</div>

					<footer class="card-footer">
						<a class="u-link u-link--primary" href="#!">Detail</a>
					</footer>
				</div>
			</div>
			<!-- End Current Projects -->

			<!-- Comments -->
			<div class="col-md-6">
				<div class="card h-100">
					<header class="card-header d-md-flex align-items-center">
						<h2 class="h3 card-header-title">Postingan</h2>

						<!-- Nav Tabs -->
						<ul id="commentsTabsControl" class="nav nav-tabs card-header-tabs ml-md-auto mt-4 mt-md-0">
							<li class="nav-item">
								<a class="nav-link active" href="#commentsTab1" role="tab" aria-selected="true" data-toggle="tab">Terbaru
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#commentsTab2" role="tab" aria-selected="false" data-toggle="tab">Lama
								</a>
							</li>
						</ul>
						<!-- End Nav Tabs -->
					</header>

					<div class="card-body p-0 m-0">
						<div class="tab-content" id="commentsTabs">
							<!-- Tabs Content -->
							<div class="tab-pane fade show active" id="commentsTab1" role="tabpanel">
								<div class="list-group list-lg-group list-group-flush">
									<!-- Comment -->
									<a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img1.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Chad Cannon <span class="badge badge-soft-secondary mx-1">Pro</span>
													</h4>
													<small class="text-muted ml-md-auto">23 Jan 2018</small>
												</div>

												<p class="mb-0">We've just done the project. What's gonna be next?</p>
											</div>
										</div>
									</a>
									<!-- End Comment -->

									<!-- Comment -->
									<a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img2.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Jane Ortega <span class="badge badge-soft-warning mx-1">Light</span>
													</h4>
													<small class="text-muted ml-md-auto">18 Jan 2018</small>
												</div>

												<p class="mb-0">Forget Ebay and other forms of advertising for your property</p>
											</div>
										</div>
									</a>
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img3.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Brandon Baldwin <span class="badge badge-soft-info mx-1">Basic</span>
													</h4>
													<small class="text-muted ml-md-auto">15 Jan 2018</small>
												</div>

												<p class="mb-0">I wanna discuss about two things that are quite important to me</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/user-unknown.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Stella Hoffman <span class="badge badge-soft-danger mx-1">Start</span>
													</h4>
													<small class="text-muted ml-md-auto">15 Jan 2018</small>
												</div>

												<p class="mb-0">When the release date is expexted for the advacned settings?</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img4.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Htmlstream <span class="badge badge-soft-secondary mx-1">Pro</span>
													</h4>
													<small class="text-muted ml-md-auto">05 Jan 2018</small>
												</div>

												<p class="mb-0">Adwords Keyword research for beginners</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->
								</div>
							</div>
							<!-- End Tabs Content -->

							<!-- Tabs Content -->
							<div class="tab-pane fade" id="commentsTab2" role="tabpanel">
								<div class="list-group list-lg-group list-group-flush">
									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img2.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Jane Ortega <span class="badge badge-soft-warning mx-1">Light</span>
													</h4>
													<small class="text-muted ml-md-auto">18 Jan 2018</small>
												</div>

												<p class="mb-0">Forget Ebay and other forms of advertising for your property</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img3.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Brandon Baldwin <span class="badge badge-soft-info mx-1">Basic</span>
													</h4>
													<small class="text-muted ml-md-auto">15 Jan 2018</small>
												</div>

												<p class="mb-0">I wanna discuss about two things that are quite important to me</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img1.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Chad Cannon <span class="badge badge-soft-secondary mx-1">Pro</span>
													</h4>
													<small class="text-muted ml-md-auto">15 Jan 2018</small>
												</div>

												<p class="mb-0">We've just done the project. What's gonna be next?</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/img4.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Htmlstream <span class="badge badge-soft-secondary mx-1">Pro</span>
													</h4>
													<small class="text-muted ml-md-auto">12 Jan 2018</small>
												</div>

												<p class="mb-0">Adwords Keyword research for beginners</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->

									<!-- Comment -->
									<!-- <a class="list-group-item list-group-item-action" href="#">
										<div class="media">
											<img class="u-avatar rounded-circle mr-3" src="./assets/img/avatars/user-unknown.jpg" alt="Image description">

											<div class="media-body">
												<div class="d-md-flex align-items-center">
													<h4 class="mb-1">
														Stella Hoffman <span class="badge badge-soft-danger mx-1">Start</span>
													</h4>
													<small class="text-muted ml-md-auto">05 Jan 2018</small>
												</div>

												<p class="mb-0">When the release date is expexted for the advacned settings?</p>
											</div>
										</div>
									</a> -->
									<!-- End Comment -->
								</div>
							</div>
							<!-- End Tabs Content -->
						</div>
					</div>

					<!-- <footer class="card-footer">
						<a class="u-link u-link--primary" href="#!">Lihat semua</a>
					</footer> -->
				</div>
			</div>
			<!-- End Comments -->
		</div>
		<!-- End Current Projects -->
	</div>
	@endsection
