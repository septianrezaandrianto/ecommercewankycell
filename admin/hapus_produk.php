<?php 

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_produk = $pecah['foto_produk'];

if (file_exists("../upload/foto_produk/$foto_produk")) {
	unlink("../upload/foto_produk/$foto_produk");
}

$koneksi->query("DELETE FROM produk WHERE id_produk = '$_GET[id]'");

echo "<script>location='index.php?halaman=produk'; </script>";

 ?>
