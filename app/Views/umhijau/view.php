<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
    <h1>Detail Buku</h1>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$mhijau->doc) ?>"/>
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <h1 class = "text-success"><?= $mhijau->nama ?></h1>
                <h4>Tanggal  : <?= $mhijau->tanggal ?></h4>
                <h4>Nomor  : <?= $mhijau->nomor ?></h4>
                <h4>Perihal  : <?= $mhijau->perihal ?></h4>
            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>