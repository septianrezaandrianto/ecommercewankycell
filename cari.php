<?php
include "config/koneksi.php";
$key = '%'.$_GET['txt_cari'].'%';

?>

<?php include "menubar.php";?>	
<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	
	<!-- Content -->
	<section class="konten">
		<div class="container">
			<h2>Produk Yang Anda Cari</h2><br>
			<div class="row">
<?php  			
$ambil = $koneksi->query("SELECT kategori.* ,produk.* FROM produk LEFT JOIN kategori ON produk.id_kategori = kategori.id_kategori where nama_produk like'$key' order by produk.id_produk DESC");
while($pecah = $ambil->fetch_assoc()) {
//$row=$ambil-> num_rows();
?>	
			 <!-- <?php //print_r($pecah); ?>  -->
				<div class="col-md-3" >
					<div class="thumbnail">
						<img  src="upload/foto_produk/<?php echo $pecah['foto_produk']; ?>" alt="">
						<div class="caption text-center" width="200" style="height: 250px;">
							<h3><?php echo $pecah['nama_produk']; ?></h3>
							<h5>Rp. <?php echo number_format($pecah['harga_produk']); ?></h5>
							<a href="detail_produk.php?id=<?php echo $pecah['id_produk']; ?>" class="btn btn-primary">
							Detail Produk</a>
							
							<!-- <a href="beli.php?id=<?php// echo $perproduk['id_produk']; ?>" class="btn btn-success">Beli Sekarang</a> -->
						</div>
					</div>					
				</div>
				<?php } ?>
			</div>			
		</div>	
			<script src="table/js/jquery.js"></script>
<script src="table/js/jquery.dataTables.js"></script>
<script src="table/js/dataTables.bootstrap.js"></script>	
	</section>		
</body>
</html>