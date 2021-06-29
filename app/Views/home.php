<?= $this->extend('sidebar')?>
<?= $this->section('content')?>


               <div class="jumbotron bg-light text-white-50">
    <div class="container text-center">
        <h1>Selamat Datang
        <br> PPDB ONLINE SMA N1 Bandar Lampung</h1>
        <h4>
            <?php
                echo session()->get('username');
            ?>
        </h4>
        <br>
        <div class="container card-center" style="width: 20rem;">
            <img src="/logo.png" class="card-img-top" alt="gambar">
        </div>
    </div>
</div>

                    <!-- Content Row -->



<?= $this->endSection() ?>