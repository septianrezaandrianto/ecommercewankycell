<h2 class="text-center">Ubah Kategori</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM kategori WHERE id_kategori = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post">
	<div class="form-group">
		<label for="Nama">Nama Kategori</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_kategori']?>">		
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=kategori" class="btn btn-warning">Kembali</a>	
</form>

<?php 
if(isset($_POST['simpan'])) {

	$koneksi->query("UPDATE kategori SET nama_kategori = '$_POST[nama]' WHERE id_kategori='$_GET[id]'");

	echo "<script>alert('Kategori Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=kategori';</script>";
}

?>