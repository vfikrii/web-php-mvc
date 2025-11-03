<?php
require_once 'app/models/UserModel.php';

class AuthController {
  public function login() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $userModel = new UserModel();
      $user = $userModel->login($_POST['username'], $_POST['password']);

      if ($user) {
        $_SESSION['user'] = $user;
        header('Location: index.php');
        exit;
      } else {
        $error = "Username / Password salah!";
      }
    }

    include 'app/views/layout/header.php';
    include 'app/views/auth/login.php';
    include 'app/views/layout/footer.php';
  }

  public function register() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $userModel = new UserModel();
      $success = $userModel->register($_POST['username'], $_POST['email'], $_POST['password']);

      if ($success) {
        header('Location: index.php?page=login');
        exit;
      } else {
        $error = "Username atau Email sudah terdaftar!";
      }
    }


    include 'app/views/layout/header.php';
    include 'app/views/auth/register.php';
    include 'app/views/layout/footer.php';
  }

  public function logout() {
    session_start(); // pastikan session aktif

    // Hapus semua data session
    $_SESSION = [];

    // Hapus cookie session (opsional tapi disarankan)
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Hancurkan session
    session_destroy();

    // Arahkan ke halaman login
    header("Location: index.php?page=login");
    exit;
}
}
?>
