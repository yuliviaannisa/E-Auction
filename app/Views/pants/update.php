<?= $this->extend('admin')?>
<?= $this->section('content')?>
<?php
    $nama = [
        'name' => 'nama',
        'id' => 'nama',
        'value' => $pants->nama,
        'class' => 'form-control',
    ];

    $harga = [
        'name' => 'harga',
        'id' => 'harga',
        'value' => $pants->harga,
        'class' => 'form-control',
        'type' => 'number',
        'min' => 0,
    ];

    $stok = [
        'name' => 'stok',
        'id' => 'stok',
        'value' => $pants->stok,
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

<h1>Tambah Barang Lelang</h1>
<?= form_open_multipart('Shirt/update/'.$pants->id) ?>
    <div class = "form-group">
        <?= form_label("Nama","nama") ?>
        <?= form_input($nama) ?>
    </div>

    <div class="form-group">
		<?= form_label("Harga", "harga") ?>
		<?= form_input($harga) ?>
	</div>

	<div class="form-group">
		<?= form_label("Stok", "stok") ?>
		<?= form_input($stok) ?>
	</div>
    
    <img class="img-fluid" alt="image" 
    src="<?= base_url('uploads/'.$pants->gambar) ?>"/>

	<div class="form-group">
		<?= form_label("Gambar", "gambar") ?>
		<?= form_upload($gambar) ?>
	</div>

	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>