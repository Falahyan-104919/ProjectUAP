<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mt-5">
    <div class="col-md">
    <div class="d-flex justify-content-center">
        <div class="card border-warning mb-3" style="width: 50rem;">
            <div class="card-header text-center"><strong>Form Edit Pinjaman Koperasi Himakom</strong></div>
            <div class="card-body">
                <form action="/simpanpinjam/updatepinjaman/<?=$pinjaman['id_pinjaman'];?>" method="POST">
                <input type="hidden" name="id_pinjaman" value="<?= $pinjaman['id_pinjaman'];?>">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ;?>" id="nama" name="nama" placeholder="Nama Lengkap" autocomplete="off" value="<?=$pinjaman['nama'];?>">
                    <?php if ($validation -> hasError('nama')) : ?>
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="jumlah_pinjaman">Jumlah Pinjaman</label>
                    <input type="number" class="form-control <?= ($validation->hasError('jumlah_pinjaman')) ? 'is-invalid' : '' ;?>" id="jumlah_pinjaman" name="jumlah_pinjaman" placeholder="Rp." autocomplete="off" value="<?=$pinjaman['jumlah_pinjaman'];?>">
                    <?php if ($validation -> hasError('jumlah_pinjaman')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('jumlah_pinjaman'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group">
                    <label for="alasan_pinjam">Alasan Peminjaman</label>
                    <input type="text" class="form-control <?= ($validation->hasError('alasan_pinjam')) ? 'is-invalid' : '' ;?>" id="alasan_pinjam" name="alasan_pinjam" placeholder="Saya Butuh Uang" autocomplete="off" value="<?=$pinjaman['alasan_pinjam'];?>">
                    <?php if ($validation -> hasError('alasan_pinjam')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('alasan_pinjam'); ?>
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