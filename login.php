<?php 
session_start();

include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Wanky Cell | Log In</title>
	<link rel="stylesheet" href="admin/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
	
<!-- Navbar -->	
<?php include "menubar.php";?>	

<div class="container">
	<div class="row" style="margin-top: 100px">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="panel-title text-center">
						<label>wanky Cell | Log In</label>
					</div>
				</div>
					<div class="panel-body">
						<form method="POST">
							<div class="form-group">
								<label>E-mail:</label>
								<input type="email" class="form-control" name="email" placeholder="Masukan E-mail Anda">
							</div>
							<div class="form-group">
								<label>Password:</label>
								<input type="password" class="form-control" name="password" placeholder="Masukan Password Anda">
							</div>
							<a href="daftar_pelanggan.php" class="btn btn-success">Daftar</a>
							<button class="btn btn-primary" name="login">Log In</button><br>
						</form>
						<?php
						if(isset($_POST['login'])) {
							$email = $_POST['email'];
							$password = $_POST['password'];

							$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan = '$email' AND pass_pelanggan = '$password'");
							$akun_cocok = $ambil->num_rows;

							if($akun_cocok == 1) {
								$akun = $ambil->fetch_assoc();

								$_SESSION['pelanggan'] = $akun;
								echo "<div class='alert alert-success text-center'>Log In Berhasil</div>";
								echo "<meta http-equiv='refresh' content='1;url=keranjang.php'>";
							} else {
								echo "<div class='alert alert-danger text-center'>Log In Gagal, Silahkan Periksa Akun Anda Kembali</div>";
								echo "<meta http-equiv='refresh' content='1;url=login.php'>";
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