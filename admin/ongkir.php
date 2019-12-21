<h2 class="text-center">Data Ongkos Kirim</h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Kota</th>
			<th>Tarif</th>
			<th>Aksi</th>

		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM ongkir ORDER BY id_ongkir DESC"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_kota']; ?></td>
			<td>Rp. <?php echo number_format($pecah['tarif_ongkir']); ?></td>
			<td>
				<a href="index.php?halaman=ubah_ongkir&id=<?php echo $pecah['id_ongkir'] ?>" onclick="return confirm('Anda yakin ingin mengubah data ini?')" class="btn btn-primary">Ubah</a>
				<a href="index.php?halaman=hapus_ongkir&id=<?php echo $pecah['id_ongkir'] ?>"
				onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
	</tbody>
	<?php $nomor++; ?>
	<?php } ?>	
</table>
<a href="index.php?halaman=tambah_ongkir" onclick="return confirm('Anda yakin ingin tambah Ongkos Kirim?')" class="btn btn-success">[+] Tambah Ongkos Kirim</a>