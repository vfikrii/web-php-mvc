<?php
$page = $_GET['page'] ?? 'home'; // 🔹 default: home

switch($page) {
    case 'home':
        require 'app/controllers/HomeController.php';
        (new HomeController())->index();
        break;

    case 'mahasiswa':
        require 'app/controllers/MahasiswaController.php';
        (new MahasiswaController())->index();
        break;

    case 'tambah_mahasiswa':
        require 'app/controllers/MahasiswaController.php';
        (new MahasiswaController())->tambah();
        break;

    case 'prodi':
        require 'app/controllers/ProdiController.php';
        (new ProdiController())->index();
        break;

    case 'tambah_prodi':
        require 'app/controllers/ProdiController.php';
        (new ProdiController())->tambah();
        break;

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
}
?>
