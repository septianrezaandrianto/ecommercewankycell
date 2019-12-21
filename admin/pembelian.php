<?php require"../config/function.libs.php"; ?>

<h2 class="text-center">Data Pembelian</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No.</th>
			<th>Nama Pelanggan</th>
			<th>Tanggal Pembelian</th>
			<th>Status Pembelian</th>
			<th>Total</th>
			<th class="text-center">Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_pelanggan = pelanggan.id_pelanggan ORDER BY id_pembelian DESC"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_pelanggan']; ?></td>
			<td><?php echo tanggal($pecah['tanggal_pembelian']); ?></td>
			<td><?php echo $pecah['status_pembelian']; ?></td>
			<td>Rp. <?php echo number_format($pecah['total_pembelian']); ?></td>
			<td><a href="index.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-primary">Detail</a>

			<?php if($pecah['status_pembelian']!="Pending"): ?>
				<a href="index.php?halaman=pembayaran&id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-default">Pembayaran</a>
				<a href="cetak.php?id=<?php echo $pecah['id_pembelian']; ?>" class="btn btn-info">Cetak</a>
			<?php endif ?>

			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>