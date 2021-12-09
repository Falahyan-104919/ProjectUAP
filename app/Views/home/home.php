
<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="container mt-5">
    <br><br>
    <div class="h-100 p-5 border rounded-3" style="background-color: #AABA9E ;">
        <h4>Halo, <?=user()->username;?>!</h4>
        <p><strong>Selamat Datang di Koperasi Himakom</strong></p>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="/anggota" class="btn btn-dark">Lihat Data Anggota</a>
        </div>
    </div>
</div>
<?= $this->endSection();?>