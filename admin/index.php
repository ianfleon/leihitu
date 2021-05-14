<?php

require 'header.php';

session_start();

if(!isset($_SESSION['user'])) {
  echo "Silahkan login..";
  header("Location: login.php");
}

?>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row"> 
          <center>
            <h3>DASHBOARD ADMIN PARIWISATA LEIHITU</h3>
          </center>
          <center>
            <img src="../img_bg/logo.png" alt="" width="300px">          
          </center>
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
</body>

</html>
