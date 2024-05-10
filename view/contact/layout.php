<?php 
include __DIR__ . '/../view/master.php'; 
?>

<?php 
    $title = 'Contact';
    $user = $_SESSION['user'];
?>

<?php
    ob_start();
    include 'style.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>
<header class="navbar navbar-expand-lg">
  <div class="container">
    <h4 style="color: white;"> Contact App Manager </h4>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="<?= urlpath('logout'); ?>">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</header>

<!-- Sidebar -->
<div class="row">
  <div class="col-md-2 sidebar">
    <ul>
      <li>Dashboard</li>
      <li>
        <a href="<?= urlpath('data_contact'); ?>">Data Kontak</a>
      </li>
      <li>Profile</li>
    </ul>
</div>

<?php
    if (isset($url)) {
        include $url.'.php';
    }
?>
<?php $body = ob_get_clean(); ?>

