<h2 class="text-center">Ubah Tarif Ongkir</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM ongkir WHERE id_ongkir = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post">
	<div class="form-group">
		<label for="nama">Nama Kota</label>
		<input type="text" class="form-control" name="nama" readonly value="<?php echo $pecah['nama_kota']; ?>">
	</div>
		<div class="form-group">
		<label for="tarif">Tarif Ongkos Kirim</label>
		<input type="text" class="form-control" name="tarif" value="<?php echo $pecah['tarif_ongkir'];?>">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=ongkir" class="btn btn-warning">Kembali</a>
</form>

<?php 
if(isset($_POST['simpan'])) {

$koneksi->query("UPDATE ongkir SET nama_kota = '$_POST[nama]', tarif_ongkir ='$_POST[tarif]' WHERE id_ongkir ='$_GET[id]'");

	echo "<script>alert('Tarif Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=ongkir';</script>";
}

?>