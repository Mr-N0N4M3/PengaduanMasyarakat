<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
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
        
        <!-- Bootstrap core JavaScript-->

        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
              $("#kategori").change(function() {
                var url = "<?php echo site_url('masyarakat_pengaduan/Dashboard/get_sub_kategori'); ?>/" + $(this).val();
                $('#subkategori').load(url);
                return false;
            })
        });
        </script>
    </body>
</html>
