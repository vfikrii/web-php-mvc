<?php
require_once 'config/database.php';

class ProdiModel {
    private $db;
    public function __construct() {
        $this->db = Database::connect();
    }

    public function getAll() {
        $stmt = $this->db->prepare("SELECT * FROM prodi");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function add($nama, $jenjang) {
        $stmt = $this->db->prepare("INSERT INTO prodi (nama_prodi, jenjang) VALUES (?, ?)");
        return $stmt->execute([$nama, $jenjang]);
    }
}
?>
