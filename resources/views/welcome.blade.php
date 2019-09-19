<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('assets/img/icon.png')}}">
  <link rel="stylesheet" type="text/css" href="/assets/vendor/font-awesome/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/theme.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <title>Undangan Onlen</title>

  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">

<style type="text/css">
  .rata{
    
  }
</style>

</head>
<body>
  <nav id="menu" class="navbar navbar-expand-lg navbar-dark" style="padding-top: 15px; transition-duration: 0.6s; box-shadow: 0 5px 12px -8px rgba(0, 0, 0,0.9); background-color: #3b556f; ">
      <a class="navbar-brand" href="#" style="color:  #ffc107;">Undangan Pernikahan Digital</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link navigasi" href="{{url ('welcome')}}" style="color:  #ffc107;"><style >a:hover{background: #f8f9fa;}</style>Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{ url ('demo')}}" style="color:  #ffc107;">Demo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link navigasi" href="{{route ('login')}}" style="color:  #ffc107;">Masuk</a>
          </li>
        </ul>
      </div>
    </nav>
   <main role="main">
      @guest

      @else
          <script type="text/javascript">location.href = "{{route('home')}}";</script>
      @endguest
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="background: url('{{ asset('assets/img/alhamdulillah.jpg')}}'); background-size: cover; font-family: Arial; padding-top: 150px; padding-bottom: 100px;">
        <div class="container text-white">
          <h1 class="title" style="color:   #ffc107;">ndangan Pernikahan</h1>
          <p></p>
          <p><a class="btn btn-secondary btn-lg pesan" href="https://wa.me/6285862625498?text=Isi Pesan" role="button" style="color: #ffc107;">Pesan Sekarang</a></p>
        </div>
      </div>
      <h3 align="center">Mengapa Undangan Digital?</h3><br>
      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

              <div class="col">
                <div class="card" style="width: 18rem;">
 
                    <div class="card-body">
                        <h1 clss="card-title" width="200px" align="center"><i class="fas fa-mobile-alt  " aria-hidden="true"></i></h1> 
                        <p class="card-text">Tamu undangan dapat membuka undangan anda kapan saja.</p>
                          
                    </div>
              </div>
            </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
  
                  <div class="card-body">
                    <h1 class="card-title" align="center"><i class="fa fa-rss-square"></i></h1>
                      <p class="card-text">Hanya dengan berbagi link undangan anda tersebar cepat.</p>
                        
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h1 class="card-title" align="center"><i class="fa fa-signal"></i></h1>
                      <p class="card-text">Hanya dengan itungan menit Undangan selesai di sebarkan.</p>
                        
                  </div>
                </div>
              </div>
        </div>
      </div><br>
            <div class="container">
              <div class="row justify-content-center">
            <div class="col-md-4">
                <h2>About use</h2>
                  <p>Kami disini menyediakan web undangan pernikahan digital dimana web yang kami buat ini bisa mempermudah para mitra yang ingin mempunyai web undangan pernikahan Digital sendiri tidak perlu membuat dari nol disini kami sudah sediakan . </p>
            </div>
          <div class="col-md-4">
                <h2>Info</h2>
                  <p>Kami menyediakan web undangan dan anda bisa membuat model desai undangan yang anda inginkan dan membatu anda untuk para desain undangan kalaian bisa membuat desain undangan terlebih dahulu dan tinggal  masukan di web kami  .</p>
          </div>
          <div class="col-md-4">
                <h2>Contact</h2>
                  <p><img src="https://image.flaticon.com/icons/png/512/33/33447.png" height="30px" width="30px"> <a href="https://wa.me/6285862625498?text=Isi Pesan"> Chat via whatshapp</a><br>
                    <img src="https://icon-library.net/images/icon-fb/icon-fb-10.jpg" height="40px" width="40px"><a href="http://www.facebook.com/share.php?u=http://orangorangan.com"> Facebook</a><br>
                    <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" height="45px" width="45px"><a href="http://twitter.com/intent/tweet?url=http://orangorangan.com"> Twitter</a>
                  </p>


            <br>
          </div>
                
              </div>
            </div>

        <hr>

      </div> <!-- /container -->

    </main>
          <a class="wac-stickytext wac-leftm" target="_blank" href=""><img class="wac-wa" src="{{ asset('assets/img/wa.png')}}">
          </a>
            <footer class="pt-4 pb-4 pl-4 pr-4 text-white" style="background: #3b556f;">
              <p class="container">&copy; Undangan Digit 2019</p>
            </footer>

      <script src="{{asset('js/jquery-slim.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
  <!--<script>
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  var menu = document.getElementById("menu");
    if (prevScrollpos > currentScrollPos) {
      menu.style.top = "0";
      menu.style.background = "#fff";
      menu.setAttribute("class","navbar navbar-expand-lg navbar-light fixed-top");
    } else {
      menu.style.top = "-10px";
      menu.style.background = "#3b556f";
      menu.setAttribute("class","navbar navbar-expand-lg navbar-dark fixed-top");
       }
      prevScrollpos = currentScrollPos;
  }
</script>-->
</body>
</html> 
