<div class="row mb-2">
    <div class="col md-6">
        <h4>Daftar Simpanan Anggota Koperasi Himakom</h4>
    </div>
</div>
<hr>
<div class="row mb-3">  
    <div class="col-md-6">
        <a href="/simpanpinjam/tambahsimpanan" type="button" class="btn btn-primary">Tambah Simpanan</a>
    </div>
</div>
<div class="row mb-2">
    <div class="col-md-6">
        <form action="" method="post">
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
                    <th scope="col">Simpanan</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nama 1</td>
                        <td>Simpanan 1</td>
                        <td>
                            <a href="#" class="badge bg-warning">Edit</a>
                            <a href="#" class="badge bg-primary">Detail</a>
                            <a href="#" class="badge bg-danger" onclick="return confirm('Apakah anda yakin?')">Delete</a>
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
</div>