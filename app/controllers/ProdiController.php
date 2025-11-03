<?php
require_once 'app/models/ProdiModel.php';

class ProdiController {
  public function __construct() {
    if (!isset($_SESSION['user'])) {
      header('Location: index.php?page=login');
      exit;
    }
  }

  public function index() {
    $model = new ProdiModel();
    $data = $model->getAll();

    include 'app/views/layout/header.php';
    include 'app/views/prodi/index.php';
    include 'app/views/layout/footer.php';
  }

  public function create() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $model = new ProdiModel();
      $model->create($_POST['nama_prodi'], $_POST['jenjang']);
      header('Location: index.php?page=prodi');
      exit;
    }

    include 'app/views/layout/header.php';
    include 'app/views/prodi/create.php';
    include 'app/views/layout/footer.php';
  }

  public function edit() {
    $model = new ProdiModel();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $model->update($_POST['id_prodi'], $_POST['nama_prodi'], $_POST['jenjang']);
      header('Location: index.php?page=prodi');
      exit;
    }

    $data = $model->getById($_GET['id']);
    include 'app/views/layout/header.php';
    include 'app/views/prodi/edit.php';
    include 'app/views/layout/footer.php';
  }

  public function delete() {
    $model = new ProdiModel();
    $model->delete($_GET['id']);
    header('Location: index.php?page=prodi');
    exit;
  }
}
?>
