<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <select name="" id="">
                    <option value="">test</option>
                    <option value="">test 1</option>
                </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="simpan">Save changes</button>
            </div>
        </div>
    </div>
</div> -->

@extends('layouts.admin')

@section('content')

<!-- Form Controls -->
<form role="form" method="post" action="" enctype="multipart/form-data">
    {{@csrf_field()}}
    <div class="row">
        <div class="col-md-12 mb-4">
            <div class="card">
                <header class="card-header" style="border: px solid #6b15b6;color: #6b15b6;">
                    <h2 class="h3 card-header-title text-center"> Pembuatan </h2>
                </header>
                <!-- <div class="card-body">
						<div class="form-group mb-4">
							<label for="inputRightIcon">Name</label>
							<span class="form-icon-wrapper">
								<span class="form-icon form-icon--right"> -->
                <!-- <i class="fa fa-globe form-icon__item"></i> -->
                <!-- </span>
								<select name="type" id="">
									<option class="form-controller form-icon-input-right" value=""></option>
								</select>
							</span>
						</div> -->
                <div class="card-body">
                    <div class="form-group mb-4">
                        <label for="inputRightIcon"></label>
                        <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                                <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                            </span>
                            <img src="" alt="" style="display:none;" height="100px" id="img1">
                            <input id="gambar1" name="gambar1" type="file" onchange="showG.call(this)">
                        </span>
                    </div>
                    <div class="form-group mb-4">
                        <label for="inputRightIcon"></label>
                        <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                                <!-- <i class="fa fa-globe form-icon__item"></i> -->
                            </span>
                            <img src="" alt="" style="display:none;" height="100px" id="img2">
                            <input id="gambar2" name="gambar2" type="file" class="form-control-file" onchange="showA.call(this)">
                        </span>
                    </div>
                    <div class=" form-group mb-4">
                        <label for="inputRightIcon"></label>
                        <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                                <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                            </span>
                            <img src="" alt="" style="display:none;" height="100px" id="img3">
                            <input id="gambar3" name="gambar3" type="file" class="form-control-file" onchange="showM.call(this)">
                        </span>
                    </div>
                    <div class=" form-group mb-4">
                        <label for="inputRightIcon"></label>
                        <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                                <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                            </span>
                            <img src="" alt="" style="display:none;" height="100px" id="img4">
                            <input id="gambar4" name="gambar4" type="file" class="form-control-file" onchange="showB.call(this)">
                        </span>
                    </div>
                    <div class=" form-group mb-4">
                        <label for="inputRightIcon"></label>
                        <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                                <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                            </span>
                            <img src="" alt="" style="display:none;" height="100px" id="img5">
                            <input id="gambar5" name="gambar5" type="file" class="form-control-file" onchange="showE.call(this)">
                        </span>
                    </div>
                    <div class=" form-group mb-4">
                        <label for="inputRightIcon"></label>
                        <span class="form-icon-wrapper">
                            <span class="form-icon form-icon--right">
                                <!-- <i class="fa fa-map-marker form-icon__item"></i> -->
                            </span>
                            <img src="" alt="" style="display:none;" height="100px" id="img6">
                            <input id="gambar6" name="gambar6" type="file" class="form-control-file" onchange="showR.call(this)">
                        </span>
                    </div>
                    <input class=" btn btn-primary" type="submit" name="simpan" value="Simpan" style="margin-left: 920px;" data-toggle="modal" data-target="#exampleModalLong">
                </div>
            </div>
        </div>
        <!-- End Form Controls -->
</form>
<br>


<!-- PREVIEW -->
<script type="text/javascript">
    function showG() {
        if (this.files && this.files[0]) {
            var img = new FileReader();
            img.onload = function(data) {
                var image = document.getElementById("img1");
                image.src = data.target.result;
                image.style.display = "block";
            }
        }
        img.readAsDataURL(this.files[0]);
    }

    function showA() {
        if (this.files && this.files[0]) {
            var img = new FileReader();
            img.onload = function(data) {
                var image = document.getElementById("img2");
                image.src = data.target.result;
                image.style.display = "block";
            }
        }
        img.readAsDataURL(this.files[0]);
    }

    function showM() {
        if (this.files && this.files[0]) {
            var img = new FileReader();
            img.onload = function(data) {
                var image = document.getElementById("img3");
                image.src = data.target.result;
                image.style.display = "block";
            }
        }
        img.readAsDataURL(this.files[0]);
    }

    function showB() {
        if (this.files && this.files[0]) {
            var img = new FileReader();
            img.onload = function(data) {
                var image = document.getElementById("img4");
                image.src = data.target.result;
                image.style.display = "block";
            }
        }
        img.readAsDataURL(this.files[0]);
    }

    function showE() {
        if (this.files && this.files[0]) {
            var img = new FileReader();
            img.onload = function(data) {
                var image = document.getElementById("img5");
                image.src = data.target.result;
                image.style.display = "block";
            }
        }
        img.readAsDataURL(this.files[0]);
    }

    function showR() {
        if (this.files && this.files[0]) {
            var img = new FileReader();
            img.onload = function(data) {
                var image = document.getElementById("img6");
                image.src = data.target.result;
                image.style.display = "block";
            }
        }
        img.readAsDataURL(this.files[0]);
    }
</script>
<!-- END PREVIEW -->
@endsection