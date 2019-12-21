<h2 class="text-center">Tambah Data Ongkos Kirim</h2>

<form method="post">
	<div class="form-group">
		<label for="nama">Nama Kota</label>
		<input type="text" class="form-control" name="nama">
	</div>
		<div class="form-group">
		<label for="tarif">Tarif Ongkos Kirim</label>
		<input type="text" class="form-control" name="tarif">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=ongkir" class="btn btn-warning">Kembali</a>
</form>

<?php 
if(isset($_POST['simpan'])) {
	
	$koneksi->query("INSERT INTO ongkir(nama_kota, tarif_ongkir) VALUES('$_POST[nama]' , '$_POST[tarif]')");

	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=ongkir'>";

}

?>