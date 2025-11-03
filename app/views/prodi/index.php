<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Data Program Studi</h2>
  <?php if(isset($_SESSION['user'])): ?>
    <a href="index.php?page=tambah_prodi" class="btn btn-primary">Tambah Prodi</a>
  <?php else: ?>
    <a href="index.php?page=login" class="btn btn-outline-primary">Login untuk tambah</a>
  <?php endif; ?>
</div>

<table class="table table-bordered table-hover">
  <thead class="table-primary">
    <tr><th>ID</th><th>Nama Prodi</th><th>Jenjang</th></tr>
  </thead>
  <tbody>
  <?php foreach ($data as $p): ?>
    <tr>
      <td><?= $p['id_prodi']; ?></td>
      <td><?= $p['nama_prodi']; ?></td>
      <td><?= $p['jenjang']; ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
