<?= $this->extend('admin') ?>
<?= $this->section('content') ?>
<?php
	$id_jaket = [
		'name' => 'id_jaket',
		'id' => 'id_jaket',
		'value' => $model->id,
		'type' => 'hidden'
	];

	$id_pembeli = [
		'name' => 'id_pembeli',
		'id' => 'id_pembeli',
		'value' => session()->get('id'),
		'type' => 'hidden'
	];
	$jumlah = [
		'name' => 'jumlah',
		'id' => 'jumlah',
		'value' => 1,
		'min' => $model->stok,
		'class' => 'form-control',
		'type' => 'number',
		'max' => 1000000000,
	];
	$total_harga = [
		'name' => 'total_harga',
		'id' => 'total_harga',
		'value' => null,
		'class' => 'form-control',
		'readonly' => true,
	];

	$submit = [
		'name' => 'submit',
		'id' => 'submit',
		'type' => 'submit',
		'value' => 'Bidding',
		'class' => 'btn btn-success',
	];
?>

<div class ="container">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class ="card-body text-center">
                <img class="img-fluid" style="height: 200px; width: 200px;" 
                src="<?= base_url('uploads/'.$model->gambar) ?>" />
                <h3 class="text-success"><?= $model->nama ?></h3>
                <h4>Harga : <?= $model->harga?></h4>
                <h5 class="text-info">Penawaran Tertinggi : <?= $model->stok?></h5>
                </div>
            </div>
        </div>
        <div class ="col-6">
            <?= form_open('Etalase1/beli') ?>
                <?= form_input($id_jaket) ?>
                <?= form_input($id_pembeli) ?>
                <div class="form-group">
					<?= form_label('Tawaran Anda', 'jumlah') ?>
					<?= form_input($jumlah) ?>
				</div>
                <div class="form-group">
					<?= form_label('Total Harga', 'total_harga') ?>
					<?= form_input($total_harga) ?>
				</div>
                <div class="text-right">
					<?= form_submit($submit) ?>
				</div>
            <?= form_close() ?>
        </div>
    </div>
</div>


<?= $this->endSection() ?>
<?= $this->section('script') ?>
		<script>
			$('document').ready(function(){
				var jumlah_pembelian = 1;
				var harga = <?= $model->harga ?>;
				$("#jumlah").on("change", function(){
				jumlah_pembelian = $("#jumlah").val();
				var total_harga = (jumlah_pembelian);
				$("#total_harga").val(total_harga);
				});
			});

		</script>
<?= $this->endSection() ?>