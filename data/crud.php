<?php

include_once '../config/Database.php';
include_once '../Classes/Crud.php';

$conn = new Database();
$db = $conn->getConnection();

$crud = new Crud($db);
$read_meals = $crud->read();
