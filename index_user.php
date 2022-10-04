<?php

    session_start();
    $koneksi=mysqli_connect("localhost","root","","library");


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link rel="icon" type="assets/img/tokobuku.png" href="assets/img/tokobuku.png" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Toko Buku Oase</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

  <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index_user.php">Toko Buku Oase</a>
      </div>
      <div style="color: blue; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">&nbsp; <a href="logout.php"
          class="btn btn-danger square-btn-adjust">Logout</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
            <img src="assets/img/tokobuku.png" class="user-image img-responsive" />
          </li>
          <li>
            <a href="?page=buku"><i class="fa fa-table fa-3x fa-3x"></i> Data Buku</a>
            <a href="?page=pinjambuku"><i class="fa fa-book fa-3x fa-3x"></i>Pinjam Buku</a>
          </li>
        </ul>

      </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <?php
                        if(isset($_GET['page'])){
                            $page = $_GET['page'];

                            switch ($page){
                                case 'pinjambuku' :
                                    include "page/pinjambuku/pinjambuku.php";
                                break;
                                case 'buku':
                                    include "page/bukuuser/buku.php";
                                break;
                                case 'proses':
                                    include "page/pinjambuku/prosespinjam.php";
                                break;
                            }
                        }
                        else {
                            include "page/bukuuser/buku.php";
                        }

                         
                        ?>

          </div>
        </div>
        <!-- /. ROW  -->
        <hr />

      </div>
      <!-- /. PAGE INNER  -->
    </div>
    <!-- /. PAGE WRAPPER  -->
  </div>
  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>

  <script src="assets/js/dataTables/jquery.dataTables.js"></script>
  <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
  <script>
  $(document).ready(function() {
    $('#dataTables-example').dataTable();
  });
  </script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>


</body>

</html>