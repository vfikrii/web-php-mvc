<h3>Edit Mahasiswa</h3>
<form method="POST" action="">
  <input type="hidden" name="id_mahasiswa" value="<?= $data['id_mahasiswa']; ?>">

  <div class="row">
    <div class="col-md-6 mb-3">
      <label>NIM</label>
      <input type="text" name="nim" value="<?= $data['nim']; ?>" class="form-control" required>
    </div>
    <div class="col-md-6 mb-3">
      <label>Nama Mahasiswa</label>
      <input type="text" name="nama_mahasiswa" value="<?= $data['nama_mahasiswa']; ?>" class="form-control" required>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6 mb-3">
      <label>Jenis Kelamin</label>
      <select name="jenis_kelamin" class="form-select" required>
        <option value="L" <?= $data['jenis_kelamin']=='L'?'selected':''; ?>>Laki-laki</option>
        <option value="P" <?= $data['jenis_kelamin']=='P'?'selected':''; ?>>Perempuan</option>
      </select>
    </div>
    <div class="col-md-6 mb-3">
      <label>Alamat</label>
      <input type="text" name="alamat" value="<?= $data['alamat']; ?>" class="form-control">
    </div>
  </div>

  <div class="mb-3">
    <label>Program Studi</label>
    <select name="id_prodi" class="form-select" required>
      <?php foreach($prodiList as $p): ?>
        <option value="<?= $p['id_prodi']; ?>" <?= $p['id_prodi']==$data['id_prodi']?'selected':''; ?>>
          <?= $p['nama_prodi']; ?> (<?= $p['jenjang']; ?>)
        </option>
      <?php endforeach; ?>
    </select>
  </div>

  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  <a href="index.php?page=mahasiswa" class="btn btn-secondary">Kembali</a>
</form>
