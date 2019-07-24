@extends('layouts.admin')

@section('content')

<div class="u-body">
	<!-- End Breadcrumb -->
	<div class="mb-4">
		<nav aria-label="breadcrumb">
			<p class="h1 text-primary">Pesanan Selesai</p>
			 <ol class="breadcrumb bg-transparent small p-0">
			    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Pesanan Selesai</li>
			</ol>
		</nav>
    </div>
	<!-- End Breadcrumb -->

	<div class="card mb-4" style="box-shadow: 5px 5px 5px 5px lightgrey">
		<div class="card">
			<div class="card-body">
            <div class="row" style="width:1010px;">
				<div class="col-md-3 mb-3">
                    <div class="card" style="border:1px solid #6b15b6;">
		                <div class="card-body">
                            <img src="/pesanan/d.jpg" alt="" style="width:170px;height:180px;" class="mb-3">
                            <b><p class="text-primary" style="width=180px; text-align:center;">Aku & dia</p></b>
                            <button type="button" class="btn btn-primary btn-pill" style="width:170px"; href="/hasil">
		                        <i class="fa fa-eye mr-1"></i> <b>Lihat</b>
		                    </button>
						</div>
	                </div>
			    </div>
        	</div>
			</div>
		</div>		
	</div>
</div>
@endsection