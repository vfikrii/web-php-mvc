<?php
require_once 'config/database.php';

class MahasiswaModel {
  private $db;

  public function __construct() {
    $database = new Database();        // buat objek Database
    $this->db = $database->getConnection(); // ambil koneksi PDO
  }

  public function getAll() {
    $sql = "SELECT m.*, p.nama_prodi, p.jenjang 
            FROM mahasiswa m 
            JOIN prodi p ON m.id_prodi = p.id_prodi";
    $stmt = $this->db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getById($id) {
    $stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE id_mahasiswa=?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function create($nim, $nama, $jk, $alamat, $id_prodi) {
    $stmt = $this->db->prepare("INSERT INTO mahasiswa (nim, nama_mahasiswa, jenis_kelamin, alamat, id_prodi)
                                VALUES (?, ?, ?, ?, ?)");
    return $stmt->execute([$nim, $nama, $jk, $alamat, $id_prodi]);
  }

  public function update($id, $nim, $nama, $jk, $alamat, $id_prodi) {
    $stmt = $this->db->prepare("UPDATE mahasiswa 
                                SET nim=?, nama_mahasiswa=?, jenis_kelamin=?, alamat=?, id_prodi=? 
                                WHERE id_mahasiswa=?");
    return $stmt->execute([$nim, $nama, $jk, $alamat, $id_prodi, $id]);
  }

  public function delete($id) {
    $stmt = $this->db->prepare("DELETE FROM mahasiswa WHERE id_mahasiswa=?");
    return $stmt->execute([$id]);
  }
}
?>
