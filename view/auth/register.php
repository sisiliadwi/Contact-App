<div class="container d-flex justify-content-center align-items-center">
    <form class=custom-form action="<?= urlpath('register'); ?>" method="POST" enctype="multipart/form-data">
        <h3 style="text-align: center;">REGISTER</h3>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Masukkan Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
        <p style="text-align: center;">Sudah punya akun? Silahkan login</p>
        <a href="<?= urlpath('login'); ?>">Login</a>
    </form>
</div>
