<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="{{ asset('assets/img/icon.png')}}">

	<title>Undangan Onlen</title>

	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
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
            <li class="nav-item">
            <a class="nav-link navigasi" href="{{route ('register')}}" style="color:  #ffc107;">Daftar</a>
          </li>
        </ul>
      </div>
    </nav>
   <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" style="background: url('{{ asset('assets/img/alhamdulillah.jpg')}}'); background-size: cover; font-family: Arial; padding-top: 150px; padding-bottom: 100px;">
        <div class="container text-white">
          <h1 class="title" style="color:   #ffc107;">Undangan Pernikahan</h1>
          <p></p>
          <p><a class="btn btn-secondary btn-lg pesan" href="#" role="button" style="color: #ffc107;">Pesan Sekarang</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-12 text-dark pt-4 pr-4 pb-4 pl-4" style="background-color: #fff;">
            <h2 align="center">Mengapa Undangan Digital?</h2>
            <div class="container">
            	<div class="row justify-content-center">
            		<img src="{{ asset('assets/img/img.png')}}">
            	</div>
            </div>
          </div>
          <div class="col-md-4">
            <h2>About use</h2>
            <p>Kami disini menyediakan web undangan pernikahan digital dimana web yang kami buat ini bisa mempermudah para mitra yang ingin mempunyai web undangan pernikahan Digital sendiri tidak perlu membuat dari nol disini kami sudah sediakan . </p>
            <p><a class="btn btn-secondary" href="#" role="button" style="color: #ffc107;">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-secondary" href="#" role="button" style="color: #ffc107;">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Contact</h2>
            <p><img src="https://image.flaticon.com/icons/png/512/33/33447.png" height="30px" width="30px"> <a>085862625498</a><br>
                <img src="https://img1.pngdownload.id/20190130/zky/kisspng-gmail-computer-icons-email-google-contacts-gmail-icon-papirus-apps-iconset-papirus-developmen-5c51bc932897e0.7794217015488605631663.jpg" height="30px" width="30px"><br>
                <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" height="45px" width="45px">
            </p>
            <br>

            <p><a class="btn btn-secondary" href="#" role="button" style="color: #ffc107;">View details &raquo;</a></p>
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
