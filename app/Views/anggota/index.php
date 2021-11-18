<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mb-2">
    <div class="col md-6">
        <h4>Daftar Anggota Koperasi Himakom</h4>
    </div>
</div>
<hr>
<div class="row mb-3">  
    <div class="col-md-6">
        <a href="anggota/tambah" type="button" class="btn btn-primary">Tambah Anggota</a>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <form action="<?=base_url('falahyan');?>" method="post">
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
                    <th scope="col">No. Hp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($anggota as $a => $anggota) : ?>
                        <tr>
                            <th scope="row"><?= $a + 1;?></th>
                            <td><?= $anggota['nama'];?></td>
                            <td><?= $anggota['no_hp'];?></td>
                            <td>
                                <a href="anggota/detail" class="btn btn-sm btn-primary me-1">Detail</a>
                                <a href="anggota/edit" class="btn btn-sm btn-warning me-1">Edit</a>
                                <a href="anggota/delete" class="btn btn-sm btn-danger me-1" >Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ;?>
                </tbody>
        </table>
    </div>
</div>
<?= $this->endSection();?>