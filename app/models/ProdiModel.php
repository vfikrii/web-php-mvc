<?php
require_once 'config/database.php';

class ProdiModel {
  private $db;

  public function __construct() {
    $database = new Database();
    $this->db = $database->getConnection();
  }

  public function getAll() {
    $sql = "SELECT * FROM prodi";
    $stmt = $this->db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function getById($id) {
    $stmt = $this->db->prepare("SELECT * FROM prodi WHERE id_prodi=?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function create($nama, $jenjang) {
    $stmt = $this->db->prepare("INSERT INTO prodi (nama_prodi, jenjang) VALUES (?, ?)");
    return $stmt->execute([$nama, $jenjang]);
  }

  public function update($id, $nama, $jenjang) {
    $stmt = $this->db->prepare("UPDATE prodi SET nama_prodi=?, jenjang=? WHERE id_prodi=?");
    return $stmt->execute([$nama, $jenjang, $id]);
  }

  public function delete($id) {
    $stmt = $this->db->prepare("DELETE FROM prodi WHERE id_prodi=?");
    return $stmt->execute([$id]);
  }
}
?>
