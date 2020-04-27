<!doctype html>
<html lang="en">
<head>
 <title>Reflection Studio</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css");?>">

 <link href="<?php echo base_url("assets/css/bootstrap.min.css") ?>" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url("assets/css/dataTables.css");?>">
 <script src="<?php echo base_url("assets/js/jquery-3.3.1.min.js") ?>"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <style type="text/css">
  ${demo.css}
</style>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
   <nav id="sidebar">
    <div class="p-4 pt-5">
      <img class="img logo rounded-circle mb-5" src="<?php echo base_url("./assets/image/pic.png") ?>">

      <ul class="list-unstyled components mb-5">

        <li class="active">
         <a href="<?php echo base_url ("admin/home") ?>">Beranda</a>
       </li>

       <li>
         <a href="<?php echo base_url ("admin/member") ?>">Member</a>
       </li>

       <li>
        <a href="<?php echo base_url ("admin/paket") ?>">Paket</a>
      </li>

      <li>
        <a href="<?php echo base_url ("admin/portofolio") ?>">Portofolio</a>
      </li>

      <li>
        <a href="<?php echo base_url ("admin/Pemesanan") ?>">Pemesanan</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/laporan/harian") ?>">Laporan Harian</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/laporan/mingguan") ?>">Laporan Mingguan</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/laporan/bulanan") ?>">Laporan Bulanan</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/laporan/tahunan") ?>">Laporan Tahunan</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/studio") ?>">Studio</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/testimoni") ?>">Testimoni</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/pengaturan") ?>">Pengaturan</a>
      </li>
      <li>  
        <a href="<?php echo base_url ("admin/pengaturan/ubah_password") ?>">Ubah Password</a>
      </li>
      <li>
        <a href="<?php echo base_url ("admin/home/logout") ?>">Logout</a>
      </li>

    </ul>
  </div>
</nav>

<!-- Page Content  -->
<div id="content" class="p-3 p-md-4">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button type="button" id="sidebarCollapse" class="btn btn-primary">
     <!--  <i class="fa fa-bars"></i> -->
     <span class="sr-only">Toggle Menu</span>
   </button>
   <div class="container">

