<?php 
    $title = 'Dashboard';
    $user = $_SESSION['user'];
?>

<?php
    ob_start();
    include 'style.css';
    $style = ob_get_clean();
?>

<?php ob_start(); ?>
<!-- navbar -->
<nav class="navbar navbar-expand-lg ">
  <a class="navbar-brand" href="#">Contact App Manager</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Sidebar -->
<div class="row">
  <div class="col-md-2 sidebar">
    <ul>
      <li><a href="<?= urlpath('dashboard'); ?>">Dashboard</a></li>
      <li><a href="<?= urlpath('dashboard/contacts'); ?>">Data Kontak</a></li>
      <li>Profile</li>
    </ul>
  </div>

<?php $body = ob_get_clean(); ?>
