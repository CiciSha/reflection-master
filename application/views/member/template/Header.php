<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reflection Studio Member</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300i,400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url("assets/fonts/icomoon/style.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/magnific-popup.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/jquery-ui.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.carousel.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/owl.theme.default.min.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/lightgallery.min.css") ?>">    
  <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap-datepicker.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/fonts/flaticon/font/flaticon.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/swiper.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/aos.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("assets/css/style_member.css") ?>">

  <script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
  integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
  crossorigin=""/>
  <!-- Make sure you put this AFTER Leaflet's CSS -->
  <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
  integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
  crossorigin=""></script>
  <style>
    #map { height: 400px;
 }
  </style>
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <!-- bagian untuk navbar -->
    <header class="site-navbar py-3" role="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-xl-2">
            <h1 class="mb-0">
              <img src="<?php echo base_url("assets/image/logo reflection.png") ?>" style="max-width: 50%;">

            </div>
            <div class="col-10 col-md-8 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right text-lg-center" role="navigation">

                <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block pl-0">
                  <li class="active"><a href="<?php echo base_url("home") ?>">Beranda</a></li>

                  <li class="has-children">
                    <a href="#">Paket</a>
                    <ul class="dropdown">
                     <?php foreach ($paket as $key => $value): ?>
                      <li><a href="<?php echo base_url("member/detail_paket/$value[id_paket]") ?>"><?php echo $value['nama_paket'] ?></a></li>
                    <?php endforeach ?>
                  </ul>
                </li>
                <li><a href="<?php echo base_url("tentang") ?>">Tentang</a></li>
                <li><a href="<?php echo base_url("panduan") ?>">Panduan</a></li>
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right">
            <div class="d-none d-xl-inline-block">
              <ul class="site-menu js-clone-nav ml-auto list-unstyled d-flex text-right mb-0" data-class="social">

                <?php if (isset($_SESSION['member'])): ?>
                  <div class="container">
                    <div id="wrapper">
                      <nav class="navbar navbar-expand-lg d-print-none" style="margin-right: 70px;">
                        <a class="navbar-brand" href="#"><img style="max-width: 25px; height: 25px;" class="rounded"  src="<?php echo base_url("./assets/image/icon/user1.png") ?>"></i></a>
                        <button  type="button" class="navbar-toggler" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportContent">
                          <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown active">
                              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding: 0px">
                               <!--  <i class="fas fa-user-circle"></i>  -->
                             </a>
                             <div class="dropdown-menu" >
                              <a class="dropdown-item" href="<?php echo base_url("member") ?>">Informasi Member</a>
                              <a class="dropdown-item" href="<?php echo base_url("member/riwayat") ?>">Riwayat Pemesanan</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo base_url("home/logout") ?>">Logout</a>
                            </div>  
                          </li>
                        </ul>
                      </div>
                    </nav>
                  </div>

                <?php else: ?>
                  <div class="row">
                   <li class="col-md-6">
                    <a href="<?php echo base_url("login") ?>" class="pl-3 pr-3">LOGIN</a>
                  </li>  
                </div>
                <li class="col-md-6">
                  <a href="<?php echo base_url("registrasi") ?>" class="pl-0 pr-3"> REGISTER</a>
                </li>   
              <?php endif ?>
            </ul>
          </div>

          <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 30px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>
    </div>  
  </header>
