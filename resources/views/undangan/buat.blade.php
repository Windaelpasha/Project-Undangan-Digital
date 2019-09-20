<!-- Modal -->

@extends('layouts.admin')

<style>
    .fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
    color: white; 
    background-color: #cd38ff;
    margin-left:67px;

}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.bingkai{
    width: 282px; 
    height: 250px;
     border-top: 10px solid #b000eb;
     border-bottom: 10px solid #b000eb;
     border-left: 10px solid #6e16bb;
     border-right: 10px solid #6e16bb;
     margin-bottom: 10px;
     
}
.nama{
    margin-left:180px;
     color:#6b15b6;

     
}

.bord:hover
{
     
    border-color :red;
}

</style>
<div class="row">
    <div class="col-md-12 mb-4">
        <!-- Form Controls -->

        @section('content')
        <div class="u-body">
            <div class="card">
                <header class="card-header" style="color: #6b15b6;">
                    <h2 class="h3 card-header-title text-center"> Pembuatan </h2>
                </header>
                <div class="card-body">
                    <form role="form" method="POST" action="{{route('buat.create',$client->id)}}" enctype="multipart/form-data">
                        {{@csrf_field()}}
                        <p align="center" style="">
                            
                    <label style="margin-right: 100px; color:#6b15b6; ">  NAMA PEMESAN  </label>
                    <label style="color:#6b15b6; ">JUMLAH HALAMAN </label>
                    <br>
                            <input type="text" name="nama" value="{{$client->nama}}" readonly="" class="text-center" style="color: #6b15b6; width: 200px;">
                            |
                           <input type="text" name="nama" value="{{$client->type['jumlah_slide']}}" readonly="" class="text-center " style="color: #6b15b6; width: 200px;">
                        </p>
                        <br>
                       
                        @foreach($type as $data)
                        @if($data->id == $client->type_id)
                        @if($client->type['jumlah_slide'] == 4 )
                        <!-- background -->
                        <div class="row" align="center">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide1" class="bord  form-control" placeholder="Masukan Background di Bawah ini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 240px; margin-right: 200px;"  readonly></li>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="bingkai" style="width: 350px; height: 300px; margin-right: 200px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="background">
                                        </div>
                                        <div class="fileUpload btn " style="margin-right: 90px;">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="background" name="background" class="upload" type="file" onchange="showBackground.call(this)">
                                       </div>
                                    </div>
                                </div>
                            </div>
                        <!-- background -->
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide1" class="bord  form-control" placeholder="Masukan Halaman 1 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly="" readonly></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img1">
                                        </div>
                                        <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar1" name="gambar1" class="upload" type="file" onchange="showG.call(this)">
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide2" class="bord form-control" placeholder="Masukan Halama 2 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img2">
                                        </div>
                                    <div class="fileUpload btn ">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar2" name="gambar2" type="file" class="upload" onchange="showA.call(this)">
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="nama control-label ">
                                        <li class="fa"><input type="text" name="slide3" class="bord form-control" placeholder="Masukan Halaman 3 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img3">
                                        </div>
                                         <div class="fileUpload btn ">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar3" name="gambar3" type="file" class="upload" onchange="showM.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5 ">
                                <div class="form-group">
                                    <label class="nama control-label">
                                        <li class="fa"><input type="text" name="slide4" class="bord form-control" placeholder="Masukan Halaman 4 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img4">
                                        </div>
                                         <div class="fileUpload btn ">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar4" name="gambar4" type="file" class="upload" onchange="showB.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($client->type['jumlah_slide'] == 5)
                        <div class="row" align="center">
                            <!-- background -->
                        <div class="col-12">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide1" class="bord  form-control" placeholder="Masukan Background di Bawah ini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 240px; margin-right: 200px;"  readonly></li>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="bingkai" style="width: 350px; height: 300px; margin-right: 200px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="background">
                                        </div>
                                        <div class="fileUpload btn " style="margin-right: 90px;">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="background" name="background" class="upload" type="file" onchange="showBackground.call(this)">
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- background -->
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="nama control-label" style="">
                                        <li class="fa"><input type="text" name="slide1" class="bord form-control" placeholder="Masukan Halaman 1 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img1">
                                        </div>
                                        <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar1" name="gambar1" class="upload" type="file" onchange="showG.call(this)">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5">
                                <div class="form-group">
                                    <label class="nama control-label" style="">
                                        <li class="fa"><input type="text" name="slide2" class="bord form-control" placeholder="Masukan Halaman 2 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img2">
                                        </div>
                                        <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar2" name="gambar2" type="file" class="upload" onchange="showA.call(this)">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="nama control-label " >
                                        <li class="fa"><input type="text" name="slide3" class="bord form-control" placeholder="Masukan Halaman 3 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img3">
                                        </div>
                                          <div class="fileUpload btn ">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar3" name="gambar3" type="file" class="upload" onchange="showM.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5 ">
                                <div class="form-group">
                                    <label class="nama control-label">
                                        <li class="fa"><input type="text" name="slide4" class="bord form-control" placeholder="Masukan Halaman 4 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img4">
                                        </div>
                                        <div class="fileUpload btn ">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar4" name="gambar4" type="file" class="upload" onchange="showB.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 ">
                                <div class="form-group">
                                    <label class="control-label" style="margin-right:; color:#6b15b6;">
                                        <li class="fa"><input type="text" name="slide5" class="bord form-control" placeholder="Masukan Halaman 5 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img5">
                                        </div>
                                        <div class="fileUpload btn " style="margin-right: 180px;">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar5" name="gambar5" type="file" class="upload" onchange="showE.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @elseif($client->type['jumlah_slide'] == 6)
                        <div class="row" align="center">
                            <!-- background -->
                                 <div class="col-12">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide1" class="bord  form-control" placeholder="Masukan Background di Bawah ini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 240px; margin-right: 200px;"  readonly></li>
                                    </label>
                                    <div class="col-md-5">
                                        <div class="bingkai" style="width: 350px; height: 300px; margin-right: 200px;">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="background">
                                        </div>
                                        <div class="fileUpload btn " style="margin-right: 90px;">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="background" name="background" class="upload" type="file" onchange="showBackground.call(this)">
                                       </div>
                                    </div>
                                </div>
                            </div>
                       
                            <!-- background -->
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="nama control-label">
                                        <li class="fa"><input type="text" name="slide1" class="bord form-control " placeholder="Masukan Halaman 1 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px; " readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img1">
                                        </div>
                                    <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar1" name="gambar1" class="upload" type="file" onchange="showG.call(this)">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5">
                                <div class="form-group">
                                    <label class="nama control-label">
                                        <li class="fa"><input type="text" name="slide2" class="bord form-control" placeholder="Masukan Halaman 2 Disini " style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px; " readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img2">
                                        </div>
                                             <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar2" name="gambar2" type="file" class="upload" onchange="showA.call(this)">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-5">
                                <div class="form-group">
                                    <label class="nama control-label ">
                                        <li class="fa"><input type="text" name="slide3" class="bord form-control" placeholder="Masukan Halaman 3 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px; " readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img3">
                                        </div>
                                      <div class="fileUpload btn " style="">
                                         <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar3" name="gambar3" type="file" class="upload" onchange="showM.call(this)" style="">
                                     </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5 ">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide4" class="bord form-control" placeholder="Masukan Halaman 4 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img4">
                                        </div>
                                      <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar4" name="gambar4" type="file" class="upload" onchange="showB.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5 ">
                                <div class="form-group">
                                    <label class="nama control-label">
                                        <li class="fa"><input type="text" name="slide5" class="bord form-control" placeholder="Masukan Halaman 5 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img5">
                                        </div>
                                             <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar5" name="gambar5" type="file" class="upload" onchange="showE.call(this)" style="">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-5">
                                <div class="form-group">
                                    <label class="nama control-label" >
                                        <li class="fa"><input type="text" name="slide6" class="bord form-control" placeholder="Masukan Halaman 6 Disini" style="border-top: none; border-right: none; border-left: none; border-radius: 0px; width: 200px;" readonly=""></li>
                                    </label>
                                    <br>
                                    <div class="col-md-4">
                                        <div class="bingkai">
                                            <img src="https://nnpd.cjexpress.co.th/n/files/default.png" alt="" style="width: 100%; height: 100%;" id="img6">
                                        </div>
                                             <div class="fileUpload btn " style="">
                                            <span><i class="fa fa-upload"></i>  Upload Image   </span>
                                        <input id="gambar6" name="gambar6" type="file" class="upload" onchange="showR.call(this)">
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary" style="margin-left: 800px; margin-top: 100px;">
                            <li class="fa">Simpan</li>
                        </button>
                        @endif

                        @endforeach
                    </form>
                </div>
            </div>
        </div>
        <!-- End Form Controls -->


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
            function showBackground() {
                if (this.files && this.files[0]) {
                    var img = new FileReader();
                    img.onload = function(data) {
                        var image = document.getElementById("background");
                        image.src = data.target.result;
                        image.style.display = "block";
                    }
                }
                img.readAsDataURL(this.files[0]);
            }
        </script>
    </div>
    <!-- END PREVIEW -->
    @endsection