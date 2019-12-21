<?php 
session_start();
//koneksi
include 'config/koneksi.php';
require 'config/function.libs.php';


//Jika tidak ada session pelanggan (belum login)
/*if(isset($_SESSION['pelanggan']) OR empty($_SESSION['pelanggan'])) {

	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Riwayat Pembelian</title>
	<script src="admin/assets/bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->	
<?php include "menubar.php";?>	

	<!-- Content -->
	<!-- <pre><?php //print_r($_SESSION) ?></pre> -->
	<section class="konten">
		<div class="container">
			<h3>Riwayat Pembelian <?php echo $_SESSION['pelanggan']['nama_pelanggan'] ?></h3><br>
			
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th class="text-center">Tanggal</th>
						<th class="text-center">Status</th>
						<th class="text-center">Total</th>
						<th class="text-center">Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					$nomor = 1;
					//mendapatkan Id pelanggan yang login dari Session
					$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];

					$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pelanggan='$id_pelanggan' ORDER BY id_pembelian DESC");
					while ($pecah = $ambil->fetch_assoc()) {

					?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo tanggal($pecah['tanggal_pembelian']); ?></td>
						<td>
							<?php echo $pecah['status_pembelian']; ?>
							<br>
							<?php if(!empty($pecah['resi_pengiriman'])): ?>
							No. Resi : <?php echo $pecah['resi_pengiriman'] ?>
							<?php endif ?>
						</td>
						<td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
						<td>
							<a href="nota_pembelian.php?id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">Nota</a>

								<?php if($pecah['status_pembelian']=="Pending"): ?>
							<a href="pembayaran.php?id=<?php echo $pecah ["id_pembelian"] ?>" class="btn btn-success">Pembayaran</a>
								<?php else: ?>
							<?php endif ?>

						</td>
					</tr>
					<?php $nomor++; ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</section>

</body>
</html>