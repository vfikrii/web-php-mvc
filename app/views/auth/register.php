<div class="row justify-content-center mt-5">
  <div class="col-md-5">
    <div class="card shadow p-4">
      <h4 class="text-center mb-4">Form Registrasi</h4>

      <?php if(isset($error)): ?>
        <div class="alert alert-danger text-center"><?= $error; ?></div>
      <?php endif; ?>

      <form method="POST" action="">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success w-100">Daftar</button>
      </form>

      <div class="text-center mt-3">
        <p>Sudah punya akun? <a href="index.php?page=login">Login disini</a></p>
      </div>
    </div>
  </div>
</div>
