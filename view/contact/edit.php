<form action="<?= urlpath("edit"); ?>" method="POST" enctype="multipart/form-data">
    <div class="container-fluid content">
    <h4>Ubah Data Kontak</h4>
        <div class = "form-group">
            <label>No Hp</label>
            <input type="text" class="form-control" name="nohp" value="<?= $contact[0]['no_hp'] ?>">
        </div>
        <div class = "form-group">
            <label>Nama Pemilik</label>
            <input type="text" class="form-control" name="nama" value="<?= $contact[0]['nama_pemilik']?>">
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jk">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Perempuan" <?= ($contact[0]['jk'] == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
                <option value="Laki-Laki" <?= ($contact[0]['jk'] == 'Laki-Laki') ? 'selected' : '' ?>>Laki-Laki</option>
            </select> 
        </div>
        <button class="btn btn-primary">Simpan</button>
    </div>
</form>

