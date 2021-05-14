<?php

session_start();

if(!isset($_SESSION['user'])) {
  echo "Silahkan login..";
  header("Location: login.php");
}

require 'koneksi.php';

$d_tempat = mysqli_query($konek, "SELECT * FROM tempat_tb");

if(isset($_GET["key"])) {
  $k = $_GET["key"];
  $q = mysqli_query($konek, "DELETE FROM tempat_tb WHERE id_tempat = '$k'");
  if ($q == true) {
    print("<script>alert('Data Berhasil dihapus!')</script>");
    print("<script>window.location.href = 'data_tempat.php'</script>");
  }
}


?>

<?php require 'header.php'; ?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Data Tempat</h3>
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Gambar</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nama Tempat</th>
                    <th><i class="fa fa-bookmark"></i> Kategori</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($d_tempat as $d) : ?>
                  <tr>
                    <td>
                      <a href="basic_table.html#">
                        <img src="../img/<?= $d["gambar_tempat"]; ?>" alt="" width="100px">
                      </a>
                    </td>
                    <td class="hidden-phone"><?= $d["nama_tempat"]; ?></td>
                    <td><?= $d["kategori"]; ?></td>
                    <td>
                          <a href="edit_tempat.php?q=<?= $d["id_tempat"]; ?>">
                            <button class="btn btn-primary btn-xs">
                            <i class="fa fa-pencil"></i>
                          </button>
                          </a>
                      <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o " onclick="return confirm('Hapus data ini?') ? window.location.href = 'data_tempat.php?key=<?= $d["id_tempat"]; ?>' : console.log('NO')"></i></button>
                    </td>
                  </tr>
                 <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  
</body>

</html>
