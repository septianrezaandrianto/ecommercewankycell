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

//Mendapatkan id_pembelian dari url
$idpembelian = $_GET['id'];
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan = pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian = '$_GET[id]'");
//$ambil = $koneksi ->query("SELECT * FROM pembelian WHERE id_pembelian = '$idpembelian'");
$detailpembelian = $ambil -> fetch_assoc();

//Untuk Mengambil Nama Pelanggan
//$ambil2 = $koneksi->query("SELECT * FROM pelanggan");
//$pecah2 = $ambil2 -> fetch_assoc();
/* echo "<pre>";
print_r($detailpembelian);
print_r($_SESSION);
echo "</pre>"; */

/*//Mendapatkan id_pelanggan yang beli
$id_pelanggan_beli = $detailpembelian['id_pelanggan'];
//Mendapatkan id_pelanggan yang login
$id_pelanggan_login = $_SESSION ['pelanggan']['id_pelanggan'];

if (id_pelanggan_login !== $id_pelanggan_beli) {
	echo "<script>alert('Anda Tidak Berhak Masuk');</script>";
	echo "<script>location='riwayat_pembelian.php';</script>";
	exit();
} */
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Pembayaran</title>
	<script src="admin/assets/bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">

</head>
<body>

<!-- Navbar -->	
<?php include "menubar.php";?>	

<div class="container">
	<h2 class="text-center">Konfirmasi Pembayaran</h2>
	<p class="text-center">Silahkan <i>Upload</i> Bukti Pembayaran Anda disini</p>
	<div class="alert alert-info text-center">Silahkan Melakukan pembayaran sebesar<strong> Rp.<?php echo number_format($detailpembelian['total_pembelian']) ?></strong></div>

	<form method="post" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Pelanggan</label>
			<input type="text" class="form-control" name="nama" required value="<?php echo $detailpembelian['nama_pelanggan']; ?>" readonly>		
		</div>

		<div class="form-group">
			<label>Bank</label>
			<select class="form-control" name="bank" required>
			<option value="">Pilih Bank</option>					
			<?php 
			$ambil = $koneksi->query("SELECT * FROM bank");
			while ($pecah = $ambil->fetch_assoc()) {
			?>
			<option value="<?php echo $pecah['nama_bank'] ?>">
				<?php echo $pecah['nama_bank']; ?>
			</option>
			<?php } ?>
			</select>	
			</div>
			
		<div class="form-group">
			<label>Jumlah Yang ditransfer</label>
			<input type="number" class="form-control" name="jumlah" required min="1">
			<p class="text-danger">Masukan Nominal Angka Tanpa Tanda Titik</p>		
		</div>
		<div class="form-group">
			<label>Bukti Pembayaran</label>
			<input type="file" class="form-control" name="bukti" required>
			<p class="text-danger">Format Harus berupa JPG</p>
			<!-- <p class="text-danger">Bukti pembayran harus berformat JPG maximal 2 MB</p>		 -->
		</div>
		<button class="btn btn-primary" name="kirim">Kirim</button>
	</form>	
</div>


<?php 		
if(isset($_POST['kirim'])) {
	//Upload Foto Bukti
	$namabukti = $_FILES["bukti"]["name"];
	$lokasibukti = $_FILES["bukti"]["tmp_name"];
	$namaoke = date("YmdHis").$namabukti;
	move_uploaded_file($lokasibukti, "upload/bukti_pembayaran/$namaoke");

	$nama = $_POST["nama"];
	$bank = $_POST["bank"];
	$jumlah = $_POST["jumlah"];
	$tanggal = date("Y-m-d");

/*$ambil = $koneksi->query("SELECT * FROM bank WHERE id_bank ='id_bank'");
$arraybank = $ambil->fetch_assoc();
$nama_bank = $arraybank["nama"];  */
	//Simpan pembayaran
	$koneksi->query("INSERT INTO pembayaran (id_pembelian, nama_pelanggan, nama_bank, jumlah, tanggal_pembayaran, bukti_foto) VALUES
		('$idpembelian', '$nama', '$bank', '$jumlah', '$tanggal', '$namaoke')");

	//Ubah Status Dari Pending menjadi sudah bayar
	$koneksi ->query("UPDATE pembelian SET status_pembelian = 'Sudah Bayar' WHERE id_pembelian='$idpembelian'");
	
	echo "<script>alert('Terima Kasih Sudah Melakukan Pembayaran');</script>";
	echo "<script>location='riwayat_pembelian.php';</script>";
}
?>

</body>
</html>