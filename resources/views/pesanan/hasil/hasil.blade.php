
@section('js')
@if ( $retIp ==  'Close' )

@elseif($retIp == 'Baru')
<script type="text/javascript">
        $('#qrmodal').modal('show');
</script>    
@endif
<script>
    function modal()
    {
        $('#qrmodal').modal('hide');
    }
</script>
<script>
        $('#album').turn({
            gradients: true,
            acceleration: true
            });

    </script>

@stop

@extends('layouts.akhir')

@section('content')
<style type="text/css">


@media screen and (min-width: 240px) and (max-width: 320px) {
      #album {
      margin: auto;
      max-width: 230px;
      max-height: 150px;
      position: relative;
      left:0.5%;
      /*right: 100px;*/
        /*top: 30px;*/
  }
}
@media screen and (min-width: 320px) and (max-width: 480px) {
      #album {
      margin: auto;
      max-width: 260px;
      max-height: 180px;
      position: relative;
      left:0.5%;
      top: 30px;
  }
}
@media screen and (min-width: 480px) and (max-width: 800px) {
      #album {
      margin: auto;
      max-width: 400px;
      max-height: 300px;
      position: relative;
      left:1%;
      top: 30px;
  }
}
@media screen and (min-width: 480px) and (max-width: 854px) {
      #album {
      margin: auto;
      max-width: 400px;
      max-height: 300px;
      position: relative;
      left:1%;
      top: 30px;
  }
}
@media screen and (min-width:640px ) and (max-width:960px ){
      #album {
      margin-top: auto;
      max-width: 500px;
      max-height: 400px;
      position: relative;
      /*left:10%;*/
      /*right: 20%;*/
}
}

@media screen and (min-width: 768px) and (max-width: 1024px) {
      #album {
      margin-top: auto;
      max-width: 550px;
      max-height: 450px;
      position: relative;
      left:0.5%;
      bottom: 200px;
  }
}

    body {
      background-image:url('{{asset('img/'.$data->background)}}');
           overflow: hidden;
            -webkit-background-size: 100% 100%;
            background-size: 100% 100%;
            background-position: center center;
            background-repeat: no-repeat;
            height: 100%;
            margin: 0;
            user-select: none;
            -webkit-tap-highlight-color:transparent;
    }
    #album {
            margin: auto;
            width: 700px;
            height: 500px;
            top: 10%;
          /*right: 90px;*/
          left: 200px;
            

        }

        #album .turn-page{
            -webkit-background-size:100% 100%;
            background-size:100% 100%;
        }
        .img{
          background-repeat: no-repeat;
          background-size:100% 100%;

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
                    <a href="@if (!empty($client_id) && !empty($thisIp)) {{route('pdf',['client_id' => $client_id,'ip' => $thisIp])}}
                       @endif ">  
                    <button type="button" class="btn btn-primary" onclick="modal()" >Ya</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
    
            <div class="core">
                <div class="navbar-header ">
                         <div class="row">
                            <div class="col-sm-12">
                 
                        @foreach($type as $tp)
                        @if($tp->id == $data->type_id)
                        @if($tp->jumlah_slide == 4)
                        <div class="container">
                          <div class="row justify">
                            <div class="col-12 col-sm-6" > 
                                <div id="album">
                                    <div class="img" style="background-image: url('{{asset('img/'.$data->gambar1)}}');"></div>
                                    <div class="img" style="background-image: url('{{asset('img/'.$data->gambar2)}}');"></div>
                                    <div class="img" style="background-image: url('{{asset('img/'.$data->gambar3)}}');"></div>
                                    <div class="img" style="background-image: url('{{asset('img/'.$data->gambar4)}}');"></div>
                                </div>
                              <!-- </div> -->
                              </div>
                            </div>
                          </div>
                    <!-- awal undangan yang berjumlah 5 -->
                    @elseif($tp->jumlah_slide == 5)
             <div class="container">
                 <div class="row justify">
                    <div class="col-12 col-sm-6" >
                    <div id="album">
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar1)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar2)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar3)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar4)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar5)}}');"></div>
                        <div></div>
                    </div>
                   </div>
                 </div>
                </div>    
                    <!-- akhir undangan yang berjumlah 5 -->
                    <!-- awal undangan yang berjumlah 6 -->
                @elseif($tp->jumlah_slide == 6)
             <div class="container">
                <div class="row justify">
                  <div class="col-12 col-sm-6" >
                    <div id="album">
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar1)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar2)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar3)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar4)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar5)}}');"></div>
                        <div class="img" style="background-image: url('{{asset('img/'.$data->gambar6)}}');"></div> 
                    </div>
                  </div>
                 </div>
                </div>    
            
                     @endif
                    <!-- akhir undangan yang berjumlah 6 -->
                     @endif

                    @endforeach     
         
            </div> 
         </div>
    </div>
</div>

        
@endsection
       


