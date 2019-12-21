<h2 class="text-center">Data Admin</h2>
<table class="table table-bordered text-center">
	<thead>
		<tr>
			<th>No.</th>
			<th>Username</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
			<th>Telepon</th>
			<th>Foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil =$koneksi->query("SELECT * FROM admin ORDER BY id_admin DESC") ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['user_admin']; ?></td>
			<td><?php echo $pecah['pass_admin']; ?></td>
			<td><?php echo $pecah['nama_admin']; ?></td>
			<td><?php echo $pecah ['telepon_admin']; ?></td>
			<td>
				<img src="../upload/foto_admin/<?php echo $pecah['foto_admin']; ?>" width="50" height="50">
			</td>
			<td>
				<a href="index.php?halaman=ubah_admin&id=<?php echo $pecah['id_admin'] ?>" onclick="return confirm('Anda yakin ingin mengubah data ini?')" class="btn btn-primary">Ubah</a>
				<a href="index.php?halaman=hapus_admin&id=<?php echo $pecah['id_admin'] ?>"
				onclick="return confirm('Anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambah_admin" onclick="return confirm('Anda yakin ingin tambah admin?')" class="btn btn-success">[+] Tambah Admin</a>