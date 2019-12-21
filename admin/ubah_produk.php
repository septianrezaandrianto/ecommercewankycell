	<h2 class="text-center">Ubah Data Produk</h2>
	<?php 
	//Query Produk
	$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk = '$_GET[id]'");
	$pecah = $ambil->fetch_assoc();

	//Query Kategori
	$ambil2 = $koneksi->query("SELECT * FROM kategori");
	$pecah2 = $ambil2->fetch_assoc();
	?>
	<!-- <pre><?php // print_r($pecah); ?></pre> -->
	<form method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label>Nama Produk</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_produk']?>">
		</div>
		<div class="form-group">
			<label>Kategori</label>
			<select name="kategori" class="form-control">
			<?php do{ ?>
			<option value="<?php echo $pecah2['id_kategori']?>" <?php if($pecah['id_kategori'] == $pecah2['id_kategori']){echo "selected";}?>>
			<?=$pecah2['nama_kategori']; ?>
			</option>
		<?php } while($pecah2 = $ambil2->fetch_assoc()); ?>
		</select>
		</div>
		<div class="form-group">
			<label>Harga (Rp)</label>
			<input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_produk']?>">
		</div>
		<div class="form-group">
			<label>Berat (Gr)</label>
			<input type="number" name="berat" class="form-control" value="<?php echo $pecah['berat_produk']?>">
		</div>
		<div class="form-group">
			<label>Stok (Pcs)</label>
			<input type="number" name="stok" class="form-control" value="<?php echo $pecah['stok_produk']?>">
		</div>
		<div class="form-group">
			<img src="../upload/foto_produk/<?php echo $pecah['foto_produk']?>" width="150" height="150">
		</div>
		<div class="form-group">
			<label>Ganti Foto Produk</label>
			<input type="file" name="foto" class="form-control">
		</div>
		<div class="form-group">
			<label>Deskripsi Produk</label>
			<textarea name="deskripsi" class="form-control" rows="5"><?php echo $pecah['deskripsi_produk']; ?></textarea>
		</div>
		<button class="btn btn-primary" name="simpan">Simpan</button>
		<a href="index.php?halaman=produk" class="btn btn-warning">Kembali</a>
	</form>

	<?php 

	if (isset($_POST['simpan'])) {
		$nama = $_FILES['foto']['name'];
		$lokasi = $_FILES['foto']['tmp_name'];

		if (!empty($lokasi)) {
			move_uploaded_file($lokasi, "../upload/foto_produk/$nama");

			$koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = '$_POST[harga]', berat_produk = '$_POST[berat]', stok_produk = '$_POST[stok]', id_kategori = '$_POST[kategori]', foto_produk = '$nama', deskripsi_produk = '$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'");
		} else {
			$koneksi->query("UPDATE produk SET nama_produk = '$_POST[nama]', harga_produk = '$_POST[harga]', berat_produk = '$_POST[berat]', stok_produk = '$_POST[stok]', id_kategori = '$_POST[kategori]', deskripsi_produk = '$_POST[deskripsi]' WHERE id_produk = '$_GET[id]'");
		}

		echo "<script>alert('Data Berhasil Diubah');</script>";
		echo "<script>location='index.php?halaman=produk';</script>";
	}
	 ?>