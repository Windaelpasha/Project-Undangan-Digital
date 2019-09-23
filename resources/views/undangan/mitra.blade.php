@extends('layouts.admin')

@section('content')

<div class="u-body">
    <!-- End Breadcrumb -->
    <div class="mb-4">
        <a href="../auth/akun"><button class="btn btn-primary" style="margin-left: 20px;"><i class="fa fa-plus"> Tambah  Akun Mitra</i></button></a>
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
                        <h2 class="h3 card-header-title text-center">Data Mitra </h2>
                    </header>
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama Mitra</th>
                            <th>Aksi</th>
                        </tr>
                        
                        @foreach ($user as $key => $mitra) 
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$mitra->name}}</td>
                            <td><a href="/undangan/mitra/{{$mitra->id}}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data tersebut!!')"><i class="fa fa-trash">Hapus</i></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection





