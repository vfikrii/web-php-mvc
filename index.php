<?php
session_start();
$page = $_GET['page'] ?? 'home';

switch ($page) {
  case 'login':
    require 'app/controllers/AuthController.php';
    (new AuthController())->login();
    break;

  case 'register':
    require 'app/controllers/AuthController.php';
    (new AuthController())->register();
    break;

  case 'logout':
    require 'app/controllers/AuthController.php';
    (new AuthController())->logout();
    break;

  case 'mahasiswa':
    require 'app/controllers/MahasiswaController.php';
    (new MahasiswaController())->index();
    break;

  case 'mahasiswa_create':
    require 'app/controllers/MahasiswaController.php';
    (new MahasiswaController())->create();
    break;

  case 'mahasiswa_edit':
    require 'app/controllers/MahasiswaController.php';
    (new MahasiswaController())->edit();
    break;

  case 'mahasiswa_delete':
    require 'app/controllers/MahasiswaController.php';
    (new MahasiswaController())->delete();
    break;

  case 'prodi':
    require 'app/controllers/ProdiController.php';
    (new ProdiController())->index();
    break;

  case 'prodi_create':
    require 'app/controllers/ProdiController.php';
    (new ProdiController())->create();
    break;

  case 'prodi_edit':
    require 'app/controllers/ProdiController.php';
    (new ProdiController())->edit();
    break;

  case 'prodi_delete':
    require 'app/controllers/ProdiController.php';
    (new ProdiController())->delete();
    break;

  default:
    require 'app/controllers/HomeController.php';
    (new HomeController())->index();
    break;
}
?>
