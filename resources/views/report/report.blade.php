@extends('layouts.admin')

@section('content')

<div class="u-body"">
	<!-- End Breadcrumb -->
	<div class="mb-4">
		<nav aria-label="breadcrumb">
			 <ol class="breadcrumb bg-transparent small p-0">
			    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
			</ol>
		</nav>
	</div>
	<!-- End Breadcrumb -->

	<div class="card mb-4" style="box-shadow: 5px 5px 5px 5px lightgrey">
		<header class="card-header" style="background-color: #6b15b6; color: #fff">
			<h2 class="h3 card-header-title">Laporan</h2>
		</header>
		<div class="card">
			<div class="card-body">
			<!-- Table -->
				<div class="table-responsive" style="border-color: ">
					<table class="table table-hover" id="example1">
						<thead>
							<tr >
								<th>#</th>
								<th>Nama Client</th>
                                <th>No Telepon</th>
                                <th>Jumlah</th>
								<th class="text-center">Aksi</th>
							</tr>
						</thead>
						<tbody>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>		
	</div>
</div>
@endsection