<?php
namespace app\config;
class Database {
    private static $conn = null; 
    public static function connect() {
        if (self::$conn === null) {
            try {

                $dsn = "pgsql:host=" . "localhost" . ";port=" . "5432" . ";dbname=" . "school";
                self::$conn = new \PDO($dsn, "postgres", "root");
                self::$conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            } catch (\PDOException $e) {
                error_log("Connection failed: " . $e->getMessage());
                die("Error: " . $e->getMessage());
            }
        }

        return self::$conn;
    }
    public static function disconnect() {
        self::$conn = null;
    }
} 
$conn = Database::connect();


?>