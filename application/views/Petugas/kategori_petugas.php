<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Kategori</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Pengaduan</li>
            </ol>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Laporan Masyarakat
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no =1;
                                    foreach ($kategori as $k) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $k['kategori'] ?></td>
                                    </tr>
                                    <?php
                                        $no++;
                                    endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-4">

                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Laporan Masyarakat
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Sub Kategori</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no =1;
                                    foreach ($sub_kategori as $k) : ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $k['sub_kategori'] ?></td>
                                    </tr>
                                    <?php
                                        $no++;
                                    endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>