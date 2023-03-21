<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Admin</title>
    <link href="<?= base_url('assets/template/css/styles.css ') ?>" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,100,121,1) 35%, rgba(0,212,255,1) 100%);">
<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,100,121,1) 35%, rgba(0,212,255,1) 100%);">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login Admin</h3>
                                </div>

                                <?= $this->session->flashdata('message'); ?>
                                <div class="card-body">
                                    <form method="POST" action="<?= base_url('dashboard_admin/') ?>">
                                    <form method="POST" action="<?= base_url('dashboard_petugas/') ?>">
                                    <?php echo form_hidden($this->security->get_csrf_token_name(),$this->security->get_csrf_hash()) ?>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" name="username" type="text" placeholder="name@example.com" />
                                            <label for="username">Username</label>
                                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block btn-login">Login</button>
                                    </form>
                                    <hr>
                                    <a href="<?= base_url('Admin/petugas_login')?>" style ="color: #009bff;">login as Petugas</a>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="<?= base_url('Admin/registrasi_admin') ?>">Create Account</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>

    </div>