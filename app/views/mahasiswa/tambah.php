<h2>Tambah Mahasiswa</h2>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label>NIM</label>
    <input type="text" name="nim" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Jenis Kelamin</label>
    <select name="jk" class="form-select">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
  </div>
  <div class="mb-3">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Prodi</label>
    <select name="id_prodi" class="form-select">
      <?php foreach($listProdi as $p): ?>
        <option value="<?= $p['id_prodi']; ?>"><?= $p['nama_prodi']; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
</form>
