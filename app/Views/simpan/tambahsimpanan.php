<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mt-5">
    <div class="col-md">
    <div class="d-flex justify-content-center">
        <div class="card border-warning mb-3" style="width: 50rem;">
            <div class="card-header text-center"><strong>Form Tambah Simpanan Koperasi Himakom</strong></div>
            <div class="card-body">
                <form action="/simpanpinjam/storesimpanan" method="POST">
                <div class="form-group mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ;?>" id="nama" name="nama"placeholder="Nama Lengkap" autocomplete="off">
                    <?php if ($validation -> hasError('nama')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('nama'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-group mb-2">                    
                    <label for="jumlah_simpanan">Jumlah jumlah_simpanan</label>
                    <input type="number" class="form-control <?= ($validation->hasError('jumlah_simpanan')) ? 'is-invalid' : '' ;?>" id="jumlah_simpanan" name="jumlah_simpanan" placeholder="Rp." autocomplete="off">
                    <?php if ($validation -> hasError('jumlah_simpanan')) : ?>
                    <div class="invalid-feedback">
                        <?= $validation->getError('jumlah_simpanan'); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <label for="metode">Metode Deposit</label>
                <select name="metode" id="metode" name="metode" class="form-control mb-2">
                    <option value="ATM Transfer">ATM Transfer</option>
                    <option value="Online Banking">Online Banking</option>
                    <option value="E-Wallet">E-Wallet</option>
                </select>
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