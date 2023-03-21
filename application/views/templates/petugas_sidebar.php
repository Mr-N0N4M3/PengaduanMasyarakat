<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <!-- <?php if ($user['level'] == 2) { ?> -->
                                <a class="nav-link" href="<?= base_url('Dashboard_petugas')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style= "color:#000"></i></div>
                                <span style= "color:#000">Dashboard</span>
                            </a>
                            <!-- <?php } ?> -->
                            <a class="nav-link" href="<?= base_url('Dashboard_petugas')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style= "color:#ffffff"></i></div>
                                <span style= "color:#ffffff">Dashboard</span>
                            </a> 
                            <div class="sb-sidenav-menu-heading">Master Data</div>
                            <a class="nav-link" href="<?= base_url('Dashboard_petugas/petugas_kategori')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style= "color:#ffffff"></i></div>
                                <span style= "color:#ffffff">Kategori</span>
                            </a>
                            <a class="nav-link" href="<?= base_url('Dashboard_petugas/petugas_masyarakat')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style= "color:#ffffff"></i></div>
                                <span style= "color:#ffffff">Masyarakat</span>
                            </a>
                            <a class="nav-link" href="<?= base_url('Dashboard_petugas/masdat_petugas')?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns" style= "color:#ffffff"></i></div>
                                <span style= "color:#ffffff">Petugas</span>
                            </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>