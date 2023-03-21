<div id="layoutSidenav_content">
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title">Laporan Masyarakat</h4>
                    <ul class="breadcrumbs">
                        <li class="nav-item">
                            <a>Pengaduan</a>
                        <li class="nav-item">
                            <a>Masyarakat</a>
                        <li class="nav-item">
                            <a>Sejahtera</a>
                        </li>
                    </ul>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title">Laporkan Saja</h4>
                                </div>
                            </div>

                            <div class="card-body">
                                <form action="<?= base_url('dashboard/buat_pengaduan') ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Kategori</label>
                                                <select class="form-control" id="kategori" name="kategori">
                                                    <option>- Pilih - </option>
                                                    <option value="1">Prasarana Umum</option>
                                                    <option value="2">Lingkungan Hidup</option>
                                                    <option value="3">Perhubungan</option>
                                                    <option value="4">Kesehatan</option>
                                                    <option value="5">Pelanggaran Peraturan Daerah</option>
                                                    <option value="6">Perizinan</option>
                                                    <option value="7">Sosial</option>
                                                    <option value="8">Perpajakan</option>
                                                    <option value="9">Komunikasi dan Informatika</option>
                                                    <option value="10">Kepegawaian</option>
                                                    <option value="11">Pelayanan Kecamatan Kelurahan</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sub Kategori</label>
                                                <select class="form-control" id="subkategori" name="subkategori">
                                                    <option>- Pilih - </option>
                                                    <option value="1">Penerangan Jalan Umum</option>
                                                    <option value="2">Jalan</option>
                                                    <option value="3">Jembatan</option>
                                                    <option value="4">Saluran Air Hujan</option>
                                                    <option value="5">Perbaikan Jalan Umum</option>
                                                    <option value="6">Penanaman Tanaman Hijau</option>
                                                    <option value="7">Pengobatan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tanggal</label>
                                                <input type="date" class="form-control" id="tgl_pengaduan" name="tgl_pengaduan"
                                                    placeholder="tgl_pengaduan">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Isi Laporan Pengaduan</label>
                                                <textarea class="form-control" id="isi_laporan" name="isi_laporan"
                                                    rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                    <label>Kirim Foto</label>
                                                    <input type="file" class="form-control-file" id="foto" class="foto" name="foto">
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="card-action">
                                <button class="btn btn-success" type="submit">Laporkan</button>
                                <button class="btn btn-danger" type="reset">Reset</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>