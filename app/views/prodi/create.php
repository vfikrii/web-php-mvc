<h3>Tambah Program Studi</h3>
<form method="POST" action="">
  <div class="mb-3">
    <label>Nama Prodi</label>
    <input type="text" name="nama_prodi" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Jenjang</label>
    <select name="jenjang" class="form-select" required>
      <option value="">-- Pilih Jenjang --</option>
      <option value="D3">D3</option>
      <option value="D4">D4</option>
      <option value="S1">S1</option>
      <option value="S2">S2</option>
    </select>
  </div>
  <button type="submit" class="btn btn-success">Simpan</button>
  <a href="index.php?page=prodi" class="btn btn-secondary">Kembali</a>
</form>
