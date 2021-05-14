<?php

require 'admin/koneksi.php';

  $tempat = mysqli_query($konek, "SELECT * FROM tempat_tb LIMIT 3");

  // var_dump($tempat);
  // die();

?>

<!DOCTYPE html>
<html lang="">
<head>
<title>Home | Pariwisata Leihitu </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="style.css">
</head>
<body id="top">


<!-- IMG OVERLAY -->
<div class="bgded overlay" style="background-image:url('https://asset.kompas.com/crops/KmCsdeifjsPjEAY4KdKaSLuuQCQ=/0x0:1076x717/750x500/data/photo/2019/10/14/5da434fa8e064.jpg');"> 

<!-- NAVBAR -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Beta Leihitu</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="galeri.php">Galeri</a></li>
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

<!-- BANNER INTRO TABEA HEADER -->
  <div class="wrapper">
    <div id="pageintro" class="hoc clear"> 
      <article>
        <h2 class="heading">TABEA!</h2>
        <p>Selamat Datang di Website Pariwisata Leihitu.</p>
      </article>
    </div>
  </div>
</div>

<!-- BANNER INFO ABOUT -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading">Leihitu</h6>
      <p>Salah satu kecamatan terindah di Maluku</p>
    </div>
    <div class="group">
      <div class="one_half first">
        <p class="font-xs nospace">Tentang Leihitu</p>
        <h6 class="heading">KECAMATAN LEIHITU</h6>
        <p>Kecamatan Leihitu terletak di Kabupaten Maluku Tengah, Provinsi Maluku.</p>
        <p class="btmspace-30">Terdapat beragam Adat Budaya serta Tempat Bersejarah hingga Tempat Rekreasi.</p>
        <!-- <footer><a class="btn" href="#">Read More &raquo;</a></footer> -->
      </div>
      <div class="one_half">
        <ul class="nospace group">
          <center><img src="img_bg/logo.png" style="width: 50%;"></center>
        </ul>
      </div>
    </div>
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<!-- BANNER GALERI -->
<div class="gambar overlay" style="background-image:url('https://v-images2.antarafoto.com/tradisi-pukul-sapu-m9evhu-prv.jpg');">
  <article class="hoc container clear center"> 
    <div class="sectiontitle" style="margin-bottom:30px;">
      <h6 class="heading">ADAT BUDAYA LEIHITU</h6>
      <p>Leihitu memiliki beragam adat dan budaya yang unik</p>
    </div>
    <p><a class="btn medium" href="#galeri">Lihat Galeri &raquo;</a></p>
  </article>
</div>

<!-- KONTENER GALERI -->
<div class="wrapper row3">
  <div class="hoc container clear"> 
    <div class="sectiontitle" id="galeri">
      <h6 class="heading">G a l e r i</h6>
    </div>
    <ul class="nospace group services">
      <li class="one_third first btmspace-30">
        <article class="bgded" style="background-image:url('img_bg/masjid_wapauwe.jpg');">
          <div class="overlay">
            <h6 class="heading font-x1"><a href="#">Masjid Wapauwe</a></h6>
          </div>
        </article>
      </li>
      <li class="one_third  ">
        <article class="bgded" style="background-image:url('img_bg/nusa_ela.jpg');">
          <div class="overlay">
            <h6 class="heading font-x1"><a href="#">Nusa Ela Resort</a></h6>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded" style="background-image:url('img_bg/gereja_immanuel.jpeg');">
          <div class="overlay">
            <h6 class="heading font-x1"><a href="#">Gereja Immanuel</a></h6>
          </div>
        </article>
      </li>
      <li class="one_third first">
        <article class="bgded" style="background-image:url('img_bg/lubang_buaya.jpg');">
          <div class="overlay">
            <h6 class="heading font-x1"><a href="#">Lubang Buaya</a></h6>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded" style="background-image:url('img_bg/pukul_sapu.jpg');">
          <div class="overlay">
            <h6 class="heading font-x1"><a href="#">Pukul Sapu</a></h6>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article class="bgded" style="background-image:url('img_bg/benteng_amsterdam.jpg');">
          <div class="overlay">
            <h6 class="heading font-x1"><a href="#">Benteng Amsterdam</a></h6>
          </div>
        </article>
      </li>
    </ul>
  </div>
</div>

<!-- BANNER TEMPAT -->
<div class="gambar2 overlay" style="background-image:url('https://tourindonesiaweb.files.wordpress.com/2017/09/ora9a.jpg');">
  <article class="hoc container clear center"> 
    <div class="sectiontitle" style="margin-bottom:30px;">
      <h6 class="heading">BERBAGAI TEMPAT WISATA & SEJARAH</h6>
    </div>
    <p><a class="btn medium" href="#tempat">Lihat Tempat &raquo;</a></p>
  </article>
</div>

<!-- KONTENER TEMPAT WISATA DAN SEJARAH -->
    <div class="sectiontitle judulcont" id="tempat">
      <h6 class="heading">Wisata Dan Sejarah</h6>
    </div>
<div class="kontener-post">
<?php foreach ($tempat as $r) : ?>
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


<!-- HEAD FOOTER LOGO -->
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

<!-- BUTTON TO TOP -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>

</body>
</html>