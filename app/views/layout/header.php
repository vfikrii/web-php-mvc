<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- penting agar responsive -->
  <title>Sistem Akademik MVC</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.php">SIPOLMED</a>

    <!-- 🔹 Tombol hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- 🔹 Menu utama yang bisa di-collapse -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item"><a href="index.php?page=home" class="nav-link">Beranda</a></li>
        <li class="nav-item"><a href="index.php?page=mahasiswa" class="nav-link">Mahasiswa</a></li>
        <li class="nav-item"><a href="index.php?page=prodi" class="nav-link">Prodi</a></li>
      </ul>
      <ul class="navbar-nav">
        <?php if(isset($_SESSION['user'])): ?>
          <li class="nav-item">
            <span class="nav-link">👋 <?= htmlspecialchars($_SESSION['user']['username']); ?></span>
          </li>
          <li class="nav-item"><a href="index.php?page=logout" class="nav-link">Logout</a></li>
        <?php else: ?>
          <li class="nav-item"><a href="index.php?page=login" class="nav-link">Login</a></li>
          <li class="nav-item"><a href="index.php?page=register" class="nav-link">Register</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
