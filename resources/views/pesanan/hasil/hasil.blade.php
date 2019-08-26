
@section('js')
@if ( $retIp ==  'Show' )

@elseif($retIp == 'Baru')
<script type="text/javascript">
        $('#qrmodal').modal('show');
</script>    
@endif
@stop

@extends('layouts.akhir')

@section('content')
<style type="text/css">
    .atas {
    background-color: #3b5998;
    height:300px;
    border: 2px solid #3b5998;
    padding: 7px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    margin-left: 60px;
    margin-right: 60px;
    margin-top: 35px;
    animation-name: example1;
    animation-duration: 10s;
    position: relative;
    left: 0px;
    top: 0px;
    z-index: 5;
    }
    @keyframes example1 {
    0%   {background-color: #3b5998; top:0px;}
    50%  {background-color: #3b5998; top:745px;}
    }
    .atas1 {
    width: 100%;
    height:270px;
    border: 5px dotted white;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    }
    nav > .nav.nav-tabs{
    border: none;
    color:#fff;
    background:#272e38;
    border-radius:0;
    }
    nav > div a.nav-item.nav-link,
    nav > div a.nav-item.nav-link.active
    {
    border: none;
    padding: 18px 25px;
    color:#fff;
    background:#272e38;
    border-radius:0;  
    border-bottom:5px solid #e74c3c;
    }
    nav > div a.nav-item.nav-link.active:after
    {
    content: "";
    position: relative;
    bottom: -60px;
    left: -10%;
    border: 0px solid transparent;
    border-top-color: #e74c3c ;
    }
    .tab-content{
    height: 595px;
    background: #3b5998;
    line-height: 25px;
    border: ;
    
    }
    nav > div a.nav-item.nav-link:hover,
    nav > div a.nav-item.nav-link:focus
    {
    border: none;
    background: #e74c3c;
    color:#fff;
    border-radius:0;     
    transition: background 0.20s linear;
    }
    .navbar-int1 {
    background-color: white;
    height: 500px;
    text-align: center;
    margin-left: 105px;
    margin-right: 115px;
    margin-top: 25px;
    }
    
    
    .komentar {
    width: 1140px;
    background-color: white;
    height: 830px;
    padding: 30px;
    text-align: center;
    margin-left: 105px;
    margin-right: 115px;
    border-top: 3px solid #ff4d4d;
    border-left: 3px solid #ff4d4d;
    border-right: 3px solid #ff4d4d;
    }
    
    .bawah {
    background-color: #3b5998;
    height:300px;
    border: 2px solid #3b5998;
    padding: 7px;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    margin-left: 60px;
    margin-right: 60px;
    margin-bottom: 35px;
    animation-name: example2;
    animation-duration: 10s;
    position: relative;
    left: 0px;
    bottom: 0px;
    z-index: 10px;
    
    }
    .core{
        animation-name: change;
        animation-duration: 10s;
    }
    @keyframes change{
    0%   {opacity:1;}
    25%   {opacity:0;}
    50%   {opacity:0;}
    75%   {opacity:0;}
    100%  {opacity:1;}
    }
    @keyframes example2{
    0%   {background-color: #3b5998; bottom:0px;}
    50%  {background-color: #3b5998; bottom:745px;}
    }
    .navbar-i1 {
    width: 100%;
    height:270px;
    border: 5px dotted white;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    

    }
    .container1{
        margin: 0;
        padding: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%); 
    }
    .btns{
        position: relative;
        display: block;
        width: 100px;
        height: 100px;
        text-align: center;
        line-height: 60px;
        background: #ff4d4d;
        border-radius: 50%;
        font-size: 27px;
        color: #000;
        transition: .5s;
        color: rgba(255,255,255,0.7);
        box-shadow: 0px 3px 0px #b2a98f, 0px 14px 10px rgba(0,0,0,0.15), 0px 24px 2px rgba(0,0,0,0.1),0px 34px 30px rgba(0,0,0,0.1);
    }
    &:before{
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: #fff;
        transition: .5s;
        transform: scale(.9);
        z-index: -1;
    }
    &:hover:before{
        transform: scale(1.15);
        box-shadow: 0 0 15px #fff;
    }
    &:hover{
        animation-name: ring 1s infinite;
        color: red;
        box-shadow: 0 0 5px #fff;
        text-shadow: 0 0 5px #fff;
    }
    
    @keyframes ring {
    0%   {transform: scale(1)}
    10%  {transform: scale(1.1)} 
    20%  {transform: scale(1)}
    30%  {transform: scale(1.1)}
    40%  {transform: scale(1)}
    50%  {transform: scale(1.1)}  
    60%  {transform: scale(1)}
    70%  {transform: scale(1.1)}
    80%  {transform: scale(1)}
    90%  {transform: scale(1.1)} 
    100% {transform: scale(1)}
    }
    
    .list{
        width: 100%;
       height: 100%;
       max-height:560px;

    }
    .font{
        text-transform: uppercase;
        font-family:Arial;
        color: white;
    }
    
    

</style>

         <div class="modal fade" id="qrmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Kehadiran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Apakah Anda Akan Hadir??
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak </button>
                    <button type="button" class="btn btn-primary">Ya</button>
                  </div>
                </div>
              </div>
            </div>

      
    <!-- Navbar -->
        <div class="navbar atas">
            <div class="container atas1">
               
            </div>
        </div>
    <!-- End Navbar -->
<div class="core">
    <!-- Header -->
        
    <!-- End Header -->

    <!-- Foto -->
                <div class="navbar-header ">
                    <div class="container ">
                         <div class="row">
                            <div class="col-md-12">
                 
                                <!-- Button trigger modal -->
                  
                          <!-- Nav tabs -->
                        @foreach($type as $tp)
                        @if($tp->id == $data->type_id)
                        @if($tp->jumlah_slide == 4)

                    <nav>    
                      <ul class="nav nav-tabs nav-fill" role="tablist" id="nav-tab">
                        <li class="nav-item">
                          <a class="nav-link active font" id="nav-home-tab" data-toggle="tab" href="#menu1">{{$data->slide1}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu2" >{{$data->slide2}}</a>
                        </li><li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu3">{{$data->slide3}}</a>
                        </li><li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu4">{{$data->slide4}}</a>
                        </li>
                      </ul>
                    </nav>

  <!-- Tab panes -->

                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div id="menu1" class="container tab-pane active">
                      <p><img src="{{asset('img/'.$data->gambar1)}}" class="list"></p>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar2)}}" class="list"></p>
                    </div>
                    <div id="menu3" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar3)}}" class="list"></p>
                    </div>
                    <div id="menu4" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar4)}}" class="list"></p>
                    </div>
                </div>
                    @elseif($tp->jumlah_slide == 5)
                        <nav>    
                      <ul class="nav nav-tabs nav-fill" role="tablist" id="nav-tab">
                        <li class="nav-item">
                          <a class="nav-link active font" id="nav-home-tab" data-toggle="tab" href="#menu1">{{$data->slide1}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu2">{{$data->slide2}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu3">{{$data->slide3}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu4">{{$data->slide4}}</a>
                        </li><li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu5">{{$data->slide5}}</a>
                        </li>
                      </ul>
                    </nav>

  <!-- Tab panes -->

                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div id="menu1" class="container tab-pane active">
                      <p><img src="{{asset('img/'.$data->gambar1)}}" class="list"></p>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar2)}}" class="list"></p>
                    </div>
                    <div id="menu3" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar3)}}" class="list"></p>
                    </div>
                    <div id="menu4" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar4)}}" class="list"></p>
                    </div>
                    <div id="menu5" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar5)}}" class="list"></p>
                    </div>
                </div>
                @elseif($tp->jumlah_slide == 6)
                    <nav>    
                      <ul class="nav nav-tabs nav-fill" role="tablist" id="nav-tab">
                        <li class="nav-item">
                          <a class="nav-link active font" id="nav-home-tab" data-toggle="tab" href="#menu1">{{$data->slide1}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu2">{{$data->slide2}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu3">{{$data->slide3}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu4">{{$data->slide4}}</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu5">{{$data->slide5}}</a>
                        </li>
                         <li class="nav-item">
                          <a class="nav-link font" data-toggle="tab" href="#menu6">{{$data->slide6}}</a>
                        </li>
                      </ul>
                    </nav>

  <!-- Tab panes -->

                  <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <div id="menu1" class="container tab-pane active">
                      <p><img src="{{asset('img/'.$data->gambar1)}}" class="list"></p>
                    </div>
                    <div id="menu2" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar2)}}" class="list"></p>
                    </div>
                    <div id="menu3" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar3)}}" class="list"></p>
                    </div>
                    <div id="menu4" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar4)}}" class="list"></p>
                    </div>
                    <div id="menu5" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar5)}}" class="list"></p>
                    </div>
                    <div id="menu6" class="container tab-pane fade">
                      <p><img src="{{asset('img/'.$data->gambar6)}}" class="list"></p>
                    </div>
                </div>

                     @endif
                     @endif

                    @endforeach     
         
            </div> 
         </div>
    </div>   
                

        <!-- End Foto -->    

        <!-- Komentar -->
        <!-- <div class="navbar komentar">
            <div class="container">
                <div class="navbar-header">
                   
                </div>     
            </div>
        </div> -->
        <!-- End Komentar -->
    </div>
</div>

        <!-- Navbar -->
        <div class="navbar bawah">
            <div class="container navbar-i1">
                <div class="container1">
                    <a href="#" class="btns"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>

        <!-- End Navbar -->
        
@endsection
       


