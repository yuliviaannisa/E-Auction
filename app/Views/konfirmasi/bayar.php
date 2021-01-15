<?= $this->extend('admin')?>
<?= $this->section('content')?>
<?php
    $kode = [
        'name' => 'kode',
        'id' => 'kode',
        'value' => null,
        'class' => 'form-control',
    ];
    $nama = [
        'name' => 'nama',
        'id' => 'nama',
        'value' => null,
        'class' => 'form-control',
    ];

    $pembayaran = [
        'name' => 'pembayaran',
        'id' => 'pembayaran',
        'value' => null,
        'class' => 'form-control',
    ];

    $rekening = [
        'name' => 'rekening',
        'id' => 'rekening',
        'value' => null,
        'class' => 'form-control',
    ];

    $tanggal = [
        'name' => 'tanggal',
        'id' => 'tanggal',
        'value' => null,
        'class' => 'form-control',
    ];
    $jam = [
        'name' => 'jam',
        'id' => 'jam',
        'value' => null,
        'class' => 'form-control',
    ];
    $bukti = [
        'name' => 'bukti',
        'id' => 'bukti',
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
    <h1>Konfirmasi Pembayaran</h1>
    <?= form_open_multipart('konfirmasi/index') ?>
        <div class = "form-group">
            <?= form_label("Kode Barang","kode barang") ?>
            <?= form_input($kode) ?>
        </div>

        <div class="form-group">
            <?= form_label("Nama Pemesan", "nama pemesan") ?>
            <?= form_input($nama) ?>
        </div>

        <div class="form-group">
            <?= form_label("Pembayaran via", "pembayaran via") ?>
            <?= form_input($pembayaran) ?>
        </div>

        <div class="form-group">
            <?= form_label("Rekening a.n", "rekening a.n") ?>
            <?= form_input($rekening) ?>
        </div>

        <div class="form-group">
            <?= form_label("Tanggal transaksi", "tanggal transaksi") ?>
            <?= form_input($tanggal) ?>
        </div>

        <div class="form-group">
            <?= form_label("Jam transaksi", "jam transaksi") ?>
            <?= form_input($jam) ?>
        </div>

        <div class="form-group">
            <?= form_label("Upload Bukti Pembayaran", "upload bukti pembayaran") ?>
            <?= form_upload($bukti) ?>
        </div>

        <div class="text-right">
            <?= form_submit($submit) ?>
        </div>
        </div>
    </div>

<?= form_close() ?>
<?= $this->endSection() ?>