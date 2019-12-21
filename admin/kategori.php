<h2 class="text-center">Data Kategori Produk</h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Kategori</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM kategori ORDER BY id_kategori DESC"); ?>
		<?php while($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_kategori']; ?></td>
			<td>
				<a href="index.php?halaman=ubah_kategori&id=<?php echo $pecah['id_kategori']; ?>" onclick="return confirm('Anda yakin ingin mengubah data ini?')" class="btn btn-primary">Ubah</a>
				<a href="index.php?halaman=hapus_kategori&id=<?php echo $pecah['id_kategori']; ?>" onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_kategori" onclick="return confirm('Anda yakin ingin tambah kategori?')" class="btn btn-success">[+] Tambah Kategori</a>