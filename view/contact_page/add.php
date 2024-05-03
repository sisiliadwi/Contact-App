<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- Main content -->
  <div class="col-md-9 content">
    <h3>Tambah Data Kontak</h3>
    <form action="<?= urlpath("add"); ?>" method="POST" enctype="multipart/form-data">
        <form class="form-group">
            <div class="mb-3 bg p-5 rounded">
                <h2 class="text-center">Data Kontak</h2>
                <label for="nohp" class="form-label mt-4 fw-semibold">No. HP</label>
                    <input type="text" class="form-control custom-input" id="nohp" placeholder="Masukkan no. hp"/>
                <label for="nama" class="form-label mt-4 fw-semibold ">Nama</label>
                    <input type="text" class="form-control custom-input" id="nama" placeholder="Masukkan nama"/>
                <label for="jenis" class="form-label mt-4 fw-semibold ">Jenis Kelamin</label>
                    <input type="text" class="form-control custom-input" id="jenis" placeholder="Masukkan Jenis Kelamin"/>
                <div class="col-auto d-flex justify-content-center">
                    <button type="submit" class="btn1">Simpan</button>
                </div>
            </div>
        </form>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
