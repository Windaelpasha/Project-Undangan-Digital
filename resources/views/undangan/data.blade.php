
@extends('layouts.admin')
<!-- Modal -->
@section('content')
	<div class="u-body">
    <!-- End Breadcrumb -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card">
                    <header class="card-header" style="border: px solid #6b15b6;color: #6b15b6;">
                        <h2 class="h3 card-header-title text-center"> Data Undangan</h2>
                        <!-- Button trigger modal -->

                    </header>
                    <table class="table table-hover">
                    	<tr>
						 <th>Nama Pemesan</th>	
						 <!-- <th>Tanggal</th>	 -->
						 <th>Aksi</th>	
                    	</tr>
                    		@foreach($data as $dt)
                    			<tr>
                    				<td>{{$dt->nama}}</td>
                    				<!-- <td></td> -->
                    				<td><a href="/hasil/{{$dt->client_id}} " class="btn btn-info">Lihat</a>
                    					|
                    					<a href="/undangan/data/{{$dt->id}}" class="btn btn-danger" onclick="return confirm('apakah anda yakin untuk menghapus data ini!!')">HAPUS</a>
                    				</td>
                    			</tr>
         
                 			@endforeach
					</table>
 				</div>
            </div>
        </div>
    </div>
       
@endsection