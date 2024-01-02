    <!-- Link Css -->
    <link rel="stylesheet" href="/css/ArtikelStyle.css">

    <div class="container-xll">
        <div class="container-xll">
            <div class="container-xxl">
                <div class="row">
                    <div>
                        <?php foreach ($artikel as $RowArtikel) : ?>
                            <div class="row mb-3 shadow">
                                <a href="artikel/detail/<?php echo $RowArtikel['id_artikel'] ?>">
                                    <div class="col">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Artikel</h5>
                                                <img src="/img/<?php echo $RowArtikel['gambar'] ?>" class="img-thumbnail" width="200px" alt="...">
                                                <h6 class="card-subtitle mb-2 text-muted mt-2"><?php echo $RowArtikel['tanggal_dibuat'] ?></h6>
                                                <p class="card-text"><?php echo $RowArtikel['judul'] ?></p>
                                                <a href="artikel/detail/<?php echo $RowArtikel['id_artikel'] ?>" class="card-link">Lihat selengkapnya</a>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <?= $pager->links('artikel', 'artikel_pagination') ?>
            </div>
        </div>
    </div>