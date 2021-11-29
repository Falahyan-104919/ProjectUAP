<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mt-5">
    <div class="col-md">
    <div class="d-flex justify-content-center">
        <div class="card border-warning mb-3" style="width: 50rem;">
            <div class="card-header text-center"><strong>Form Edit Anggota Koperasi</strong></div>
            <div class="card-body">
                <form action="/anggota/update/<?= $anggota['id_anggota'];?>" method="POST">
                <input type="hidden" name="id_anggota" value="<?= $anggota['id_anggota'];?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ;?>" id="nama" name="nama" placeholder="Nama Lengkap" autocomplete="off" value="<?= $anggota['nama'];?>">
                    <?php if ($validation -> hasError('nama')) : ?>
                        <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="no_hp">No. Handpohone</label>
                    <input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : '' ;?>" id="no_hp" name="no_hp" placeholder="No. HP" autocomplete="off" value="<?= $anggota['no_hp'];?>">
                    <?php if ($validation -> hasError('no_hp')) : ?>
                        <div class="invalid-feedback">
                        <?= $validation->getError('no_hp'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ;?>" id="alamat" name="alamat"placeholder="Alamat Lengkap" autocomplete="off" value="<?= $anggota['alamat'];?>"></input>
                    <?php if ($validation -> hasError('alamat')) : ?>
                        <div class="invalid-feedback">
                        <?= $validation->getError('alamat'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" name="gender" class="form-control">
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                    <?php if ($validation -> hasError('gender')) : ?>
                        <div class="invalid-feedback">
                        <?= $validation->getError('gender'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-end">
                    <input type="submit" class="btn btn-primary">
                </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</div>
<?= $this->endSection();?>