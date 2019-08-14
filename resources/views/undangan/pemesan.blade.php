@extends('layouts.admin')

@section('content')
<div class="u-body">
	<form role="form" method="post" action="{{route('undangan.create')}}">
		<!-- Form Controls -->
		{{@csrf_field()}}
		<div class="row">
			<div class="col-md-12 mb-4">
				<div class="card">
					<header class="card-header" style="color: #6b15b6;">
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
						<div class="card-body">						
							<div class="form-group mb-4">
								<label for="inputRightIcon">Nama</label>
								<span class="form-icon-wrapper">
									<span class="form-icon form-icon--right">
										<!-- <i class="fa fa-globe form-icon__item"></i> -->
									</span>
									<input id="Nama" name="Nama" class="form-control form-icon-input-right" type="text" placeholder="Masukan Nama Pemesan" >
								</span>
							</div>
							@if($type != null)
							<div class="form-group mb-4">
								<label for="inputRightIcon">Tipe</label>
									<select name="type_id" id="type_id" class="custom-select">
											<option selected> Pilih Tipe</option>
										@foreach($type as $typ)
											<option value="{{$typ->id}}">{{$typ->nama_type}}</option>
										@endforeach
								</select>
							</div>
							@endif
							<div class="form-group mb-4">
								<label for="inputRightIcon">No Gawai</label>
								<span class="form-icon-wrapper">
									<span class="form-icon form-icon--right">
										<!-- <i class="fa fa-map-marker form-icon__item"></i> -->
									</span>
									<input id="No" name="No" class="form-control form-icon-input-right" type="text" placeholder="Masukan Nomor Gawai">
								</span>
							</div>
							<button class="btn btn-primary" type="submit" name="simpan" style="margin-left: 1000px;"><li class="fa">Simpan</li></button>
							
						</div>
					</div>
				</div>
			<!-- End Form Controls -->
	</form>
	<br>
	<div class="">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="card">
					<header class="card-header" style="color: #6b15b6;">
						<h2 class="h3 card-header-title text-center" >Data Pemesan</h2>
					</header>
					<table class="table table-hover">
						<tr>
							<th>No</th>
							<th>Name</th>
							<th>Tipe</th>
							<th>Nomor Gawai</th>
							<th>Aksi</th>
						</tr>
						<?php $i = 1; ?>
						@foreach ($data as $pemesan )
						<tr>
							<td>{{$i}}</td>
							<td>{{$pemesan->nama}}</td>
							<td>{{$pemesan->type['nama_type']}}</td>
							<td>{{$pemesan->no_hp}}</td>
							<td> <a href="/undangan/buat/{{$pemesan->id}}" class="btn btn-primary"><li class="fa">Buat</li></a>
							|
							<a href="/undangan/pemesan/{{$pemesan->id}}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data tersebut!!')"><i class="fa fa-trash">Hapus</i></a> </td>
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