<div class="col-md-9 content">
    <h2>Data Kontak</h2>
    <a href="add_page.php" class="btn btn-primary">Tambah</a>
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
                  if ($c['id_akun'] == $user['id']) {
      ?>

          <tr>
              <td><?= $i ?></td>
              <td><?= $arr['no_hp'][$i] ?></td>
              <td><?= $arr['nama_pemilik'][$i] ?></td>
              <td><?= $arr['jenis_kelamin'][$i] ?></td>
              <td>
                <a href="<?= urlpath("edit?id=".$c['id']); ?>" class="btn btn-primary">Edit</button>
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

