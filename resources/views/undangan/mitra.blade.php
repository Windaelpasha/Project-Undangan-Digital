@extends('layouts.admin')

@section('content')

<div class="u-body">
    <!-- End Breadcrumb -->
    <div class="mb-4">
        <a href="../crud_type/tambah"><button class="btn btn-primary" style="margin-left: 20px;"><i class="fa fa-plus"></i> Tambah Akun Mitra</button></a>
        <nav aria-label="breadcrumb">
            <!-- <ol class="breadcrumb bg-transparent small p-0">
				<li class="breadcrumb-item"><a href="./index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tambah Data Anggota</li>
			</ol> -->
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card">
                    <header class="card-header" style="border: px solid #6b15b6;color: #6b15b6;">
                        <h2 class="h3 card-header-title text-center"> Data MItra </h2>
                    </header>
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama Mitra</th>
                            <th>Aksi</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection