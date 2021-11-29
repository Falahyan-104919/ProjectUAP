
<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="container mt-5">
    <br><br>
    <?php if(in_groups('Admin')) :?>
    <div class="h-100 p-5 border rounded-3" style="background-color: #AABA9E ;">
        <h4>Halo, Admin!</h4>
        <p><strong>Selamat Datang di Sistem Informasi Koperasi Himakom</strong></p>
        <hr>
        <div class="d-flex justify-content-end">
            <a href="/anggota" class="btn btn-dark">Lihat Data Anggota</a>
        </div>
    </div>
    <?php endif;?>
    <?php if(in_groups('Regular User')) : ?>
        <h1>Your Profile</h1>
    <?php endif ;?>
</div>
<?= $this->endSection();?>