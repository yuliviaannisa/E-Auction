<?= $this->extend('admin')?>
<?= $this->section('content')?>
    <h1>Detail Lelang</h1>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$pants->gambar) ?>"/>
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <h1 class = "text-success"><?= $pants->nama ?></h1>
                <h4>Harga : <?= $pants->harga ?></h4>
                <h4>Penawaran  : <?= $pants->stok ?></h4>
            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>