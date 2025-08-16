<?php

Class Crud {
    public $id;
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
        $query = "INSERT INTO meals SET name=?, price=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->price);

        if ($stmt->execute()) {
            $message = "successfully saved!";
        } else {
            $message = "Error";
        }

        return $message;
    }

    function edit() {
        $query = "SELECT * FROM meals WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();

        return $stmt;
    }

    function update() {
        $query = "UPDATE meals SET name=?, price=? WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->name);
        $stmt->bindParam(2, $this->price);
        $stmt->bindParam(3, $this->id);

        if ($stmt->execute()) {
            $message = "successfully updated!";
        } else {
            $message = "Error";
        }

        return $message;
    }

    function destroy() {
        $query = "DELETE FROM meals WHERE id=?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            $message = "successfully deleted!";
        } else {
            $message = "Error";
        }

        return $message;
    }
}