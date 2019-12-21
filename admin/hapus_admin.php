<?php 

$ambil = $koneksi->query("SELECT * FROM admin WHERE id_admin = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_admin = $pecah['foto_admin'];

if (file_exists("../upload/foto_admin/$foto_admin")) {
	unlink("../upload/foto_admin/$foto_admin");
}

$koneksi->query("DELETE FROM admin WHERE id_admin = '$_GET[id]'");

echo "<script>location='index.php?halaman=admin'; </script>";

 ?>