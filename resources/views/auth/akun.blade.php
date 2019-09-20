@extends('layouts.admin')

@section('content')
<div class="u-body">
    <!-- End Breadcrumb -->
    <div class="mb-4">
        <h1 class="h3">Tambah Tipe</h1>
        <nav aria-label="breadcrumb">
            <!-- <ol class="breadcrumb bg-transparent small p-0">
				<li class="breadcrumb-item"><a href="./index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tambah Data Anggota</li>
			</ol> -->
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <form role="form" method="post" action="">
        <!-- Form Controls -->
        {{@csrf_field()}}
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <header class="card-header" style="border: px solid #6b15b6;color: #6b15b6;">
                        <h2 class="h3 card-header-title text-center">Buata Akun Mitra </h2>
                    </header>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label for="inputRightIcon">Nama mitra</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-globe form-icon__item"></i> -->
                                </span>
                                <input id="" name="nama" class="form-control form-icon-input-right" type="text" placeholder="Masukan Nama Mitra	">
                            </span>
                        </div>
                        <div class="form-group mb-4">
                            <label for="inputRightIcon">Alamat Email</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                                </span>
                                <input id="jumlah" name="email" class="form-control form-icon-input-right" type="email" placeholder="Masukan Email">
                            </span>
                        </div>
                        <div class="form-group mb-4">
                            <label for="inputRightIcon">Password</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                                </span>
                                <input id="harga" name="password" class="form-control form-icon-input-right" type="password" placeholder="Masukan Password">
                            </span>
                            <div class="form-group mb-4">
                            <label for="inputRightIcon"Konfirmasi> Password</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                                </span>
                                <input id="harga" name="password" class="form-control form-icon-input-right" type="password" placeholder="Konfirmasi Password">
                            </span>
                        </div>

                        <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option value="mitra">mitra</option>
                                </select>
                            </div>
                        </div>
                        <input class="btn btn-primary" type="submit" name="simpan" value="Buat Akun" style="margin-left: 920px;">
                    </div>
                </div>
            </div>
            <!-- End Form Controls -->
        </div>
    </form>
</div>
@endsection