<?= $this->extend('admin') ?>
<?= $this->section('content') ?>
<table class="table table-striped">
	<thead class="thead-dark">
	<tr>
		
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>Invoice Pembayaran</td>
		<td><?= $bayar->id_barang ?></td>
	</tr>
	<tr>
		<td>Nama Pemesan</td>
		<td><?= $bayar->nama_pemesan ?></td>
	</tr>
	<tr>
		<td>Pembayaran via</td>
		<td><?= $bayar->bayar_via ?></td>
	</tr>
	<tr>
		<td>An Rekening</td>
		<td><?= $bayar->anrekening_trx ?></td>
	</tr>
	<tr>
		<td>Tanggal Transfer</td>
		<td><?= $bayar->tgl_trx ?></td>
	</tr>
	<tr>
		<td>Jam Transfer</td>
		<td><?= $bayar->jam_trx ?></td>
	</tr>
	</tbody>
</table>
<?= $this->endSection() ?>