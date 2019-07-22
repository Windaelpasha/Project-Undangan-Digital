@extends('layouts.admin')

@section('content')

<div class="u-body">
    <!-- End Breadcrumb -->
    <div class="mb-4">
        <a href="../crud_type/tambah"><button class="btn btn-primary">Tambah Data</button></a>
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
                        <h2 class="h3 card-header-title text-center">Tambah Data Type </h2>
                    </header>
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>type</th>
                            <th> Jumlah Slide</th>
                            <th> Harga</th>
                            <th>Action</th>
                        </tr>
                        <?php $i = 1; ?>
                        @foreach ($data_type as $type )
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$type->nama_type}}</td>
                            <td>{{$type->jumlah_slide}}</td>
                            <td>{{$type->harga}}</td>
                            <td>
                                <a href="/crud_type/{{$type->id}}/edit"><button class="btn btn-warning">Edit</button></a>
                                |
                                <a href="/crud_type/{{$type->id}}/delete" onclick="return confirm('apakah anda yakin');"><button class="btn btn-danger">hapus</button></a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endsection