<h3>Edit Program Studi</h3>
<form method="POST" action="">
  <input type="hidden" name="id_prodi" value="<?= $data['id_prodi']; ?>">
  <div class="mb-3">
    <label>Nama Prodi</label>
    <input type="text" name="nama_prodi" value="<?= $data['nama_prodi']; ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Jenjang</label>
    <select name="jenjang" class="form-select" required>
      <option value="D3" <?= $data['jenjang']=='D3'?'selected':''; ?>>D3</option>
      <option value="D4" <?= $data['jenjang']=='D3'?'selected':''; ?>>D4</option>
      <option value="S1" <?= $data['jenjang']=='S1'?'selected':''; ?>>S1</option>
      <option value="S2" <?= $data['jenjang']=='S2'?'selected':''; ?>>S2</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
  <a href="index.php?page=prodi" class="btn btn-secondary">Kembali</a>
</form>
