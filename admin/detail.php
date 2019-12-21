<?php 
require "../config/function.libs.php";
?>

<h2 class="text-center">Detail Pembelian</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan = pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian = '$_GET[id]'");
 $detail = $ambil->fetch_assoc();

 ?>
<!--<pre><?php // print_r($detail); ?></pre> -->


 <div class="row">
	<div class="col-md-3">
		<h3>Pembelian</h3>
		<strong>No. Pembelian :</strong> <?php echo $detail['id_pembelian']; ?><br>
		<strong>Tanggal :</strong> <?php echo tanggal($detail['tanggal_pembelian']); ?><br>
	</div>

	<div class="col-md-3">
		<h3>Pelanggan</h3>
		<strong>Nama :</strong> <?php echo $detail['nama_pelanggan']; ?><br>
 		<strong>Telepon :</strong> <?php echo $detail['telepon_pelanggan']; ?><br>
 		<strong>Email &nbsp&nbsp&nbsp&nbsp :</strong> <?php echo $detail['email_pelanggan']; ?>	
	</div>

	<div class="col-md-3">
		<h3>Pengiriman</h3>
		<strong>Kota Tujuan :</strong> <?php echo $detail['nama_kota']; ?><br>
		<strong>Alamat :</strong> <?php echo $detail['alamat_pelanggan']; ?>
	</div>

	<div class="col-md-3">
		<h3>Rincian Pembayaran</h3>
		Total Belanja : Rp. <?php echo number_format($detail['total_belanja']); ?><br>
		Ongkos Kirim : Rp. <?php echo number_format($detail['tarif_ongkir']); ?><br>
		<strong>Total Pembayaran :</strong> Rp. <?php echo number_format($detail['total_pembelian']); ?>
	</div>
</div>

 <table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Produk</th>
			<th>Harga Produk</th>
			<th>Berat Produk</th>
			<th>Jumlah</th>
			<th>Sub Berat</th>
			<th>Sub Total</th>
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
<a href="index.php?halaman=pembelian" class="btn btn-warning">Kembali</a>
<?php  

//$id_pembayaran = $_SESSION['pembayaran']['id_pembayaran'];

/*$ambil2 = $koneksi->query("SELECT * FROM pembayaran WHERE  id_pembelian = '$_GET[id]'");
$pecah2=$ambil2->fetch_assoc();*/

?>
<!-- <h3 class="">Data Transaksi</h3>
 <div class="row">
	<div class="col-md-4"><br>
		<strong>Nama Pelanggan : </strong> <?php// echo $pecah2['nama_pelanggan']; ?><br>
		<strong>Tanggal Pembayaran : </strong> <?php //echo tanggal($pecah2['tanggal_pembayaran']); ?><br>
		<strong>Jumlah Yang Dibayarkan : </strong> Rp. <?php //echo number_format($pecah2['jumlah']); ?><br>
		<strong>Pembayaran Melalui Bank : </strong> <?php //echo $pecah2['nama_bank']; ?><br><br>
		<!-- <div class="form-group"><img src="../upload/bukti_pembayaran/<?php //echo $pecah2['bukti_foto']?>" width="100" height="100"></div>  
		<strong>Bukti Pembayaran :</strong>
	</div>
</div> -->
<!-- <a href="cetak.php?id=<?php //echo $detail['id_pembelian']; ?>" class="btn btn-primary">Cetak Laporan</a> -->