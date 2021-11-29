<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mb-2">
    <div class="col md-6">
        <h4>Daftar Simpanan Anggota Koperasi Himakom</h4>
    </div>
</div>
<hr>
<div class="row mb-3">  
    <?php if(session()->getFlashData('pesan')):?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashData('pesan');?>
    </div>
    <?php endif ;?>
    <?php if(in_groups('Admin')):?>
    <div class="col-md-6">
        <a href="/simpanpinjam/tambahsimpanan" type="button" class="btn btn-primary">Tambah Simpanan</a>
    </div>
    <?php endif;?>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <form action="" method="post">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Anggota" name="keyword" autocomplete="off" autofocus>
            <div class="input-group-append">
                <input class="btn btn-success" type="submit" name="submit">
            </div>
        </form>
    </div>
</div>
<div class="row mb-3">
    <div class="col-md-6">
        <strong>Total Anggota</strong> : 
    </div>
</div>
<div class="row mt-1">
    <div class="col-md">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Simpanan</th>
                    <?php if(in_groups('Admin')):?>
                    <th scope="col">Action</th>
                    <?php endif;?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($simpanan as $s => $simpanan) : ?>
                    <tr>
                        <th scope="row"><?= $s +1 ;?></th>
                        <td><?=$simpanan['nama'];?></td>
                        <td>Rp. <?=$simpanan['jumlah_simpanan']?></td>
                        <?php if(in_groups('Admin')):?>
                        <td>
                            <a href="/simpanpinjam/editsimpanan/<?= $simpanan['id_simpanan'];?>" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-"></i>
                                Edit
                            </a>
                            <a href="/simpanpinjam/deletesimpanan/<?= $simpanan['id_simpanan'];?>" class="btn btn-sm btn-danger me-1" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                        <?php endif;?>
                    </tr>
                    <?php endforeach ;?>
                </tbody>
        </table>
    </div>
</div>
<?= $this->endSection();?>