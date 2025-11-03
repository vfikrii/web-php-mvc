<?php
require_once 'config/database.php';

class MahasiswaModel {
    private $db;
    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $sql = "SELECT m.*, p.nama_prodi 
                FROM mahasiswa m 
                JOIN prodi p ON m.id_prodi = p.id_prodi";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nim, $nama, $jk, $alamat, $id_prodi) {
        $stmt = $this->db->prepare("INSERT INTO mahasiswa (nim, nama_mahasiswa, jenis_kelamin, alamat, id_prodi) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nim, $nama, $jk, $alamat, $id_prodi]);
    }
}
?>
