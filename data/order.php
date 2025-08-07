<?php
    $name = "";
    $meal = "";
    $meal_qty = 0;
    $drink = "";
    $drink_qty = 0;
    $error_message = "";

    if ($_POST) {
        if ($_POST['meal_qty'] == "" || $_POST['drink_qty'] == "") {
            $error_message = "Please input a number in the meal or drink quantity";
        } else {
            $name = $_POST['name'];
            $meal_name = $_POST['meal'];
            $drink_name = $_POST['drink'];

            $meal_qty = $_POST['meal_qty'];

            $meal = new Order();
            $meal->meal_qty = $meal_qty;
            $meal_total = $meal->computeMeal();
            $meal_price = $meal->meal_price;

            $drink_qty = $_POST['drink_qty'] ?? 0;

            $drink = new Order();
            $drink->drink_qty = $drink_qty;
            $drink_total = $drink->computeDrink();
            $drink_price = $drink->drink_price;

            $total = new Order();
            $total->meal_qty = $meal_qty;
            $total->drink_qty = $drink_qty;
            $grand_total = $total->computeTotal();
        }
    }
?>