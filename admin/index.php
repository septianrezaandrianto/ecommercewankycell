<?php include 'layout/header.php' ?>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content container-fluid" id="datatables">

      <?php 
      if (isset($_GET['halaman'])) {
        if ($_GET['halaman'] == "produk") {
          include 'produk.php';

        } elseif ($_GET['halaman'] == "pelanggan") {
          include 'pelanggan.php';

        }elseif($_GET['halaman'] == "hapus_pelanggan") {
            include "hapus_pelanggan.php";

        } elseif ($_GET['halaman'] == "pembelian") {
          include 'pembelian.php'; 

        } elseif ($_GET['halaman'] == "detail") {
          include 'detail.php';

        } elseif ($_GET['halaman'] == "login") {
          include 'login.php';

        } elseif ($_GET['halaman'] == "tambah_produk") {
          include 'tambah_produk.php';

        } elseif ($_GET['halaman'] == "hapus_produk") {
          include 'hapus_produk.php';

        } elseif ($_GET['halaman'] == "ubah_produk") {
          include 'ubah_produk.php';

        } elseif ($_GET['halaman'] == "admin") {
          include 'admin.php';

        } elseif ($_GET['halaman'] == "tambah_admin") {
          include 'tambah_admin.php';

        } elseif ($_GET['halaman'] == "ubah_admin") {
          include 'ubah_admin.php';

        } elseif ($_GET['halaman'] == "hapus_admin") {
          include 'hapus_admin.php';

        } elseif ($_GET['halaman'] == "ongkir") {
          include 'ongkir.php';

        } elseif ($_GET['halaman'] == "tambah_ongkir") {
          include 'tambah_ongkir.php';

        } elseif ($_GET['halaman'] == "ubah_ongkir") {
          include 'ubah_ongkir.php';

        } elseif ($_GET['halaman'] == "hapus_ongkir") {
          include 'hapus_ongkir.php';

        } elseif ($_GET['halaman'] == "kategori") {
          include 'kategori.php';

        } elseif ($_GET['halaman'] == "tambah_kategori") {
          include 'tambah_kategori.php';

        } elseif ($_GET['halaman'] == "ubah_kategori") {
          include 'ubah_kategori.php';

        } elseif ($_GET['halaman'] == "bank") {
          include 'bank.php';

        } elseif ($_GET['halaman'] == "tambah_bank") {
          include 'tambah_bank.php';

        } elseif ($_GET['halaman'] == "ubah_bank") {
          include 'ubah_bank.php';

        } elseif ($_GET['halaman'] == "hapus_bank") {
          include 'hapus_bank.php';

        } elseif ($_GET['halaman'] == "cetak") {
          include 'cetak.php';     

        } elseif ($_GET['halaman'] == "pembayaran") {
          include 'pembayaran.php';     

        } elseif ($_GET['halaman'] == "logout") {
          include 'logout.php';
      }

      } else {
        include 'home.php';    
      }
      ?>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include 'layout/footer.php'; ?>