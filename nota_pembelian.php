<?php 
session_start();

include 'config/koneksi.php';
require 'config/function.libs.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Nota Pembelian</title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->	
<?php include "menubar.php";?>	


<section class="konten">
	<div class="container">

<!-- Source Code Copy Paste Dari admin/detail.php -->
<h2 class="text-center">Nota Pembelian</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan = pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian = '$_GET[id]'");
 $detail = $ambil->fetch_assoc();

 ?>
<!-- <pre><?php // print_r($detail); ?></pre>  -->
<!-- <pre><?php // print_r($_SESSION); ?></pre> -->
<?php
/* 
//Jika pelanggan yang beli tidak sama dengan yang login, maka akan link ke riwayat_pembelian.php karena tidak berhak melihat nota orang lain

//mendapatkan id_pelanggan yang beli
$id_pelanggan_beli = $detail['id_pelanggan'];

//mendapatkan id_pelanggan yang login
$id_pelanggan_login = $_SESSION['pelanggan']['id_pelanggan'];

if ($id_pelanggan_login !== $id_pelanggan_beli)
{
	echo "<script>alert('Anda Tidak Berhak Melihat Pembelian Orang lain');</script>";
	echo "<script>location='riwayat_pembelian.php';</script>";
	exit();
}
*/
?>

<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		<strong>No. Pembelian :</strong> <?php echo $detail['id_pembelian']; ?><br>
		<strong>Tanggal :</strong> <?php echo tanggal($detail['tanggal_pembelian']); ?><br>
	</div>

	<div class="col-md-4">
		<h3>Pelanggan</h3>
		<strong>Nama :</strong> <?php echo $detail['nama_pelanggan']; ?><br>
 		<strong>Telepon :</strong> <?php echo $detail['telepon_pelanggan']; ?><br>
 		<strong>Email &nbsp&nbsp&nbsp&nbsp :</strong> <?php echo $detail['email_pelanggan']; ?>	
	</div>

	<div class="col-md-4">
		<h3>Pengiriman</h3>
		<strong>Kota Tujuan :</strong> <?php echo $detail['nama_kota']; ?><br>
		<strong>Alamat :</strong> <?php echo $detail['alamat_pelanggan']; ?>
	</div>

</div>
 <table class="table table-bordered text-center">
	<thead>
		<tr>
			<th class="text-center">No.</th>
			<th class="text-center">Nama Produk</th>
			<th class="text-center">Harga Produk</th>
			<th class="text-center">Berat Produk</th>
			<th class="text-center">Jumlah</th>
			<th class="text-center">Sub Berat</th>
			<th class="text-center">Sub Total</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor =1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM detail_pembelian WHERE id_pembelian='$_GET[id]'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
<!--<pre><?php //print_r($pecah) ?></pre> -->
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
			<td><?php echo $pecah['berat_produk']; ?> Gr.</td>
			<td><?php echo $pecah['jumlah']; ?></td>
			<td><?php echo $pecah['sub_berat']; ?> Gr.</td>
			<td>Rp. <?php echo number_format($pecah['sub_harga']); ?></td>
		<!--	<td>
				<?php  //<a href="#" class="btn btn-danger">Hapus</a> ?>
			</td> -->
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<!-- Script Mecari total Belanja -->

<div class="col-md-12 text-center">
<h3>- - - - - - - - - - Rincian Pembayaran - - - - - - - - - -</h3>	
</div>
<div class="col-md-4 text-center">
<h4>Total Belanja : Rp. <?php echo number_format($detail['total_belanja']); ?></h4>
</div>

<div class="col-md-4 text-center">
<h4>Ongkos Kirim : Rp. <?php echo number_format($detail['tarif_ongkir']); ?></h4>
</div>
<div class="col-md-4 text-center">
<h4><strong>Total Pembayaran : Rp. <?php echo number_format($detail['total_pembelian']); ?></strong></h4>
</div>


<div class="row">
	<div class="col-md-12">
		<div class="alert alert-info text-center">
				<h4>Silahkan Melakukan pembayaran sebesar <b>Rp. <?php echo number_format($detail['total_pembelian']); ?> </b>ke 
				<strong>Rekening Bank BCA 237.301.8881 a/n Wanky Cell</strong></h4>
		</div>
	</div>
</div>
	</div>
</section>
<!-- <div class="col-md-11 text-right">
<a href="pembayaran.php?id=<?php //echo $detail["id_pembelian"] ?>" class="btn btn-success">Lakukan Pembayaran</a>
</div> -->
</body>
</html>