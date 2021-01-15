<?= $this->extend('admin')?>
<?= $this->section('content')?>
<h2>List Sweater</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Sweater</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Penawaran Tertinggi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($kopi as $index => $kopi): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $kopi->nama ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$kopi->gambar) ?>" />
                </td>
                <td><?= $kopi->harga ?></td>
				<td><?= $kopi->stok ?></td>
				<td>
					<a href="<?= site_url('kopi/view/'.$kopi->id) ?>" class="btn btn-primary">View</a>
					<a href="<?= site_url('kopi/update/'.$kopi->id) ?>" class="btn btn-success">Update</a>
					<a href="<?= site_url('kopi/delete/'.$kopi->id) ?>" class="btn btn-danger">Delete</a>
				</td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>