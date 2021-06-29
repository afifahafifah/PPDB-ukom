<?= $this->extend('sidebar')?>
<?= $this->section('content')?>

<?php
    $nama = [
        'name' => 'nama',
        'id' => 'nama',
        'value' => null,
        'class' => 'form-control',
    ];


    $jenis = [
        'name' => 'jenis',
        'id' => 'jenis',
        'value' => null,
        'class' => 'form-control',
    ];
    

    $alamat = [
        'name' => 'alamat',
        'id' => 'alamat',
        'value' => null,
        'class' => 'form-control',
    ];

    $nohp = [
        'name' => 'nohp',
        'id' => 'nohp',
        'value' => null,
        'class' => 'form-control',

    ];

    $nisn = [
        'name' => 'nisn',
        'id' => 'nisn',
        'value' => null,
        'class' => 'form-control',
    ];

    $lahir = [
        'name' => 'lahir',
        'id' => 'lahir',
        'value' => null,
        'class' => 'form-control',
    ];
    $agama = [
        'name' => 'agama',
        'id' => 'agama',
        'value' => null,
        'class' => 'form-control',
    ];
    $mtk = [
        'name' => 'mtk',
        'id' => 'mtk',
        'value' => null,
        'class' => 'form-control',
    ];
    $bing = [
        'name' => 'bing',
        'id' => 'bing',
        'value' => null,
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
<h1>Form Pendaftaran</h1>
<?= form_open_multipart('Mhijau/create') ?>
    <div class = "form-group">
        <?= form_label("Nama","nama") ?>
        <?= form_input($nama) ?>
    </div>

	
	<div class="form-group">
        <?= form_label("Jenis Kelamin", "jenis") ?>
        <select class="form-control select4" name="jenis" id="jenis">
            <option value=""></option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
            </select>
    </div>

     <div class="form-group"> 
        <?= form_label("NISN", "nisn") ?>
        <?= form_input($nisn) ?>
    </div>

     <div class="form-group">
        <?= form_label("Tempat/Tanggal Lahir", "lahir") ?>
        <?= form_input($lahir) ?>
    </div>

    <div class="form-group">
        <?= form_label("No HP", "nohp") ?>
        <?= form_input($nohp) ?>
    </div>

    <div class="form-group">
        <?= form_label("Alamat rumah", "alamat") ?>
        <?= form_input($alamat) ?>
    </div>

    <div class="form-group">
        <?= form_label("Agama", "agama") ?>
        <select class="form-control select4" name="agama" id="agama">
            <option value=""></option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            </select>
    </div>
    <div class="form-group">
        <?= form_label("Nilai MTK", "mtk") ?>
        <?= form_input($mtk) ?>
    </div>
    <div class="form-group">
        <?= form_label("Nilai B.Inggris", "bing") ?>
        <?= form_input($bing) ?>
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