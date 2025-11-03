<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "db_akademik";
    private static $username = "root";
    private static $password = "";

    public static function connect() {
        $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$username, self::$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }
}
?>
