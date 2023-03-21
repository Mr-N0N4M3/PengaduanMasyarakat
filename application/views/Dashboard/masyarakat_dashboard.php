<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Masyarakat</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="<?= base_url('assets/template/css/styles.css') ?>" rel="stylesheet" />
    </head>
    <body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Pengaduan Masyarakat</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
            </form>
           <!-- Navbar-->
           <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                 <body class="bg">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="<?= base_url('auth')?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?= base_url('Dashboard/') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link" href="<?= base_url('Dashboard/masyarakat_pengaduan') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Pengaduan
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg- text-black mb-4">
                                    <div class="card-body"
                                        style="background: linear-gradient(90deg, rgba(0,209,244,1) 0%, rgba(103,193,255,1) 100%);">
                                        Pengaduan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="background: linear-gradient(90deg, rgba(0,209,244,1) 0%, rgba(103,193,255,1) 100%);">
                                        <a class="small text-black stretched-link" href="#">View Details</a>
            
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg- text-black mb-4">
                                    <div class="card-body"
                                        style="background: linear-gradient(90deg, rgba(252,226,20,1) 100%, rgba(0,11,8,1) 100%);">
                                        proses</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="background: linear-gradient(90deg, rgba(252,226,20,1) 100%, rgba(0,11,8,1) 100%);">
                                        <a class="small text-black stretched-link" href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg- text-black mb-4">
                                    <div class="card-body"
                                        style="background: linear-gradient(90deg, rgba(1,180,21,1) 100%, rgba(0,11,8,1) 100%);">
                                        Selesai</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between"
                                        style="background: linear-gradient(90deg, rgba(1,180,21,1) 100%, rgba(0,11,8,1) 100%);">
                                        <a class="small text-black stretched-link" href="#">View Details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Data Laporan Masyarakat
                                </div>
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>tanggal</th>
                                                <th>isi</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <?php $i = 1 ?>
                                        <?php foreach ($pengaduan as $al) : ?>
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $al['tgl_pengaduan'] ?></td>
                                            <td><?= $al['isi_laporan'] ?></td>
                                            <td><img src="<?php echo base_url() . 'assetsuploadsimg' . $al['foto']?>" width="500">
                                            </td>
                                            <td><?= $al['nik'] ?></td>
                                            <td><?= $al['status'] ?></td>
                                        </tr>
                                        <?php $i++;
                                                endforeach ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; Your Website 2022</div>
                                <div>
                                    <a href="#">Privacy Policy</a>
                                    &middot;
                                    <a href="#">Terms &amp; Conditions</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="<?= base_url('assets/template/js/scripts.js') ?>"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="<?= base_url('assets/template/assets/demo/chart-area-demo.js') ?>"></script>
            <script src="<?= base_url('assets/template/assets/demo/chart-bar-demo.js') ?>"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="<?= base_url('assets/template/js/datatables-simple-demo.js') ?>"></script>
        </body>
    </html>
    
