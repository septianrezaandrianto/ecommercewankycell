<h2 class="text-center">Data Bank</h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Bank</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM bank ORDER BY id_bank DESC"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_bank']; ?></td>
			<td>
				<a href="index.php?halaman=ubah_bank&id=<?php echo $pecah['id_bank'] ?>" onclick="return confirm('Anda yakin ingin mengubah data ini?')" class="btn btn-primary">Ubah</a>
				<a href="index.php?halaman=hapus_bank&id=<?php echo $pecah['id_bank'] ?>"
				onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
	</tbody>
	<?php $nomor++; ?>
	<?php } ?>	
</table>
<a href="index.php?halaman=tambah_bank" onclick="return confirm('Anda yakin ingin tambah Bank?')" class="btn btn-success">[+] Tambah Bank</a>