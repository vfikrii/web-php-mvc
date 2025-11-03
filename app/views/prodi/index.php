<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Data Program Studi</h3>
  <a href="index.php?page=prodi_create" class="btn btn-primary">+ Tambah Prodi</a>
</div>

<table class="table table-striped table-bordered">
  <thead class="table-primary">
    <tr>
      <th>No</th>
      <th>Nama Prodi</th>
      <th>Jenjang</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($data as $p): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= htmlspecialchars($p['nama_prodi']); ?></td>
      <td><?= htmlspecialchars($p['jenjang']); ?></td>
      <td>
        <a href="index.php?page=prodi_edit&id=<?= $p['id_prodi']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="index.php?page=prodi_delete&id=<?= $p['id_prodi']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus prodi ini?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
