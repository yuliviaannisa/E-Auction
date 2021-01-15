<?= $this->extend('admin') ?>
<?= $this->section('content') ?>
<table class="table table-striped">
	<thead class="thead-dark">
	<tr>
		<th colspan ="2"><h3>Transaksi No <?= $transaksi->id_trans ?></h3></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Barang Lelang</td>
		<td><?= $transaksi->nama ?></td>
	</tr>
	<tr>
		<td>Nama Pembeli</td>
		<td><?= $transaksi->username ?></td>
	</tr>
	<tr>
		<td>Penawaran</td>
		<td><?= $transaksi->jumlah ?></td>
	</tr>
	<tr>
		<td>Total Harga</td>
		<td><?= $transaksi->total_harga ?></td>
	</tr>
	</tbody>
</table>
<?= $this->endSection() ?>