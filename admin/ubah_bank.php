<h2 class="text-center">Ubah Data Bank</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM bank WHERE id_bank = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>

<form method="post">
	<div class="form-group">
		<label for="nama">Nama Bank</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_bank']; ?>">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=bank" class="btn btn-warning">Kembali</a>
</form>

<?php 
if(isset($_POST['simpan'])) {

$koneksi->query("UPDATE bank SET nama_bank = '$_POST[nama]' WHERE id_bank ='$_GET[id]'");

	echo "<script>alert('Bank Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=bank';</script>";
}

?>