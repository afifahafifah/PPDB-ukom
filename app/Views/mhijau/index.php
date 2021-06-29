<?= $this->extend('sidebar')?>
<?= $this->section('content')?>


<div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class='mt-2'  style="text-align:center;">Daftar Siswa</h1>
                            <form action="" method="post">
                            
                            </form>
                        </div>
                    </div>    
                </div>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DAFTAR SISWA</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th scope="col">No </th>
                                            <th scope="col">Nama </th>
                                            <th scope="col">Jenis Kelamin</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">TTL</th>
                                            <th scope="col">Alamat</th>
                                            <th scope="col">Status</th>
                                        
                                       
                                            <th scope="col">Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
        <?php foreach($mhijaus as $index => $mhijau): ?>
            <tr>
                <td><?= ($index+1) ?></td>
                <td><?= $mhijau->nama ?></td>
                <td><?= $mhijau->jenis ?></td>
                <td><?= $mhijau->nisn ?></td>
                <td><?= $mhijau->lahir ?></td>
                <td><?= $mhijau->alamat ?></td>
                <td><?= $mhijau->status ?></td>
                
                
                                    <td>
                                        <a href="<?= site_url('mhijau/view/'.$mhijau->id) ?>" class="btn btn-primary">View</a>
                                        <a href="<?= site_url('mhijau/update/'.$mhijau->id) ?>" class="btn btn-success">Update</a>
                                        <a href="<?= site_url('mhijau/delete/'.$mhijau->id) ?>" class="btn btn-danger">Delete</a>
                                            </td>

                                       
                                </tr>
                                <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>



<?= $this->endSection() ?>
