<h2 class="text-center">Ubah Data Admin</h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
?>
<!-- <pre><?php // print_r($pecah); ?></pre> -->

<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="Username">Username</label>
		<input type="text" class="form-control" name="username" value="<?php echo $pecah['user_admin'];?>">
	</div>
		<div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" name="password" value="">
	</div>
		<div class="form-group">
		<label for="nama">Nama Lengkap</label>
		<input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_admin']; ?>">
	</div>
		<div class="form-group">
		<label for="Telepon">Telepon</label>
		<input type="text" class="form-control" name="telepon" value="<?php echo $pecah['telepon_admin'];?>">
	</div>
	<div class="form-group">
		<img src="../upload/foto_admin/<?php echo $pecah['foto_admin']?>" width="100" height="100">
	</div>
		<div class="form-group">
		<label for="Foto">Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=admin" class="btn btn-warning">Kembali</a>
</form>

<?php 

if (isset($_POST['simpan'])) {

	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];

	if (!empty($lokasi)) {
		move_uploaded_file($lokasi, "../upload/foto_admin/$nama");

		$koneksi->query("UPDATE admin SET user_admin = '$_POST[username]', pass_admin = '$_POST[password]', nama_admin = '$_POST[nama]', telepon_admin = '$_POST[telepon]', foto_admin = '$nama' WHERE id_admin = '$_GET[id]'");
	} else {
		$koneksi->query("UPDATE admin SET user_admin = '$_POST[username]', pass_admin = '$_POST[password]', nama_admin = '$_POST[nama]', telepon_admin = '$_POST[telepon]' WHERE id_produk = '$_GET[id]'");
	}

	echo "<script>alert('Data Berhasil Diubah');</script>";
	echo "<script>location='index.php?halaman=admin';</script>";
}
 ?>