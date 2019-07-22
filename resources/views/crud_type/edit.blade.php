@extends('layouts.admin')

@section('content')
<div class="u-body">
    <!-- End Breadcrumb -->
    <div class="mb-4">
        <h1 class="h3">Tambah Type</h1>
        <nav aria-label="breadcrumb">
            <!-- <ol class="breadcrumb bg-transparent small p-0">
				<li class="breadcrumb-item"><a href="./index.html">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Tambah Data Anggota</li>
			</ol> -->
        </nav>
    </div>
    <!-- End Breadcrumb -->

    <form role="form" method="post" action="/crud_type/{{$Typee->id}}/update">
        <input type="hidden" name="id" value="{{$Typee->id}}">
        <!-- Form Controls -->
        {{@csrf_field()}}
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <header class="card-header" style="border: px solid #6b15b6;color: #6b15b6;">
                        <h2 class="h3 card-header-title text-center">Ubah Data Type </h2>
                    </header>
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label for="inputRightIcon">Name Type</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-globe form-icon__item"></i> -->
                                </span>
                                <input id="type" name="type" class="form-control form-icon-input-right" type="text" value="{{$Typee->nama_type}}" placeholder>
                            </span>
                        </div>
                        <div class="form-group mb-4">
                            <label for="inputRightIcon">Jumlah slide</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                                </span>
                                <input id="jumlah" name="jumlah" class="form-control form-icon-input-right" type="text" value="{{$Typee->jumlah_slide}}" placeholder>
                            </span>
                        </div>
                        <div class="form-group mb-4">
                            <label for="inputRightIcon">Harga</label>
                            <span class="form-icon-wrapper">
                                <span class="form-icon form-icon--right">
                                    <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                                </span>
                                <input id="harga" name="harga" class="form-control form-icon-input-right" type="text" value="{{$Typee->harga}}" placeholder>
                            </span>
                        </div>
                        <input class="btn btn-primary" type="submit" name="edit" value="edit" style="margin-left: 920px;">
                    </div>
                </div>
            </div>
            <!-- End Form Controls -->
        </div>
    </form>
</div>
@endsection