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
                        <h3 class="m-0">Petugas</h3>
                    </div><!-- /.col -->
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Petugas</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama Petugas</th>
                                    <th>Telepon</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <?php $i = 1 ?>
                            <?php foreach ($petugas as $al) : ?>
                                <tr>
                                    <input type="hidden" name="nik" value="<? $al['username'] ?>">
                                    <input type="hidden" name="nama" value="<? $al['nama'] ?>">
                                    <input type="hidden" name="telepon" value="<? $al['no_telp'] ?>">
                                    <input type="hidden" name="status" value="<? $al['status'] ?>">
                                    <td><?= $i ?></td>
                                    <td><?= $al['username'] ?></td>
                                    <td><?= $al['nama_petugas'] ?></td>
                                    <td><?= $al['no_telp'] ?></td>
                                    <td><?= $al['level'] ?></td>
                                    <td>
                                        <a href="" class="btn btn btn-warning"><i class="fas fa-undo"></i></a>
                                        <a href="" class="btn btn btn-danger"><i class="fas fa-lock"></i></a>
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