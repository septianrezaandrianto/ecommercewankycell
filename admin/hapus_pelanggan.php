<?php 

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_produk = $pecah['foto_produk'];

$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan = '$_GET[id]'");

echo "<script>location='index.php?halaman=pelanggan'; </script>";

 ?>