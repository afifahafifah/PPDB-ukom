<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
<?php
    $nama = [
        'name' => 'nama',
        'id' => 'nama',
        'value' => $mhijau->nama,
        'class' => 'form-control',
    ];


    $lahir = [
        'name' => 'lahir',
        'id' => 'lahir',
        'value' => $mhijau->lahir,
        'class' => 'form-control',
    ];

    $nisn = [
        'name' => 'nisn',
        'id' => 'nisn',
        'value' => $mhijau->nisn,
        'class' => 'form-control',

    ];

    $agama = [
        'name' => 'agama',
        'id' => 'agama',
        'value' => $mhijau->agama,
        'class' => 'form-control',
    ];


    $alamat = [
        'name' => 'alamat',
        'id' => 'alamat',
        'value' => $mhijau->alamat,
        'class' => 'form-control',
    ];

    $jenis = [
        'name' => 'jenis',
        'id' => 'jenis',
        'value' => $mhijau->jenis,
        'class' => 'form-control',

    ];

    $nohp = [
        'name' => 'nohp',
        'id' => 'nohp',
        'value' => $mhijau->nohp,
        'class' => 'form-control',
    ];
     $mtk = [
        'name' => 'mtk',
        'id' => 'mtk',
        'value' => $mhijau->mtk,
        'class' => 'form-control',

    ];

    $bing = [
        'name' => 'bing',
        'id' => 'bing',
        'value' => $mhijau->bing,
        'class' => 'form-control',
    ];
    $status = [
        'name' => 'status',
        'id' => 'status',
        'value' => $mhijau->status,
        'class' => 'form-control',
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
<h1>Update Daftar</h1>
<?= form_open_multipart('Mhijau/update/'.$mhijau->id) ?>
    <div class = "form-group">
        <?= form_label("Nama","nama") ?>
        <?= form_input($nama) ?>
    </div>

     <div class="form-group">
        <?= form_label("Jenis Kelamin", "jenis") ?>
        <?= form_input($jenis) ?>
    </div>

      <div class="form-group">
        <?= form_label("Tempat/Tanggal lahir ", "lahir") ?>
        <?= form_input($lahir) ?>
    </div>


     <div class="form-group">
        <?= form_label("No HP", "nohp") ?>
        <?= form_input($nohp) ?>
    </div>

     <div class="form-group">
        <?= form_label("NISN", "nisn") ?>
        <?= form_input($nisn) ?>
    </div>

     <div class="form-group">
        <?= form_label("Alamat", "alamat") ?>
        <?= form_input($alamat) ?>
    </div>

    <div class="form-group">
        <?= form_label("Agama", "agama") ?>
        <?= form_input($agama) ?>
    </div>

     <div class="form-group">
        <?= form_label("Nilai mtk", "mtk") ?>
        <?= form_input($mtk) ?>
    </div>

    <div class="form-group">
        <?= form_label("Nilai bing", "bing") ?>
        <?= form_input($bing) ?>
    </div>
    <div class="form-group">
        <?= form_label("Status", "status") ?>
        <select class="form-control select4" name="status" id="status">
            <option value=""></option>
            <option value="Diterima">Diterima</option>
            <option value="Ditolak">Ditolak</option>
            </select>
    </div>
    <div class="form-group">
        <?= form_label("Gambar", "gambar") ?>
        <?= form_upload($gambar) ?>
    </div>

	<div class="text-right">
		<?= form_submit($submit) ?>
	</div>

<?= form_close() ?>
<?= $this->endSection() ?>