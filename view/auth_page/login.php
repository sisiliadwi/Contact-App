<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="container d-flex justify-content-center align-items-center">
    <form action="<?= urlpath('login'); ?>" method="POST" enctype="multipart/form-data">
        <form class="form-group">
            <div class="mb-3 bg p-5 rounded">
                <h2 class="text-center">Login</h2>
                <label for="forminput" class="form-label mt-4 fw-semibold">Email</label>
                    <input type="email" class="form-control custom-input" id="forminput" />
                <label for="forminput" class="form-label mt-4 fw-semibold ">Password</label>
                    <input type="password" class="form-control custom-input" id="forminput" />
                <div class="col-auto d-flex justify-content-center">
                    <button type="submit" class="btn mb-3">Login</button>
                </div> 
            </div>
        </form>
    </form>    
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>