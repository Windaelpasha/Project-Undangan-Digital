@extends('layouts.admin')

@section('content')
<link rel="stylesheet" href="/upimage/style.css">

<div class="u-content">
	<div class="u-body">
		<!-- End Breadcrumb -->
		<div class="mb-4">
			<nav aria-label="breadcrumb">
				<p class="h1 text-primary">Buat Pesanan</p>
				<ol class="breadcrumb bg-transparent small p-0">
				    <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
				    <li class="breadcrumb-item active" aria-current="page">Blank Page</li>
			    </ol>
			</nav>
		</div>
		<!-- End Breadcrumb -->

		<form>
			<!-- Form Controls -->
			<div class="card">
			<div class="card-body">

				<div class="row">
					<div class="col-md-4 mb-4">
	                	<div class="card" style="border:1px solid #6b15b6;">
	                		<div class="card-body">
								<div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
									<div class="icon-container tilt-logo-inner"> 
										<input id="probeUpload" type="file" name="gambar1">
										<i class="fa fa-plus fa-3x" style="color:#fff;"></i>
									</div>
									<img id="probePreview" src=""/>
								</div>

								<hr class="my-4"  style="border:1px solid #6b15b6;">

								<div class="form-group mb-4" >
									<input id="nav1" name="nav1" style="width:200px;margin-left:40px;border:1px solid #6b15b6;" class="form-control" type="text" placeholder="Text Navbar" aria-describedby="emailHelp">
								</div>  
							</div>
	              		</div>
					</div>

					<div class="col-md-4 mb-4">
	                    <div class="card" style="border:1px solid #6b15b6;">
							<div class="card-body">
								<div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
									<div class="icon-container tilt-logo-inner"> 
										<input id="probeUpload" type="file"name="gambar2">
										<i class="fa fa-plus fa-3x" style="color:#fff;"></i>
									</div>
									<img id="probePreview" src=""/>
								</div>

								<hr class="my-4"  style="border:1px solid #6b15b6;">

								<div class="form-group mb-4" >
									<input id="nav2" name="nav2" style="width:200px;margin-left:40px;border:1px solid #6b15b6;" class="form-control" type="text" placeholder="Text Navbar" aria-describedby="emailHelp">
								</div> 
							</div>
	              		</div>
					</div>

					<div class="col-md-4 mb-4">
	                    <div class="card">
							<div class="card-body" style="border:1px solid #6b15b6;">
								<div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
									<div class="icon-container tilt-logo-inner"> 
										<input id="probeUpload" type="file"name="gambar3">
										<i class="fa fa-plus fa-3x" style="color:#fff;"></i>
									</div>
									<img id="probePreview" src=""/>
								</div>

								<hr class="my-4" style="border:1px solid #6b15b6;">

								<div class="form-group mb-4" >
									<input id="nav3" name="nav3" style="width:200px;margin-left:40px;border:1px solid #6b15b6;" class="form-control" type="text" placeholder="Text navbar" aria-describedby="emailHelp">
								</div> 
							</div>
	              		</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4 mb-4">
	                	<div class="card" style="border:1px solid #6b15b6;">
	                		<div class="card-body">
								<div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
									<div class="icon-container tilt-logo-inner"> 
										<input id="probeUpload" type="file"name="gambar4">
										<i class="fa fa-plus fa-3x" style="color:#fff;"></i>
									</div>
									<img id="probePreview" src=""/>
								</div>

								<hr class="my-4"  style="border:1px solid #6b15b6;">

								<div class="form-group mb-4" >
									<input id="nav4" name="nav4" style="width:200px;margin-left:40px;border:1px solid #6b15b6;" class="form-control" type="text" placeholder="Text Navbar" aria-describedby="emailHelp">
								</div>  
							</div>
	              		</div>
					</div>

					<div class="col-md-4 mb-4">
	                    <div class="card" style="border:1px solid #6b15b6;">
							<div class="card-body">
								<div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
									<div class="icon-container tilt-logo-inner"> 
										<input id="probeUpload" type="file"name="gambar5">
										<i class="fa fa-plus fa-3x" style="color:#fff;"></i>
									</div>
									<img id="probePreview" src=""/>
								</div>

								<hr class="my-4"  style="border:1px solid #6b15b6;">

								<div class="form-group mb-4" >
									<input id="nav5" name="nav5" style="width:200px;margin-left:40px;border:1px solid #6b15b6;" class="form-control" type="text" placeholder="Text Navbar" aria-describedby="emailHelp">
								</div> 
							</div>
	              		</div>
					</div>

					<div class="col-md-4 mb-4">
	                    <div class="card">
							<div class="card-body" style="border:1px solid #6b15b6;">
								<div class="dropbox" data-tilt="true" data-tilt-scale="1.1">
									<div class="icon-container tilt-logo-inner"> 
										<input id="probeUpload" type="file"name="gambar6">
										<i class="fa fa-plus fa-3x" style="color:#fff;"></i>
									</div>
									<img id="probePreview" src=""/>
								</div>

								<hr class="my-4" style="border:1px solid #6b15b6;">

								<div class="form-group mb-4" >
									<input id="nav6" name="nav6" style="width:200px;margin-left:40px;border:1px solid #6b15b6;" class="form-control" type="text" placeholder="Text navbar" aria-describedby="emailHelp">
								</div> 
							</div>
	              		</div>
					</div>
				</div>

				<input type="submit" class="btn btn-primary btn-pill btn-lg" value="Selesai" style="width:1000px;">

				</div>
				</div>
				<!-- End Form Controls -->

		</form>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" >
</script>
<script src="https://unpkg.com/tilt.js@1.1.21/dest/tilt.jquery.min.js">
</script>
<script  src="/upimage/script.js"></script>
@endsection