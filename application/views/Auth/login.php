<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login Masyarakat</title>
    <link href="<?= base_url()?>assets/template/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,100,121,1) 35%, rgba(0,212,255,1) 100%);">
<body style="background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,100,121,1) 35%, rgba(0,212,255,1) 100%);">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('Dashboard') ?>" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="username" id="username" type="text"
                                                placeholder="username" />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" id="inputPassword"
                                                type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                </div>
                                <div class="card-body text-center py-3">
                                    <button class="mb-4 py-1 btn btn-dark col-lg-12" type="submit">Login</button>
                                </div>
                                <div class="card-BODY text-center py-2 mb-2">
                                    <a class="p-2 bd-highlight" href="<?= base_url('auth/registrasi')?>">Create
                                        account</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?= base_url()?>assets/template/js/scripts.js"></script>
</body>

</html>