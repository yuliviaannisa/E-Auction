<?= $this->extend('admin') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <?php foreach($model as $m): ?>
            <div class="col-4">
                <div class ="card text-center">
                    <div class= "card-header">
                        <span class ="text-success"><strong>
                        <?= $m->nama ?></strong></span>
                    </div>
                    <div class ="card-body">
                        <img class="img-thumbnail" style="height: 200px; width: 200px;" src="<?= base_url('uploads/'.$m->gambar) ?>" />
                        <h5 class ="mt-3 text-success">
                        <?= "Rp ".number_format($m->harga,2,',','.') ?>
                        </h5>
                        <p class ="text-info">Penawaran Tertinggi : <?= "Rp ".number_format($m->stok,2,',','.') ?></p>
                    </div>
                    <div class ="card-footer">
                        <a href="<?= site_url('etalase2/beli/'.$m->id)?>" style="width:100%" class ="btn btn-success"> Bidding </a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
    </div>
</div>

<?= $this->endSection() ?>