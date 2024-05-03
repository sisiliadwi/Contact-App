<?php
require_once 'models.php';
$arr = Contact::select(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


  <!-- Main content -->
  <div class="col-md-9 content">
    <h3>Data Kontak</h3>
    <a href="<?=BASEURL?>add" class="btn btn-primary">Tambah</a>
    <table class="table">
      <thead class="thead">
        <tr>
          <th scope="col">No</th>
          <th scope="col">ID</th>
          <th scope="col">No HP</th>
          <th scope="col">Nama Pemilik</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
        if (isset($contacts)) {
            $i = 1;
            foreach ($contacts as $c) {
                if ($c['deleted_at'] == NULL && $c['user_fk'] == $user['id']) {
      ?> 
          <tr>
              <td><?= $i ?></td>
              <td><?= $arr['id'][$i] ?></td>
              <td><?= $arr['no_hp'][$i] ?></td>
              <td><?= $arr['nama_pemilik'][$i] ?></td>
              <td><?= $arr['jenis_kelamin'][$i] ?></td>
              <td>
              <a href="<?= urlpath("edit?id=".$c['id']); ?>" class="btn btn-primary">Edit</a>
                <a href="<?= urlpath("remove?id=".$c['id']); ?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
      <?php
                    $i++;
                }
            }
        }
      ?>
      </tbody>
    </table>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
