<?php
require_once 'app/models/MahasiswaModel.php';
require_once 'app/models/ProdiModel.php';

class MahasiswaController {
    public function index() {
        $model = new MahasiswaModel();
        $data = $model->getAll();
        include 'app/views/layout/header.php';
        include 'app/views/mahasiswa/index.php';
        include 'app/views/layout/footer.php';
    }

    public function tambah() {
        session_start();
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?page=login');
            exit;
        }

        $prodiModel = new ProdiModel();
        $listProdi = $prodiModel->getAll();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $model = new MahasiswaModel();
            $model->add($_POST['nim'], $_POST['nama'], $_POST['jk'], $_POST['alamat'], $_POST['id_prodi']);
            header('Location: index.php?page=mahasiswa');
        } else {
            include 'app/views/layout/header.php';
            include 'app/views/mahasiswa/tambah.php';
            include 'app/views/layout/footer.php';
        }
    }
}
?>
