<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="/assets/css/master.css/css/bootstrap.css">
</head>
<body>

<style type="text/css">
    .navbar-inverse {
    background-color: #3b5998;
    height:300px;
    border: 2px solid #3b5998;
    padding: 7px;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    margin-left: 60px;
    margin-right: 60px;
    margin-top: 20px;
    }
    .navbar-i {
    width: 1300px;
    height:270px;
    border: 5px dotted white;
    border-top-left-radius: 50px;
    border-top-right-radius: 50px;
    margin-left: 7px;
    }
    
    nav > .nav.nav-tabs{
    width: 1130px;
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
    }

    nav > div a.nav-item.nav-link.active:after
    {
    content: "";
    position: relative;
    bottom: -60px;
    left: -10%;
    border: 15px solid transparent;
    border-top-color: #ff4d4d ;
    }
    .tab-content{
    height: 600px;
    background: #cccc;
    line-height: 25px;
    border: 1px solid #ddd;
    border-top:5px solid #ff4d4d;
    padding:30px 25px;
    margin-right:115px;
    margin-left:105px;
    }

    nav > div a.nav-item.nav-link:hover,
    nav > div a.nav-item.nav-link:focus
    {
    border: none;
    background: #ff4d4d;
    color:#fff;
    border-radius:0;
    transition: background 0.20s linear;
    }
    .navbar-int {
    background-color: white;
    height: 830px;
    padding: 30px;
    text-align: center;
    margin-left: 105px;
    margin-right: 115px;
    border: 3px solid #ff4d4d;
    }
    .navbar-int1 {
    background-color: white;
    height: 500px;
    text-align: center;
    margin-left: 105px;
    margin-right: 115px;
    margin-top:30px;
    }
    .navbar-inverse1 {
    background-color: #3b5998;
    height:300px;
    border: 2px solid #3b5998;
    padding: 7px;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    margin-left: 60px;
    margin-right: 60px;
    }
    .navbar-i1 {
    width: 1300px;
    height:270px;
    border: 5px dotted white;
    border-bottom-left-radius: 50px;
    border-bottom-right-radius: 50px;
    margin-left: 7px;
    }
</style>

    <!-- Navbar -->
        <div class="navbar navbar-inverse ">
            <div class="container navbar-i">
               
            </div>
        </div>
    <!-- End Navbar -->

    <!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                  <nav>
                    <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">TENTANG</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">ACARA</a>
                      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">DENAH</a>
                      <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">KONTAK</a>
                    </div>
                  </nav>
                </div>
            </div>
        </div>
    <!-- End Header -->

    <!-- Foto -->
                <div class="navbar-header">
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="navbar navbar-int1 shadow">
                        <div class="container">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <img src="/pesanan/slide1.png" alt="" style="width:720px;height:400px; margin-left:60px; margin-top: 35px;" class="mb-3">
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <img src="/pesanan/slide2.png" alt="" class="mb-3">
                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <img src="/pesanan/slide3.png" alt=""  class="mb-3">
                            </div>
                            <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                <img src="/pesanan/slide4.png" alt=""  class="mb-3">
                            </div>
                        </div>
                    </div>
                </div>
        <!-- End Foto -->    

        <!-- Komentar -->
        <div class="navbar navbar-int">
            <div class="container">
                <div class="navbar-header">

                </div>
            
            </div>
        </div>
        <!-- End Komentar -->

        <!-- Navbar -->
        <div class="navbar navbar-inverse1">
            <div class="container navbar-i1">
               
            </div>
        </div>
        <!-- End Navbar -->

</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>