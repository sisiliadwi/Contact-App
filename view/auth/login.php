<div class="container d-flex justify-content-center align-items-center">
    <form class=custom-form action="<?= urlpath('login'); ?>" method="POST" enctype="multipart/form-data">
        <h3 style="text-align: center;">LOGIN</h3>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <p style="text-align: center;">Belum punya akun? Silahkan register terlebih dahulu</p>
        <a href="<?=urlpath('register');?>">Register</a>
    </form>
</div>

