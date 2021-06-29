<?= $this->extend('sidebar')?>
<?= $this->section('content')?>

<h2>Daftar Siswa</h2>
<table class = "table">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>NISN</th>
        <th>TTL</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Status</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach($model as $index => $m): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $m->nama ?></td>
                <td><?= $m->jenis ?></td>
                <td><?= $m->nisn ?></td>
                <td><?= $m->lahir ?></td>
                <td><?= $m->nohp ?></td>
                <td><?= $m->alamat ?></td>
                <td><?= $m->status ?></td>
                <td><a class="btn btn-primary"  href="<?= site_url('mhijau/view/'.$m->id) ?>" >Lihat</a></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>    

<?= $this->endSection() ?>