<?php
    class Order {
        public $meal_qty = 0;
        public $drink_qty = 0;
        public $meal_price = 10;
        public $drink_price = 20;

        public function computeMeal() {
            $meal_total = $this->meal_qty * $this->meal_price;
            return $meal_total;
        }

        public function computeDrink() {
            $drink_total = $this->drink_qty * $this->drink_price;
            return $drink_total;
        }

        public function computeTotal() {
            $total = $this->computeMeal() + $this->computeDrink();
            return $total;
        }
    }
?>