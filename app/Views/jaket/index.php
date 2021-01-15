<?= $this->extend('admin')?>
<?= $this->section('content')?>
<h2>List Jaket</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Jaket</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Kategori</th>
        <th>Penawaran Tertinggi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($jaket as $index => $jaket): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $jaket->nama ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$jaket->gambar) ?>" />
                </td>
                <td><?= $jaket->harga ?></td>
                <td><?= $jaket->kategori ?></td>
				<td><?= $jaket->stok ?></td>
				<td>
					<a href="<?= site_url('jaket/view/'.$jaket->id) ?>" class="btn btn-primary">View</a>
					<a href="<?= site_url('jaket/update/'.$jaket->id) ?>" class="btn btn-success">Update</a>
					<a href="<?= site_url('jaket/delete/'.$jaket->id) ?>" class="btn btn-danger">Delete</a>
				</td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>