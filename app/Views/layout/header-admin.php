<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $judul ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/css-public.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/galeri.css">
    <link rel="stylesheet" href="/css/manajament-profil.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary z-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PPKS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="beranda-admin">Beranda</a>
                    </li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-artikel') ?>">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-profil') ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-galeri') ?>">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-materi') ?>">Materi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/manajement-program') ?>">Program</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="manajement-akun" class="btn" type="submit">Account</a>
                </form>
                <form class="d-flex">
                    <a href="/logout" class="btn" type="submit">Logout</a>
                </form>
            </div>
        </div>
    </nav>
