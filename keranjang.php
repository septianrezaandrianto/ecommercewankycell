<?php 
error_reporting(0);
session_start();

include 'config/koneksi.php';

/*echo "<pre>";
print_r($_SESSION['keranjang']);
echo "</pre>"; */

//Jika Keranjang Belanja Kosong
if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
	echo "<script>alert('Keranjang Belanja Kosong, Silahkan Belanja Terlebih Dahulu');</script>";
	echo "<script>location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Keranjang</title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

<!-- Navbar -->	
<?php include "menubar.php";?>	

	<section class="konten">
		<div class="container">
			<h1>Keranjang Belanja</h1><br>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Produk</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Jumlah</th>
						<th class="text-center">Subtotal</th>
						<th class="text-center">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
					<?php
					$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah['harga_produk'] * $jumlah;
				/*	echo "<pre>";
					print_r($pecah);
					echo "</pre>"; */

					?>	
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah['nama_produk']; ?></td>
						<td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp. <?php echo number_format($subharga);?></td>
						<td>
							<a href="hapus_keranjang.php?id=<?php echo $id_produk ?>"
				onclick="return confirm('Apakah anda yakin ingin menghapus produk ini?')" class="btn btn-danger btn-xs">Hapus</a>
						</td>
					</tr>
					<?php $nomor++; ?>
				<?php endforeach ?>
				</tbody>
			</table>
			<a href="index.php" class="btn btn-default">Terus Belanja</a>
			<a href="checkout.php" class="btn btn-success">Lanjutkan Transaksi</a>
		</div>		
	</section>
</body>
</html>