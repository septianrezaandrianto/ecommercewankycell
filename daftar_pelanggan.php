<?php 
include 'config/koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Daftar</title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<!-- Navbar -->
<?php include "menubar.php";?>	

<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-tittle text-center">Daftar Pelanggan</h3>
				</div>
				<div class="panel-body">
					<form method="POST" class="form-horizontal">
							<div class="form-group">
							<label class="control-label col-md-3">Nama Lengkap : </label>
							<div class="col-md-7">
							<input type="text" class="form-control" name="nama" placeholder="Isi Nama Lengkap" required>
						</div>
						</div>
							<div class="form-group">
							<label class="control-label col-md-3">No. Telepon : </label>
							<div class="col-md-7">
							<input type="text" class="form-control" name="telepon" placeholder="Isi Nomor Telepon" required>
						</div>
						</div>
							<div class="form-group">
							<label class="control-label col-md-3">Alamat Lengkap :</label>
							<div class="col-md-7">
							<textarea class="form-control" name="alamat" placeholder="Isi Alamat Lengkap" required></textarea>
						</div>
						</div>
							<div class="form-group">
							<label class="control-label col-md-3">E-mail : </label>
							<div class="col-md-7">
							<input type="email" class="form-control" name="email" placeholder="Isi E-mail" required>
						</div>
						</div>
							<div class="form-group">
							<label class="control-label col-md-3">Password : </label>
							<div class="col-md-7">
							<input type="password" class="form-control" name="password" placeholder="Isi Password" required>
						</div>
						</div>
						<div class="form-group">
							<div class="col-md-7 col-md-offset-3">
								<button class="btn btn-primary" name="daftar">Daftar</button>
							</div>
						</div>
					</form>
					<?php 
					//Jika tombol Daftar ditekan
					if(isset($_POST['daftar'])) 
					{

						//Mengambil Data Nama, alamat, telepon, email dan password
						$nama = $_POST['nama'];
						$email = $_POST['email'];
						$password = $_POST['password'];
						$telepon = $_POST['telepon'];
						$alamat = $_POST['alamat'];


						//Cek Validasi apakah email sudah digunakan
						$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan = '$email'");
						$yangcocok = $ambil->num_rows;
						if($yangcocok==1)
						{
							echo "<script>alert('E-mail sudah digunakan');</script>";
							echo "<script>location='daftar_pelanggan.php';</script>";
						} else {
							//Query insert ke tabel pelanggan
							$koneksi->query("INSERT INTO pelanggan (email_pelanggan, pass_pelanggan, nama_pelanggan, telepon_pelanggan, alamat_pelanggan) VALUES('$email', '$password', '$nama', '$telepon', '$alamat')");

							echo "<script>alert('Pendaftaran Sukses, Silahkan Login!');</script>";
							echo "<script>location='login.php';</script>";
						}
					}
					 ?>






				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>