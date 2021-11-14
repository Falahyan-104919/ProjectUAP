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
                </tbody>
        </table>
    </div>
</div>