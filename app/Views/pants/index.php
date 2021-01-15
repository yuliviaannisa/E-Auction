<?= $this->extend('admin')?>
<?= $this->section('content')?>
<h2>List Kemeja</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Kemeja</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Kategori</th>
        <th>Penawaran Tertinggi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($pants as $index => $pants): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $pants->nama ?></td>
                <td>
                    <img class="img-fluid" width="200px" alt="gambar" src="
                    <?= base_url('uploads/'.$pants->gambar) ?>" />
                </td>
                <td><?= $pants->harga ?></td>
                <td><?= $pants->kategori ?></td>
				<td><?= $pants->stok ?></td>
				<td>
					<a href="<?= site_url('shirt/view/'.$pants->id) ?>" class="btn btn-primary">View</a>
					<a href="<?= site_url('shirt/update/'.$pants->id) ?>" class="btn btn-success">Update</a>
					<a href="<?= site_url('shirt/delete/'.$pants->id) ?>" class="btn btn-danger">Delete</a>
				</td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>