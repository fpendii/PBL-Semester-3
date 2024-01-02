<!DOCTYPE html>
<html>

<head>
    <title>Halaman Login</title>
    <link rel="stylesheet" href="/css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
        <div class="card text-center" style="width: 25rem;">
            <div class="card-body">
                <h5 class="card-title">
                    <img width="100px" src="/img/user.png" alt="">
                </h5>
                <div>
                    <h6 class="card-subtitle mb-2" style="color: #0F1035;">Sebelum melanjutkan, harap lakukan proses login terlebih dahulu.</h6>
                </div>
                <form action="<?= base_url('/login/verifikasi-login') ?>" method="post" class="text-start">
                    <div class="mb-3">
                        <label for="Username" class="form-label">Username</label>
                        <input type="Username" class="form-control" id="email" value="<?php echo old('username') ?>" name="username" required>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" value="<?php echo old('password') ?>" name="password" required>
                    </div>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>