<h2 class="text-center">Tambah Admin</h2>
<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="Username">Username</label>
		<input type="text" class="form-control" name="username">
	</div>
		<div class="form-group">
		<label for="Password">Password</label>
		<input type="password" class="form-control" name="password">
	</div>
		<div class="form-group">
		<label for="nama">Nama Lengkap</label>
		<input type="text" class="form-control" name="nama">
	</div>
		<div class="form-group">
		<label for="Telepon">Telepon</label>
		<input type="text" class="form-control" name="telepon">
	</div>
		<div class="form-group">
		<label for="Foto">Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php 
if(isset($_POST['simpan'])) {

	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../upload/foto_admin/" . $nama);

	$koneksi->query("INSERT INTO admin(user_admin, pass_admin, nama_admin, telepon_admin, foto_admin) VALUES ('$_POST[username]' , '$_POST[password]' , '$_POST[nama]' , '$_POST[telepon]' , '$nama')");

	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=admin'>";
}
?>