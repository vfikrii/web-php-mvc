<?php
require_once 'app/models/MahasiswaModel.php';
require_once 'app/models/ProdiModel.php';

class MahasiswaController {
  public function __construct() {
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
  }

  public function index() {
    $model = new MahasiswaModel();
    $data = $model->getAll();

    include 'app/views/layout/header.php';
    include 'app/views/mahasiswa/index.php';
    include 'app/views/layout/footer.php';
  }

  public function create() {
    $prodiModel = new ProdiModel();
    $prodiList = $prodiModel->getAll();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $model = new MahasiswaModel();
      $model->create($_POST['nim'], $_POST['nama_mahasiswa'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['id_prodi']);
      header('Location: index.php?page=mahasiswa');
      exit;
    }

    include 'app/views/layout/header.php';
    include 'app/views/mahasiswa/create.php';
    include 'app/views/layout/footer.php';
  }

  public function edit() {
    $prodiModel = new ProdiModel();
    $prodiList = $prodiModel->getAll();
    $model = new MahasiswaModel();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $model->update($_POST['id_mahasiswa'], $_POST['nim'], $_POST['nama_mahasiswa'], $_POST['jenis_kelamin'], $_POST['alamat'], $_POST['id_prodi']);
      header('Location: index.php?page=mahasiswa');
      exit;
    }

    $data = $model->getById($_GET['id']);
    include 'app/views/layout/header.php';
    include 'app/views/mahasiswa/edit.php';
    include 'app/views/layout/footer.php';
  }

  public function delete() {
    $model = new MahasiswaModel();
    $model->delete($_GET['id']);
    header('Location: index.php?page=mahasiswa');
    exit;
  }
}
?>
