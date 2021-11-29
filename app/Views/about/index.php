<?= $this->extend('template/baselayout');?>
<?= $this->section('content');?>
<div class="row mt-5">
    <div class="col">
        <div class="card border-primary">
            <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="true" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about/anggota">Anggota Kelompok</a>
                </li>
            </ul>
            </div>
            <div class="card-body">
                <div class="container">
                    Ini merupakan <strong>Tugas Project</strong> untuk <strong>Ujian Praktikum Akhir Semester</strong> <br><hr>
                    Dosen Pengampu : Rizky Prabowo, S.Kom., M.Kom. <br>
                    Asisten Dosen : <br>
                    Mata Kuliah : Web Lanjut <br>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection();?>