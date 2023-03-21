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
                                <h3 class="m-0">Masyarakat</h3>
                            </div><!-- /.col -->
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Masyarakat</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nik</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Telepon</th>                                                                                     
                                        </tr>
                                    </thead>
                                    <?php $i = 1 ?>
                                    <?php foreach ($masyarakat as $mk) : ?>
                                        <tr>
                                            <th><?= $i ?></th>
                                            <td><?= $mk['nik'] ?></td>
                                            <td><?= $mk['nama'] ?></td>
                                            <td><?= $mk['username'] ?></td>
                                            <td><?= $mk['no_telp'] ?></td>
                                            <td></td>
                                        </tr>
                                        <?php $i++;
                                        endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>