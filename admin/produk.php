
<h2 class="text-center">Data Produk</h2>
<table class="table table-bordered table text-center" id="datatables">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Produk</th>
			<th>Kategori Produk</th>
			<th>Harga</th>
			<th>Berat</th>
			<th>Stok</th>
			<th>Foto Produk</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php 
		/*

		$perpage = 10; 
		if(isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page =1;
		}

		if($page >1) {
			$start = ($page * $perpage) - $perpage;
		} else {
			$start = 0;
		} */
		?>

		<?php $nomor =1; ?>
		<?php $ambil = $koneksi->query("SELECT kategori.*,produk.* FROM produk LEFT JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY produk.id_produk DESC" /*LIMIT $start, $perpage */ ); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['nama_kategori']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga_produk']); ?></td>
			<td><?php echo $pecah['berat_produk']; ?> (Gr)</td>
			<td><?php echo $pecah['stok_produk']; ?> (Pcs)</td>
			<td>
				<img src="../upload/foto_produk/<?php echo $pecah['foto_produk']; ?>" width="50" height="50">
			</td>
			<td>
				<a href="index.php?halaman=ubah_produk&id=<?php echo $pecah['id_produk'] ?>" onclick="return confirm('Anda yakin ingin mengubah data ini?')" class="btn btn-primary">Ubah</a>
				<a href="index.php?halaman=hapus_produk&id=<?php echo $pecah['id_produk'] ?>"
				onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<?php 
/*
	//Script Pagination
	$data = mysqli_query($koneksi, "SELECT kategori.*,produk.* FROM produk LEFT JOIN kategori ON produk.id_kategori = kategori.id_kategori ORDER BY produk.id_produk");
	$jmlbaris = mysqli_num_rows($data);
	//echo $jmlbaris;
	$halaman = ceil($jmlbaris/$perpage);
	//echo $halaman;
	for ($i=1; $i <=$halaman; $i++){
		echo "<a href='index.php?halaman=produk=$i'>$i</a>";
} */
?>
<a href="index.php?halaman=tambah_produk" onclick="return confirm('Anda yakin ingin tambah produk?')" class="btn btn-success">[+] Tambah Produk</a>

<nav aria-label="Page navigation example"> 
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>


