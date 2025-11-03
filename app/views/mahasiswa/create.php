<h3>Tambah Mahasiswa</h3>
<form method="POST" action="">
  <div class="row">
    <div class="col-md-6 mb-3">
      <label>NIM</label>
      <input type="text" name="nim" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Nama Mahasiswa</label>
      <input type="text" name="nama_mahasiswa" class="form-control" required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label>Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-select" required>
        <option value="">Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control">
    </div>
  </div>

  <div class="mb-3">
    <label>Program Studi</label>
    <select name="id_prodi" class="form-select" required>
      <option value="">-- Pilih Prodi --</option>
      <?php foreach($prodiList as $p): ?>
        <option value="<?= $p['id_prodi']; ?>"><?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)</option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="index.php?page=mahasiswa" class="btn btn-secondary">Kembali</a>
</form>
