<div class="d-flex justify-content-between align-items-center mb-3">
  <h2>Data Mahasiswa</h2>
  <?php if(isset($_SESSION['user'])): ?>
    <a href="index.php?page=tambah_mahasiswa" class="btn btn-primary">Tambah Data</a>
  <?php else: ?>
    <a href="index.php?page=login" class="btn btn-outline-primary">Login untuk tambah</a>
  <?php endif; ?>
</div>

<table class="table table-bordered table-striped">
  <thead class="table-primary">
    <tr><th>NIM</th><th>Nama</th><th>JK</th><th>Alamat</th><th>Prodi</th></tr>
  </thead>
  <tbody>
  <?php foreach ($data as $row): ?>
    <tr>
      <td><?= $row['nim']; ?></td>
      <td><?= $row['nama_mahasiswa']; ?></td>
      <td><?= $row['jenis_kelamin']; ?></td>
      <td><?= $row['alamat']; ?></td>
      <td><?= $row['nama_prodi']; ?></td>
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
