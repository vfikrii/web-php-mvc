<div class="text-center py-5">
  <h1 class="display-5 fw-bold text-primary mb-3">Selamat Datang di Sistem Akademik</h1>
  <p class="lead text-secondary">Website ini dibangun menggunakan PHP Native dengan arsitektur MVC dan Bootstrap 5.</p>

  <?php if(isset($_SESSION['user'])): ?>
    <p class="mt-4">
      Halo, <strong><?= htmlspecialchars($_SESSION['user']['username']); ?></strong> 👋<br>
      Anda telah login.
    </p>

    <a href="index.php?page=mahasiswa" class="btn btn-primary mt-3">Lihat Data Mahasiswa</a>
    <a href="index.php?page=prodi" class="btn btn-primary mt-3">Lihat Data Prodi</a>
  <?php else: ?>
    <p class="mt-4">Silakan login atau daftar terlebih dahulu untuk mengelola data akademik.</p>
    <a href="index.php?page=login" class="btn btn-success me-2">Login</a>
    <a href="index.php?page=register" class="btn btn-outline-primary">Register</a>
  <?php endif; ?>
</div>
