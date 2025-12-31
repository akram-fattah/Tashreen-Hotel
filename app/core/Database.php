<?php


class Database {
    private $conn;

    private function connection() {
        $dsn = "mysql:host=".HOST.";dbname=".DB.";charset=utf8mb4";

        try {
            $pdo = new PDO($dsn, USER, PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                PDO::ATTR_EMULATE_PREPARES => false
            ]);
            return $pdo;
        } catch (PDOException $e) {
            if(DEVMODE) {
                echo 'Eroor => ' . $e->getMessage();
            } else {
                file_put_contents(ROOT."logDB.log", $e->getMessage(). "\n" , FILE_APPEND);
            }
        }
    }

    public function query($query, $data = []) {
        $conn = $this->connection();
        $stmt = $conn->prepare($query);
        $res = $stmt->execute($data);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}