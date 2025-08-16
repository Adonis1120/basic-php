<?php

include_once '../config/Database.php';
include_once '../Classes/Crud.php';

$conn = new Database();
$db = $conn->getConnection();

$crud = new Crud($db);

$read_meals = $crud->read();

$message = "";

if (isset($_POST['btn_save'])) {
    if ($_POST['edit_id'] != "") {
        $crud->id = $_POST['edit_id'];
        $crud->name = $_POST['name'];
        $crud->price = $_POST['price'];
        $message = $crud->update();
    } else {
        $crud->name = $_POST['name'];
        $crud->price = $_POST['price'];
        $message = $crud->create();
    }
} elseif (isset($_POST['btn_edit'])) {
    $crud->id = $_POST['id'];
    $selected_meal = $crud->edit()->fetch();
} elseif (isset($_POST['btn_delete'])) {
    $crud->id = $_POST['id'];
    $message = $crud->destroy();
}