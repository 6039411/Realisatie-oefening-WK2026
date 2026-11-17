<?php
class Database {
    private static $conn = null;

    public static function connect() {
        if (self::$conn === null) {
            // Dezelfde gegevens als in je .env bestand
            $host = 'db'; 
            $naam = 'ALA-world-cup-connect';
            $user = 'ALA-world-cup-connect-user';
            $pass = '1234';

            try {
                self::$conn = new PDO(
                    "mysql:host=$host;dbname=$naam;charset=utf8mb4",
                    $user,
                    $pass,
                    [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    ]
                );
            } catch (PDOException $e) {
                die('Kan geen verbinding maken met de database.');
            }
        }
        return self::$conn;
    }
}