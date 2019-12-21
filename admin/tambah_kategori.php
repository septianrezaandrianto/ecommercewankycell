<h2 class="text-center">Tambah Kategori</h2>

<form method="post">
	<div class="form-group">
		<label for="nama">Nama Kategori</label>
		<input type="text" class="form-control" name="nama">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=kategori" class="btn btn-warning">Kembali</a>	
</form>

<?php 
if(isset($_POST['simpan'])) {
	
	$koneksi->query("INSERT INTO kategori(nama_kategori) VALUES('$_POST[nama]')");

	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kategori'>";

}

?>