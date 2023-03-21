<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- my css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">



</head>

<body style="background-image: url('<?= base_url('assets/img/bg-hotel.jpg') ?>') ;background-position:center;background-size:cover;background-repeat:no-repeat;">



    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-dark mb-5" style="padding:15px 150px">
        <div class="container-fluid ">

            <h3><a class="navbar-brand text-light" href="#">Tambah Kategori</a></h3>
            <a href="<?= base_url('dashboard_admin/tambah_kategori') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">tambah kategproior</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto  text-light">
                    <a class="nav-link text-light" href="<?= base_url('dashboard_admin/') ?>"></a>
                </div>
            </div>

        </div>
    </nav>

    <!-- Main -->
    <div class="container ">

        <div class="card">
            <div class="card-body">

                <h3 class="card-subtitle mb-2 text-muted mb-4">Tambah Kategori</h3>
                <form method="post" action="<?= base_url('dashboard_admin/tambah_kategori') ?>">
                    <?php echo form_hidden($this->security->get_csrf_token_name(), $this->security->get_csrf_hash())   ?>

                    <fieldset disabled>
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <h6><label for="disabledTextInput" class="form-label">kategori</label></h6>
                                <input type="text" class="form-control mb-3" id="nama" name="kategori" value="<?= $get_user['kategori'] ?>" aria-describedby="kayegori" placeholder="Disabled input">

                            </div>

                            <div class="col-md-6">


                                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>

        </div>`
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
</body>

</html>