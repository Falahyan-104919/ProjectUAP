<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title><?=$judul;?></title>
  </head>
    <body>
      
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #C6B89E;">
            <div class="container">
                <a class="navbar-brand" href="<?=base_url();?>"><strong>Koperasi Himakom</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/home">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" href="/anggota" data-bs-toggle="dropdown">Anggota</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a class="nav-link" aria-current="page" href="/anggota">Lihat Anggota</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="dropdown-item"><a class="nav-link" aria-current="page" href="/anggota/tambah">Tambah Anggota</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" href="/anggota" data-bs-toggle="dropdown">Simpan Pinjam</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-item"><a class="nav-link" aria-current="page" href="/simpanpinjam/index">Lihat Daftar Simpanan</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li class="dropdown-item"><a class="nav-link" aria-current="page" href="/simpanpinjam/daftarpinjaman">Lihat Daftar Pinjaman</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/about">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>        
    <div class="container mt-5">


    <?= $this->renderSection('content'); ?>


    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </body>
</html>