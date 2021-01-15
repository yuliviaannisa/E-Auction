<?= $this->extend('admin')?>
<?= $this->section('content')?>

<?php
    $nama = [
        'name' => 'nama',
        'id' => 'nama',
        'value' => null,
        'class' => 'form-control',
    ];

    $harga = [
        'name' => 'harga',
        'id' => 'harga',
        'value' => null,
        'class' => 'form-control',
        'type' => 'number',
        'min' => 0,
    ];

    $stok = [
        'name' => 'stok',
        'id' => 'stok',
        'value' => null,
        'class' => 'form-control',
        'type' => 'number',
        'min' => 0,
    ];

    $gambar = [
        'name' => 'gambar',
        'id' => 'gambar',
        'value' => null,
        'class' => 'form-control',
    ];

    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success',
        'type' => 'submit',
    ];

?>

<div class= "content-wrapper">
<div class= "col-8">
<h1>Tambah Barang Lelang</h1>
<?= form_open_multipart('Kopi/create') ?>
    <div class = "form-group">
        <?= form_label("Nama","nama") ?>
        <?= form_input($nama) ?>
    </div>

    <div class="form-group">
		<?= form_label("Harga", "harga") ?>
		<?= form_input($harga) ?>
	</div>

	<div class="form-group">
		<?= form_label("Penawaran Tertinggi", "stok") ?>
		<?= form_input($stok) ?>
	</div>

	<div class="form-group">
		<?= form_label("Gambar", "gambar") ?>
		<?= form_upload($gambar) ?>
	</div>

	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>
</div>
</div>
<?= form_close() ?>
<?= $this->endSection() ?>