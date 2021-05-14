<?php 

// KONEKSI DB
require 'admin/koneksi.php';

if(isset($_GET["q"])) {

  $key = $_GET["q"];

  $tempat = mysqli_query($konek, "SELECT * FROM tempat_tb WHERE kategori = '$key' ");

  $rows = [];

  while ($row = mysqli_fetch_assoc($tempat)) {
    $rows[] = $row;
  }

} else {
  // QUERY SQL
  $rows = mysqli_query($konek, "SELECT * FROM tempat_tb");
}

?>


<!DOCTYPE html>
<html lang="">
<head>
  <title>Tempat | Pariwisata Leihitu</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="style.css">
</head>
<body id="top">
  <!-- IMG OVERLAY -->
  <div class="bgded overlay" style="background-image:url('https://asset.kompas.com/crops/KmCsdeifjsPjEAY4KdKaSLuuQCQ=/0x0:1076x717/750x500/data/photo/2019/10/14/5da434fa8e064.jpg');">
  <div class="wrapper row1 nav-bar">
    <header id="header" class="hoc clear">
      <!-- LOGO -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Beta Leihitu</a></h1>
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

<!-- KONTENER -->
<div class="kontener-post">
<?php foreach ($rows as $r) : ?>
<article class="one_third first">
  <div class="img-tmpt">
    <img class="btmspace-30" src="img/<?= $r["gambar_tempat"]; ?>">
  </div>
        <h3 class="nospace heading font-x1"><?= $r["nama_tempat"] ?></h3>
        <ul class="nospace meta">
          <li><i class="fa fa-tag"></i> <a href="#">Sejarah</a></li>
        </ul>
        <p>
          <?php
          $deskripsi = substr($r["deskripsi_tempat"], 0, 40);
          print($deskripsi); ?>
          &hellip;
        </p>
        <footer class="nospace"><a class="btn" href="detail_tempat.php?q=<?= $r["id_tempat"]; ?>">Full Story &raquo;</a></footer>
      </article>
<?php endforeach; ?>
</div>

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