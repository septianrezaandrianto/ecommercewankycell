<?php 
session_start();
include "config/koneksi.php";
//Mendapatkan id_produk dari url
$id_produk = $_GET['id'];

//Query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();

/* echo "<pre>";
print_r($detail);
echo "</pre>"; */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Detail Produk</title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	
<!-- Navbar -->
<?php include "menubar.php";?>	

<section class="kontent">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="upload/foto_produk/<?php echo $detail['foto_produk']; ?>" alt="" class="img-responsive">
				<style>


/*      CSS	/**/
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
    border: 1px solid #4CAF50;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>
<div class="pagination ">
  <a href="#">❮</a>
  <a href="#">❯</a>
</div>

			</div>
			<div class="table-bordered col-md-6">
				<h3 class="text-center"><?php echo $detail['nama_produk']; ?></h3><br><br>
				<h4><div class="panel panel-body"><strong>Berat :</strong> <?php echo $detail['berat_produk']; ?> Gr</h4>
					<h4><div class="panel panel-body"><strong>Stok :</strong> <?php echo $detail['stok_produk']; ?> Pcs</h4>
				<h4><div class="panel panel-body"><strong>Harga :</strong> Rp. <?php echo number_format($detail['harga_produk']); ?></h4>


				<form method="POST">
					<div class="form-group">
						<div class="input-group">	
						<!--Jika Stok Barang 0 /Habis  -->
						<?php if($detail['stok_produk']!="0"): ?>
						<h5><strong>Jumlah (Pcs):</strong></h5>
						<input type="number"  min="1" class="form-control" name="jumlah" max="<?php echo $detail['stok_produk'] ?>" placeholder="Masukan Jumlah Pembelian" required><br><br>
							<button class="btn btn-primary" name="beli">Beli</button>
						<!-- Maka Akan menampilkan Pesan -->
							<?php else: ?>
							<h3>Stok Tidak Tersedia</h3>
							<?php endif ?>
						</div>
					</div>
				</form>			
				<?php
				//Jika ada tomblo beli
				if(isset($_POST['beli'])) {
					//Mendapatkan jumlah yang diinput
					$jumlah = $_POST['jumlah'];
					//Masukan dikeranjang belanja
					$_SESSION['keranjang'][$id_produk] = $jumlah;

					echo "<script>alert('Produk Telah Masuk Kedalam Keranjang Belanja');</script>";
					echo "<script>location='keranjang.php';</script>";
				}
				?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Deskripsi Produk</h2><br>
				<?php echo $detail['deskripsi_produk']; ?>
				</div>
			</div>
	</div>
</section>
</body>
</html>