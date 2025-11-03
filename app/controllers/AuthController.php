<?php
require_once 'app/models/UserModel.php';

class AuthController {
    public function login() {
        session_start();
        if (isset($_SESSION['user'])) {
            header('Location: index.php?page=mahasiswa');
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userModel = new UserModel();
            $user = $userModel->login($_POST['username'], $_POST['password']);
            if ($user) {
                $_SESSION['user'] = $user['username'];
                header('Location: index.php?page=mahasiswa');
            } else {
                $error = "Username atau password salah!";
            }
        }

        include 'app/views/layout/header.php';
        include 'app/views/auth/login.php';
        include 'app/views/layout/footer.php';
    }

    public function register() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userModel = new UserModel();

        $username = $_POST['username'];
        $email    = $_POST['email'];
        $password = $_POST['password'];

        // Jika register() mengembalikan false → email sudah terdaftar
        if (!$userModel->register($username, $email, $password)) {
            $error = "Email sudah digunakan. Silakan pakai email lain.";
        } else {
            header('Location: index.php?page=login');
            exit;
        }
    }
    

        include 'app/views/layout/header.php';
        include 'app/views/auth/register.php';
        include 'app/views/layout/footer.php';
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?page=login');
    }
}
?>
