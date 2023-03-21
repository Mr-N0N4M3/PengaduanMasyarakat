<div id="layoutSidenav_content">
<div class="page-wrapper">

<!-- PAGE CONTAINER-->
<div class="page-container">
    <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pengaduan</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    </div>
                </div>
            </div>
        </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelapor</th>
                                    <th>Tanggal</th>
                                    <th>Telepon</th>
                                    <th>isi</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <?php $i = 1 ?>
                            <?php foreach ($pengaduan as $al) : ?>
                                <tr>
                                    <td><?= $i ?></td>
                                    <td><?= $al['nama'] ?></td>
                                    <td><?= $al['tgl_pengaduan'] ?></td>
                                    <td><?= $al['no_telp'] ?></td>
                                    <td><?= $al['isi_laporan'] ?></td>
                                    <!-- <td><img src="<?php echo base_url() . '/assets/img/' . $al['foto']; ?>" width="100"></td> -->
                                    <td>
                                            <a href="#" class="btn btn-warning btn-xs btn-block">Proses</a>
                                            <?php if ($al['status'] == "0") : ?>
                                                <a href="#" class="btn btn-warning btn-xs btn-block">Proses</a>
                                                
                                            <?php elseif ($al['status'] == "proses") : ?>
                                                <a href="#" class="btn btn-warning btn-xs btn-block">Proses</a>
                                            <?php else : ?>
                                                <div class="badge badge-success">
                                                    <?= $al['status'] == "1" ?>
                                                </div>
                                            <?php endif; ?>
                                            </a>
                                        </td>
                                </tr>
                            <?php $i++;
                            endforeach ?>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
    </div>