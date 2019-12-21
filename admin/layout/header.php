<?php 
session_start();

include '../config/koneksi.php';
$id_admin = '$_GET[id]';
if (!isset($_SESSION['admin'])) {
  echo "<script>location='login.php';</script>";
  header('location"login.php');
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Wanky Cell</title>
   <link rel="stylesheet" href="../assets/dataTables/datatables.min.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">


    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>W</b>Cell</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Wanky</b>Cell</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">

            </a>
            <ul class="dropdown-menu">
              
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">

                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>

            </ul>
          </li>
          <!-- /.messages-menu -->

          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->

            <ul class="dropdown-menu">

              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->

                  </li>
                  <!-- end notification -->
                </ul>
              </li>

            </ul>
          </li>
          <!-- Tasks Menu -->
          <li class="dropdown tasks-menu">

            <ul class="dropdown-menu">

              <li>
                <!-- Inner menu: contains the tasks -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <!-- Task title and progress text -->

                      <!-- The progress bar -->
                      <div class="progress xs">
                        <!-- Change the css width attribute to simulate progress -->
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">

                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>

            </ul>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->

            <ul class="dropdown-menu">
  

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <span><?php //echo $_SESSION['nama_admin'] ?> <i class="caret"></i></span>
          <img src="<?php //echo $_SESSION['foto_admin']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <!--Untuk Memanggil Nama Admin Yang Login -->
             

            <p><?php //echo $_SESSION['nama_admin'] ?></p>
        </div>
      </div>
 
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">

      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu Navigation</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li><a href="index.php?halaman=admin"><i class="fa fa-dashboard"></i> <span>Admin</span></a></li>
        <li><a href="index.php?halaman=pelanggan"><i class="fa fa-dashboard"></i> <span>Pelanggan</span></a></li>
        <li><a href="index.php?halaman=kategori"><i class="fa fa-dashboard"></i> <span>Kategori</span></a></li>
        <li><a href="index.php?halaman=produk"><i class="fa fa-dashboard"></i> <span>Produk</span></a></li>
        <li><a href="index.php?halaman=ongkir"><i class="fa fa-dashboard"></i> <span>Ongkos Kirim</span></a></li>
        <li><a href="index.php?halaman=bank"><i class="fa fa-dashboard"></i> <span>Bank</span></a></li>
        <li><a href="index.php?halaman=pembelian"><i class="fa fa-dashboard"></i> <span>Laporan Pembelian</span></a></li>
        <li><a href="index.php?halaman=logout"><i class="fa fa-dashboard"></i> <span>Log Out</span></a></li>   
      </ul>

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
   <script src="../assets/dataTables/datatables.min.js"></script>
  <script type="text/javascript"> 
    $(document).ready(function() {
    $('#datatables').DataTable();
    }); 
  </script>