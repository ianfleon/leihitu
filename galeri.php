<?php

require 'admin/koneksi.php';

$galeri = mysqli_query($konek, "SELECT * FROM galeri_tb");


?>

<!DOCTYPE html>
<html lang="">
<head>
  <title>Galeri | Pariwisata Leihitu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="style.css">
</head>
<body id="top">

<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('https://asset.kompas.com/crops/KmCsdeifjsPjEAY4KdKaSLuuQCQ=/0x0:1076x717/750x500/data/photo/2019/10/14/5da434fa8e064.jpg');">
<div> 
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Beta Leihitu</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="galeri.php">Galeri</a></li>
          <li><a class="drop" href="#">Tempat</a>
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
</div>

<!-- KONTENER -->
<div class="kontener-galeri">
  
  <?php foreach ($galeri as $data) : ?>

  <div class="box-img">
    <img src="img/<?= $data["gambar_galeri"]; ?>">
    <div class="text-block"><p><?= $data["deskripsi_gambar"]; ?></p></div>
  </div>

  <?php endforeach; ?>

</div>
<!-- END - KONTENER -->

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