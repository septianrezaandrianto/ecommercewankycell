<?php 
//Query Produk
	$ambil = $koneksi->query("SELECT * FROM kategori");
	$pecah = $ambil->fetch_assoc();

?>

<h2 class="text-center">Tambah Produk</h2>

<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="Nama">Nama</label>
		<input type="text" class="form-control" name="nama" required>
	</div>
	<div class="form-group">
		<label for="kategori">Kategori</label>
			<select name="kategori" class="form-control" required>
			<?php do{ ?>
			<option value="<?php echo $pecah['id_kategori']?>"> <?php echo $pecah['nama_kategori']; ?></option>
		<?php } while ($pecah = $ambil->fetch_assoc()); ?>
		</select>
	</div>
	<div class="form-group">
		<label for="Harga">Harga (Rp)</label>
		<input type="number" class="form-control" name="harga" required>
	</div>
	<div class="form-group">
		<label for="Berat">Berat</label>
		<input type="number" class="form-control" name="berat" required>
	</div>
	<div class="form-group">
		<label for="Berat">Stok</label>
		<input type="number" class="form-control" name="stok" required>
	</div>
	<div class="form-group">
		<label for="Deskripsi">Deskripsi</label>
		<textarea name="deskripsi" required id="deskripsi" cols="30" rows="5" class="form-control"></textarea>
	</div>
	<div class="form-group">
		<label for="Foto">Foto</label>
		<input type="file" class="form-control" name="foto" required>
	</div>
	<button class="btn btn-primary" name="simpan">Simpan</button>
	<a href="index.php?halaman=produk" class="btn btn-warning">Kembali</a>
</form>

<?php 
if(isset($_POST['simpan'])) {

	$nama = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../upload/foto_produk/" . $nama);
	
	$koneksi->query("INSERT INTO produk(nama_produk, harga_produk, berat_produk, stok_produk, id_kategori, foto_produk, deskripsi_produk) VALUES('$_POST[nama]' , '$_POST[harga]' , '$_POST[berat]', '$_POST[stok]', '$_POST[kategori]', '$nama' , '$_POST[deskripsi]')");
	echo "<br><div class='alert alert-success text-center'>Data Berhasil Disimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=produk'>";

}

?>