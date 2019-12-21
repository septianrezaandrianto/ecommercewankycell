<?php 
session_start();
//Mendapapatkan id_produk dari URL
$id_produk = $_GET['id'];

//Jika produk sudah ada dikeranjang, maka produk itu ditambah 1

if(isset($_SESSION['keranjang'][$id_produk])) {
	$_SESSION['keranjang'][$id_produk] += 1;
} else {

//Jika produk belum ada dikeranjang, makan produk itu dianggap dibeli 1
	$_SESSION['keranjang'][$id_produk] = 1;
}


/*echo "<pre>";
print_r($_SESSION);
echo "</pre>"; */

//Hubungkan ke keranjang.php
echo "<script>alert('Produk telah masuk kedalam Keranjang Belanja');</script>";
echo "<script>location='keranjang.php';</script>";
?>