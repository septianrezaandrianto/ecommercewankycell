<h2 class="text-center">Data Pelanggan</h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Pelanggan</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Email</th>
			<th>Password</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php $nomor =1; ?>		
		<?php $ambil = $koneksi->query("SELECT * FROM pelanggan ORDER BY id_pelanggan DESC"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo $pecah['telepon_pelanggan']; ?></td>
			<td><?php echo $pecah['alamat_pelanggan']; ?></td>
			<td><?php echo $pecah['email_pelanggan']; ?></td>
			<td><?php echo $pecah['pass_pelanggan']; ?></td>
			<td>
				<a href="index.php?halaman=hapus_pelanggan&id=<?php echo $pecah['id_pelanggan'] ?>"
				onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
		
	</tbody>
</table>