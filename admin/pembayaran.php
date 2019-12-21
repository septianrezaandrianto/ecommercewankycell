<?php 
require "../config/function.libs.php";

$id_pembelian = $_GET['id'];

//Mengambil data pembayaran
$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian ='$id_pembelian'");
$detail = $ambil->fetch_assoc();

/*echo "<pre>";
print_r($detail);
echo "</pre>";*/
?>

<h2 class="text-center">Laporan Pembayaran</h2>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama</th>
				<td><?php echo $detail['nama_pelanggan']; ?></td>
			</tr>
			<tr>
				<th>Tanggal Pembayaran</th>
				<td><?php echo tanggal($detail['tanggal_pembayaran']); ?></td>
			</tr>
			<tr>
				<th>Jumlah Yang Dibayarkan</th>
				<td>Rp. <?php echo number_format($detail['jumlah']); ?></td>
			</tr>
			<tr>
				<th>Pembayaran Melalui Bank</th>
				<td><?php echo $detail['nama_bank']; ?></td>
			</tr>

		</table>
	</div>
	<div class="col-md-6">
		<img src="../upload/bukti_pembayaran/<?php echo $detail['bukti_foto'] ?>" width="150" height="450" alt="" class="img-responsive" >
	</div>
</div>

<form method="post">
	<div class="form-group">
		<label>Masukan No. Resi Pengiriman</label>
		<input type="text" class="form-control" name="resi">
	</div>
	<div class="form-group">
		<label>Status Pengiriman</label>
		<select class="form-control" name="status">
			<option value="">---Pilih Status---</option>
			<option value="Lunas">Lunas</option>
			<option value="Barang Dikirim">Barang Dikirim</option>
			<option value="Batal">Batal</option>
		</select>
	</div>
	<button class="btn btn-primary" name="proses">Proses</button>
</form>

<?php 
if(isset($_POST["proses"])) {
	$resi = $_POST['resi'];
	$status = $_POST ['status'];
	$koneksi->query("UPDATE pembelian SET resi_pengiriman ='$resi', status_pembelian='$status' WHERE id_pembelian='$id_pembelian'");
echo "<script>alert('Data Pembelian Terupdate');</script>";
echo "<script>location='index.php?halaman=pembelian';</script>";
}

?>