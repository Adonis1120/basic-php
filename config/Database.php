<?php
    class Database {
        protected $host = "host=localhost";
        protected $database_name = "basic_php";
        protected $username = "root";
        protected $password = "";

        public function getConnetion() {
            $connection = new PDO('msql:host=' . $this->host . ';database=' . $this->database_name, 'username=' . $this->username , 'password=' . $this->password);

            //try and catch

            return $connection;
        }
    }
?>