@extends('layouts.admin')

@section('content')
<div class="u-body">
	<!-- End Breadcrumb -->
	<!-- <div class="mb-4">
		<h1 class="h3">PEMESANAN</h1>
		<nav aria-label="breadcrumb"> -->
	<!-- <ol class="breadcrumb bg-transparent small p-0">
				<li class="breadcrumb-item"><a href="./index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tambah Data Anggota</li>
			</ol> -->
	<!-- </nav>
	</div> -->
	<!-- End Breadcrumb -->

	<form role="form" method="post" action="">
		<!-- Form Controls -->
		{{@csrf_field()}}
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="card">
					<header class="card-header" style="border: px solid #6b15b6;color: #6b15b6;">
						<h2 class="h3 card-header-title text-center">Tambah Data Pemesan </h2>
					</header>
					<div class="card-body">
						<div class="form-group mb-4">
							<label for="inputRightIcon"></label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<!-- <i class="fa fa-globe form-icon__item"></i> -->
								</span>
							</span>
						</div>
						<!-- <div class="card-body">
							<div class="form-group mb-4">
								<label for="inputRightIcon">Name</label>
								<select name="type_id" id="type_id">
								
								</select>
							</div> -->
						<div class="form-group mb-4">
							<label for="inputRightIcon">Name</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<!-- <i class="fa fa-globe form-icon__item"></i> -->
								</span>
								<input id="Nama" name="Nama" class="form-control form-icon-input-right" type="text" placeholder="Input Name	">
							</span>
						</div>
						<div class="form-group mb-4">
							<label for="inputRightIcon">No HandPhone</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right">
									<!-- <i class="fa fa-map-marker form-icon__item"></i> -->
								</span>
								<input id="No" name="No" class="form-control form-icon-input-right" type="text" placeholder="Input NoHandPhone">
							</span>
						</div>
						<input class="btn btn-primary" type="submit" name="simpan" value="Simpan" style="margin-left: 820px;">
					</div>
				</div>
			</div>
			<!-- End Form Controls -->
	</form>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="card">
					<table class="table table-hover">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>No HandPhone</th>
							<th>Action</th>
						</tr>
						<?php $i = 1; ?>
						@foreach ($data as $pemesan )
						<tr>
							<td>{{$i}}</td>
							<td>{{$pemesan->nama}}</td>
							<td>{{$pemesan->no_hp}}</td>
							<td> <a href="buat?id={{$pemesan->id}}" class="btn btn-primary">Buat</a> </td>
						</tr>
						<?php $i++; ?>
						@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection