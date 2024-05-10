<form action="<?= urlpath("add"); ?>" method="POST" enctype="multipart/form-data">
    <div class="container-fluid content">
    <h4>Tambah Data Kontak</h4>
        <div class = "form-group">
            <label>No Hp</label>
            <input type="text" class="form-control" name="nohp">
        </div>
        <div class = "form-group">
            <label>Nama Pemilik</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class = "form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-Laki">Laki-Laki</option>
            </select> 
        </div>
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>


