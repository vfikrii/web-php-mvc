<?php
class HomeController {
    public function index() {
        include 'app/views/layout/header.php';
        include 'app/views/home/index.php';
        include 'app/views/layout/footer.php';
    }
}
?>
