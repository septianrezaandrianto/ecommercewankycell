<?php 
session_start();
error_reporting(0);

include 'config/koneksi.php';

if(!isset($_SESSION['pelanggan'])) {
	echo "<script>alert('Silahkan Log In Terlebih Dahulu');</script>";
	echo "<script>location='login.php';</script>";

}

	//Jika Keranjang Belanja Kosong
if(empty($_SESSION['keranjang']) OR !isset($_SESSION['keranjang'])) {
	echo "<script>alert('Keranjang Belanja Kosong, Silahkan Belanja Terlebih Dahulu');</script>";
	echo "<script>location='index.php'</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Checkout</title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>

	<!-- Navbar -->
	<?php include "menubar.php";?>	

<!--<pre><?php //print_r($_SESSION['pelanggan']); ?></pre> -->
<!--<pre><?php //print_r($_SESSION['keranjang']); ?></pre> -->



	<section class="konten">
		<div class="container">
			<h1>Check Out</h1><br>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">No.</th>
						<th class="text-center">Produk</th>
						<th class="text-center">Harga</th>
						<th class="text-center">Jumlah</th>
						<th class="text-center">Subtotal</th>

					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $totalbelanja = 0; ?>
					<?php foreach ($_SESSION['keranjang'] as $id_produk => $jumlah): ?>
					<?php
					$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$id_produk'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah['harga_produk'] * $jumlah;
					$stok = $pecah['stok_produk'] - $jumlah;
					//$subberat = $pecah['berat_produk'] * $jumlah;
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

					</tr>
					<?php $nomor++; ?>
					<?php $totalbelanja+=$subharga;
					//$totalberat+=$subberat;
					?>
				<?php endforeach ?>
				</tbody>
					<tfoot>
						<tr>
							<th colspan="4" class="text-center">Total Belanja</th>
							<th class="text-center">Rp. <?php echo number_format($totalbelanja); ?></th>
						</tr>				
					</tfoot>
			</table>
			<form method="POST">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
						<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['nama_pelanggan']; ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
						<input type="text" readonly value="<?php echo $_SESSION['pelanggan']['telepon_pelanggan']; ?>" class="form-control">
						</div>
					</div>
					<div class="col-md-4">
						<select class="form-control" name="id_ongkir">
							<option value="">Pilih Kota Tujuan</option>
						<?php 
						$ambil = $koneksi->query("SELECT * FROM ongkir");
						while ($perongkir = $ambil->fetch_assoc()) {
						?>
							<option value="<?php echo $perongkir['id_ongkir'] ?>">
							<?php echo $perongkir['nama_kota']; ?>      
							<!-- Rp. <?php //echo number_format($perongkir['tarif_ongkir']); ?> -->
							</option>
						<?php } ?>
						</select>	
				</div>
			</div>
			<div class="form-group">
				<!-- <label>Alamat Pengiriman</label> 
					<?php //echo  $_SESSION['pelanggan']['alamat_pelanggan']; ?> -->
				<button class="btn btn-success" name="checkout">Check Out</button>
			</form>

			<?php
			
			if (isset($_POST['checkout'])) {
			 	
			 	$id_pelanggan = $_SESSION['pelanggan']['id_pelanggan'];
			 	$id_ongkir = $_POST['id_ongkir'];
			 	$tanggal_pembelian = date('Y-m-d');
			 	//$alamat = $_POST['alamat_pengiriman'];

			 	//Untuk Mencari Tarif Ongkir
			 	$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir='$id_ongkir'");
			 	$arrayongkir = $ambil->fetch_assoc();
			 	$nama_kota = $arrayongkir['nama_kota'];

			 	$tarif = $arrayongkir['tarif_ongkir'];
			 	$total_belanja = $totalbelanja;
			 	$total_pembelian = $totalbelanja + $tarif;

			 	//Menyimpan Data ke dalam tabel pembelian
			 	$koneksi->query("INSERT INTO pembelian (id_pelanggan, id_ongkir, tanggal_pembelian, total_pembelian, nama_kota, tarif_ongkir, total_belanja) VALUES ('$id_pelanggan' , '$id_ongkir' , '$tanggal_pembelian' , '$total_pembelian', '$nama_kota', '$tarif', '$total_belanja')");

			 	//Mendapatkan id_pembelian yang baru terjadi
			 	//echo $koneksi->insert_id;
			 	$id_pembelian_baru = $koneksi->insert_id;
			 	foreach ($_SESSION['keranjang'] as $id_produk => $jumlah)
			 	{
			 		//Mendapatkan data produk berdasarkan id_produk
			 		$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk= '$id_produk'");
			 		$perproduk = $ambil->fetch_assoc();

			 		$nama = $perproduk['nama_produk'];
			 		$harga = $perproduk['harga_produk'];
			 		$berat = $perproduk['berat_produk'];

			 		$sub_berat = $perproduk['berat_produk']*$jumlah;
			 		$sub_harga = $perproduk['harga_produk']*$jumlah;
			 		$koneksi->query("INSERT INTO detail_pembelian (id_pembelian, id_produk, jumlah, nama_produk, harga_produk, berat_produk, sub_berat, sub_harga) VALUES ('$id_pembelian_baru' , '$id_produk', '$jumlah' , '$nama' , '$harga' , '$berat' , '$sub_berat' , '$sub_harga')");

			 		//Script Update Stok
			 		$koneksi->query("UPDATE produk SET stok_produk=stok_produk -$jumlah WHERE id_produk='$id_produk'");
			 	}
			 	//Mengosongkan isi keranjang belanja
			 	unset($_SESSION['keranjang']);
//print_r($koneksi);
			 	//Tampilan dialihkan ke halaman Riwayat Pembelian
			 	echo "<script>alert('Pembelian Sukses');</script>";
			 	echo "<script>location='riwayat_pembelian.php?id=$id_pembelian_baru';</script>";
			 } 


			?>

		</div>		
	</section>	
</body>
</html>