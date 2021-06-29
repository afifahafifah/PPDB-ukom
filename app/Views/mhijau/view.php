<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i>
                        </button>
    <h1>Form Pendaftaran SMA N 1 Bandar Lampung</h1>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <img class="img-fluid" alt="image" src="<?= base_url('uploads/'.$mhijau->gambar) ?>"/>
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <br>
                <h4>Nama  : <?= $mhijau->nama ?></h4>
                <h4>Jenis Kelamin : <?= $mhijau->jenis ?></h4>
                <h4>NISN  : <?= $mhijau->nisn ?></h4>
                <h4>Tempat/Tanggal lahir : <?= $mhijau->lahir ?></h4>
                <h4>Nomor HP  : <?= $mhijau->nohp ?></h4>
                <h4>Alamat  : <?= $mhijau->alamat ?></h4>
                <h4>Agama  : <?= $mhijau->agama ?></h4>
                <h4>Nilai mtk  : <?= $mhijau->mtk ?></h4>
                <h4>Nilai bing  : <?= $mhijau->bing ?></h4>
                <h4>Status  : <?= $mhijau->status ?></h4>
            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>