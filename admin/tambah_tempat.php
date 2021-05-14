<?php

session_start();

if(!isset($_SESSION['user'])) {
  echo "Silahkan login..";
  header("Location: login.php");
}

require 'koneksi.php';
require 'fun_con.php';

if ( isset($_POST["btnSimpan"]) ) {

	// Kirim Data
	if ( tambahTempat($_POST) > 0) {
		print "<script>alert('Data berhasil ditambah!')</script>";
    print("<script>window.location.href = 'data_tempat.php'</script>");
	} else {
		print "<script>alert('Data berhasil ditambah!')</script>";
    print("<script>window.location.href = 'data_tempat.php'</script>");
	}

}


?>

<?php require 'header.php'; ?>

    <!--main content start-->
        <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Tambah Data Tempat</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <form class="form-horizontal style-form" action="" method="POST" enctype="multipart/form-data">
              	<div class="form-group last">
                  <label class="control-label col-md-3">Upload Gambar</label>
                  <div class="col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt="" />
                      </div>
                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                      <div>
                        <span class="btn btn-theme02 btn-file">
                          <span class="fileupload-new"><i class="fa fa-paperclip"></i> Pilih Gambar</span>
                        <span class="fileupload-exists"><i class="fa fa-undo"></i> Ubah</span>
                        <input type="file" class="default" name="gambar">
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Nama Tempat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Kategori Tempat</label>
                  <div class="col-sm-10">
		              <div class="radio">
		                <label>
		                  <input type="radio" id="optionsRadios1" value="wisata" name="kategori">
		                  Wisata
		                  </label>
		              </div>
		              <div class="radio">
		                <label>
		                  <input type="radio" id="optionsRadios2" value="sejarah" name="kategori">
		                  Sejarah
		                  </label>
		              </div>
		                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Deskripsi Tempat</label>
                  <div class="col-sm-10">
                    <textarea class="form-control ckeditor" id="ckeditor" name="deskripsi"></textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Link Map</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="map_link">
                    <span class="help-block">Ambil Link Tempat Dari Google Map</span>
                    <button type="submit" class="btn btn-theme" name="btnSimpan">Simpan</button>
                  </div>
                </div>
                
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
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
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
</body>

</html>
