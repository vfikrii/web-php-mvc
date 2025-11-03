<div class="row justify-content-center mt-5">
  <div class="col-md-5">
    <div class="card shadow p-4">
      <h4 class="text-center mb-4">Login Akun</h4>

      <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

      <form method="POST" action="">
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
      </form>

      <div class="text-center mt-3">
        <p>Belum punya akun? <a href="index.php?page=register">Daftar disini</a></p>
      </div>
    </div>
  </div>
</div>
