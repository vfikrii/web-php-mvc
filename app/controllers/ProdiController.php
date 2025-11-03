<?php
require_once 'app/models/ProdiModel.php';

class ProdiController {
    public function index() {
        $model = new ProdiModel();
        $data = $model->getAll();
        include 'app/views/layout/header.php';
        include 'app/views/prodi/index.php';
        include 'app/views/layout/footer.php';
    }

    public function tambah() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?page=login');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new ProdiModel();
            $model->add($_POST['nama_prodi'], $_POST['jenjang']);
            header('Location: index.php?page=prodi');
        } else {
            include 'app/views/layout/header.php';
            include 'app/views/prodi/tambah.php';
            include 'app/views/layout/footer.php';
        }
    }
}
?>
