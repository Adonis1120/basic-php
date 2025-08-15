<?php

Class Crud {
    public $name;
    public $price;
    
    protected $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    function read() {
        $query = "SELECT * FROM meals";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    function create() {
        
    }

    function update() {

    }

    function destroy() {
        
    }
}