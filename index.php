<?php 
session_start();

include "config/koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Beranda</title>

	<link href="assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> 
	<script src="assets/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>	
	<!-- <link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css"> 
	<script src="admin/assets/bower_components/bootstrap/dist/js/bootstrap.js" type="text/javascript"></script>-->	

</head>
<body>
	
<!-- Navbar -->	
<?php include "menubar.php";?>	
	
	<!-- Content -->
	<section class="konten">
		<div class="container">
			<h1>Produk Terbaru</h1><br>
			<div class="row">
				<?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
				<?php while($perproduk = $ambil->fetch_assoc()) { ?>
			 <!-- <?php //print_r($perproduk); ?>  -->
				<div class="col-md-3" >
					<div class="thumbnail">
						<img  src="upload/foto_produk/<?php echo $perproduk['foto_produk']; ?>" alt="">
						<div class="caption text-center" width="200" style="height: 250px;">
							<h3><?php echo $perproduk['nama_produk']; ?></h3>
							<h5>Rp. <?php echo number_format($perproduk['harga_produk']); ?></h5>
							<a href="detail_produk.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">
							Detail Produk</a>
							
							<!-- <a href="beli.php?id=<?php// echo $perproduk['id_produk']; ?>" class="btn btn-success">Beli Sekarang</a> -->
						</div>
					</div>					
				</div>
				<?php } ?>
			</div>			
		</div>	

	<!-- <script src="table/js/jquery.js"></script> 
	<script src="table/js/jquery.dataTables.js"></script>
	<script src="table/js/dataTables.bootstrap.js"></script>
	
	</section>		
</body>

</html>
<!-- <?php //require "layout/footer.php"; ?> -->