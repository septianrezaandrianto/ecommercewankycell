<?php
// memanggil data didatabase
include '../config/koneksi.php';
// memanggil library FPDF
require ('laporan/fpdf.php');
// memanggil function tanngal 
require ('../config/function.libs.php');


// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('L','mm','A4');
// membuat halaman baru
$pdf->AddPage();
//Logo
$pdf->image('../upload/logo/logo.png',12,6,50);
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',24);
// mencetak string 
$pdf->Cell(290,7,'Wanky Cell',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(290,7,'Laporan Penjualan',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_pelanggan = pelanggan.id_pelanggan
	WHERE pembelian.id_pembelian = '$_GET[id]'");
$detail = $ambil->fetch_assoc();

$ambil2 = $koneksi->query("SELECT * FROM pembayaran WHERE  id_pembelian = '$_GET[id]'");
$pecah2=$ambil2->fetch_assoc();

$tanggal_pembayaran = tanggal($pecah2['tanggal_pembayaran']);
$total_belanja = number_format($detail['total_belanja']);
$tarif_ongkir = number_format($detail['tarif_ongkir']);
$total_pembelian = number_format($detail['total_pembelian']);

$nama_pelanggan = $pecah2['nama_pelanggan'];
$nama_bank = $pecah2['nama_bank'];
$no_pembelian = $detail['id_pembelian'];

$pdf->SetFont('Arial','B',11);
$pdf->Cell(130,6,'No. Pembelian                    : ' .$no_pembelian,0,1);
$pdf->Cell(130,6,'Nama Pelanggan                : ' .$nama_pelanggan,0,1);
$pdf->Cell(130,6,'Tanggal Pembayaran         : ' .$tanggal_pembayaran,0,1);
$pdf->Cell(130,6,'Pembayaran Melalui Bank : ' . $nama_bank,0,1);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
 
$pdf->SetFont('Arial','B',8);
$pdf->Cell(10,6,'NO',1,0,'C');
$pdf->Cell(130,6,'NAMA PRODUK',1,0,'C');
$pdf->Cell(32,6,'HARGA PRODUK (Rp.)',1,0,'C');
$pdf->Cell(32,6,'BERAT PRODUK (Gr.)',1,0,'C');
$pdf->Cell(20,6,'JUMLAH (Pcs)',1,0,'C'); 
$pdf->Cell(25,6,'SUB BERAT (Gr.)',1,0,'C');
$pdf->Cell(32,6,'SUB TOTAL(Rp.)',1,1,'C');





//Memanggil data yang didatabase
$nomor = 1;
$ambil=$koneksi->query("SELECT * FROM detail_pembelian WHERE id_pembelian='$_GET[id]'");
while($pecah=$ambil->fetch_assoc()){



$harga_produk = number_format($pecah['harga_produk']);
$sub_harga = number_format($pecah['sub_harga']);
$berat_produk = $pecah['berat_produk'];
$jumlah = number_format($pecah['jumlah']);
$sub_berat = $pecah['sub_berat'];
	
	$pdf->SetFont('Arial','',9);
	$pdf->Cell(10,6,$nomor,1,0);
    $pdf->Cell(130,6,$pecah['nama_produk'],1,0);
    $pdf->Cell(32,6,'Rp. '.$harga_produk.'',1,0);
    $pdf->Cell(32,6,$berat_produk.' '.'(Gr)',1,0);
    $pdf->Cell(20,6,$jumlah.' '.'(Pcs)',1,0);
    $pdf->Cell(25,6,$sub_berat. ' '. '(Gr)',1,0);
    $pdf->Cell(32,6,'Rp. '.$sub_harga.'',1,0);
    $pdf->Ln();
$nomor++;
}

	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(249,6,'GRAND TOTAL',1,0,'C');

	$pdf->SetFont('Arial','B',12);
	//$pdf->Cell(20,6,$jumlah,1,0);
	//$pdf->Cell(25,6,$pecah['sub_berat'],1,0);
	$pdf->Cell(32,6,'Rp. '.$total_belanja.'',1,1);


// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Arial','B',11);
$pdf->Cell(130,6,'Total Belanja          : Rp.'.' '. $total_belanja,0,1);
$pdf->Cell(130,6,'Ongkos Kirim        : Rp.'.' '. $tarif_ongkir,0,1);
$pdf->Cell(130,6,'Total Pembayaran : Rp.'.' '. $total_pembelian,0,1);





$pdf->Output();
?>