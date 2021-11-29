<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mb-2">
    <div class="col md-6">
        <h4>Daftar Anggota Koperasi Himakom</h4>
    </div>
</div>
<hr>
<div class="row mb-3">  
    <?php if(session()->getFlashData('pesan')):?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashData('pesan');?>
    </div>
    <?php endif ;?>
    <?php if(in_groups('Admin')): ?>
    <div class="col-md-6">
        <a href="anggota/tambah" type="button" class="btn btn-primary">
            <i class="fas fa-plus"></i>
                Tambah Anggota
        </a>
    </div>
    <?php endif;?>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <form action="" method="POST">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Anggota" name="keyword" autocomplete="off" autofocus>
            <div class="input-group-append">
                <button class="btn btn-success" type="submit" name="submit">
                    <i class=" fas fa-paper-plane"></i>
                    Submit
                </button>
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
                    <th scope="col">No. Hp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (15 * ($currentPage - 1)); ?>
                    <?php foreach($anggota as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i++;?></th>
                            <td><?= $a['nama'];?></td>
                            <td><?= $a['no_hp'];?></td>
                            <td>
                                <a href="anggota/detail/<?= $a['id_anggota'];?>" class="btn btn-sm btn-primary me-1">
                                    <i class="fas fa-info"></i>
                                    Detail
                                </a>
                                <?php if(in_groups('Admin')):?>
                                <a href="anggota/edit/<?= $a['id_anggota'];?>" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a href="anggota/delete/<?= $a['id_anggota'];?>" class="btn btn-sm btn-danger me-1" onclick="return confirm('Apakah anda Yakin?');">
                                    <i class="fas fa-user-minus"></i>
                                    Delete
                                </a>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
        </table>
        <?= $pager->links('anggota','anggota_pagination');?>
    </div>
</div>
<?= $this->endSection();?>