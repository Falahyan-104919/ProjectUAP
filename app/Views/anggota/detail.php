<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mt-5">
    <div class="col-md">
        <div class="d-flex justify-content-center">
            <div class="card border-dark" style="">
                <div class="card-header text-center">
                    Detail Anggota Koperasi Himakom
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="https://source.unsplash.com/750x600/?Selfie" class="img-thumbnail" style="margin-left: 10px; margin-top: 10px; margin-bottom: 10px;" alt="Profile Pincture">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <div class="container">
                            <h3>Informasi</h3>
                        </div>
                        <table class="table mt-3">
                            <tr>
                                <td>Nama</td>
                                <td><?=$anggota['nama'];?></td>
                            </tr>
                            <tr>
                                <td>No. Handphone</td>
                                <td><?=$anggota['no_hp'];?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><?=$anggota['alamat'];?></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td><?=$anggota['gender'];?></td>
                            </tr>
                        </table>
                        <div class="d-flex justify-content-end">
                            <a href="/anggota" class="btn btn-primary">
                                <i class="fas fa-caret-left"></i>
                                 Kembali
                            </a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();?>