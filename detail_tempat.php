<?php

require_once 'admin/koneksi.php';

if(isset($_GET["q"])) {
  $key = $_GET["q"];

  $detail = mysqli_query($konek, "SELECT * FROM tempat_tb WHERE id_tempat = '$key'");

  $rows = [];

  while ($row = mysqli_fetch_assoc($detail)) {
    $rows[] = $row;
  }

}


?>

<!DOCTYPE html>
<html lang="">
<head>
  <title>Tentang | Pariwisata Leihitu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="style.css">
</head>
<body id="top" style="background-color: #ededed;">

  <!-- IMG OVERLAY -->
  <div class="bgded overlay" style="background-image:url('https://asset.kompas.com/crops/KmCsdeifjsPjEAY4KdKaSLuuQCQ=/0x0:1076x717/750x500/data/photo/2019/10/14/5da434fa8e064.jpg');">
  <div class="wrapper row1 nav-bar">
    <header id="header" class="hoc clear"> 
      <!-- LOGO NAV -->
      <div id="logo" class="fl_left">
        <h1><a href="index.php">Beta Leihitu</a></h1>
      </div>
      
      <!-- NAVBAR -->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.php">Home</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li class="active"><a class="drop" href="#">Tempat</a>
            <ul>
              <li><a href="tempat.php?q=wisata">Wisata</a></li>
              <li><a href="tempat.php?q=sejarah">Sejarah</a></li>
            </ul>
          </li>
          <li><a href="tentang.php">Tentang</a></li>
        </ul>
      </nav>
    </header>
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<!-- END-NAVBAR -->

<div style="width: 800px; height: auto; background-color: white; margin: auto; text-align: center; margin-top: 10px; box-sizing: border-box; padding: 10px; border-radius: 4px;">
  <h6 style="margin: 0; padding: 0;"><?= $rows[0]["nama_tempat"]; ?></h6>
</div>

<!-- KONTENER -->
<div style="width: 800px; margin: 10px auto 0; background-color: white; padding: 10px; text-align: center; border-radius: 4px; ">
  <img src="img/<?= $rows[0]["gambar_tempat"]; ?>">
</div>

<div style="width: 800px; height: auto; background-color: white; margin: auto; margin-top: 10px; margin-bottom: 10px; box-sizing: border-box; padding: 10px; border-radius: 4px;">
  <p style="margin: 0; padding: 0;"><?= $rows[0]["deskripsi_tempat"]; ?></p>
</div>

<div style="width: 800px; height: auto; background-color: white; margin: auto; text-align: center; margin-top: 10px; margin-bottom: 10px; box-sizing: border-box; padding: 10px; border-radius: 4px;">
  <h6>LOKASI</h6> 
  <center><?= $rows[0]["link_map"]; ?></center>
</div>


<!-- FOOTER LOGO -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <img src="img_bg/logo.png">
  </footer>
</div>


<!-- FOOTER -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <p class="fl_left">Copyright &copy; 2020 - All Rights Reserved - <a href="#">Pariwisata Leihitu</a></p>
  </div>
</div>

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>