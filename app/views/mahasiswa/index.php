<div class="d-flex justify-content-between align-items-center mb-3">
  <h3>Data Mahasiswa</h3>
  <a href="index.php?page=mahasiswa_create" class="btn btn-primary">+ Tambah Mahasiswa</a>
</div>

<table class="table table-striped table-bordered">
  <thead class="table-primary">
    <tr>
      <th>No</th>
      <th>NIM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Alamat</th>
      <th>Program Studi</th>
      <th>Jenjang</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($data as $m): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= htmlspecialchars($m['nim']); ?></td>
      <td><?= htmlspecialchars($m['nama_mahasiswa']); ?></td>
      <td><?= $m['jenis_kelamin'] == 'L' ? 'Laki-laki' : 'Perempuan'; ?></td>
      <td><?= htmlspecialchars($m['alamat']); ?></td>
      <td><?= htmlspecialchars($m['nama_prodi']); ?></td>
      <td><?= htmlspecialchars($m['jenjang']); ?></td>
      <td>
        <a href="index.php?page=mahasiswa_edit&id=<?= $m['id_mahasiswa']; ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="index.php?page=mahasiswa_delete&id=<?= $m['id_mahasiswa']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
