<?php
    class Database {
        private $host = "localhost";
        private $database_name = "basic_php";
        private $username = "root";
        private $password = "";

        public $connection;

        public function getConnection() {
            try {
                $this->connection = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database_name, $this->username , $this->password);
            } catch (PDOException $e) {
                echo 'PDO Exception Error: ' . $e->getMessage();
            }

            return $this->connection;
        }
    }
?>