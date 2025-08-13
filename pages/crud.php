<?php include_once '../partials/head.php' ?>
<?php include_once '../partials/header.php' ?>
<?php include_once '../data/crud.php' ?>

<form method="POST">
    <div class="row">
        <div class="col">
            <div class="card p-4 gap-4">
                <div>
                    <label class="form-lable">Name</label>
                    <input name="name" class="form-control">
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-lable">Meal</label>
                                <select class="form-select" aria-label="Default select example" name="meals">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($read_meals as $meal) { ?>
                                        <option value="<?= $meal['id'] ?>"><?= $meal['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col">
                                <label class="form-lable">Qty</label>
                                <input type="number" name="meal_qty" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-lable">Drinks</label>
                                <input name="drink" class="form-control">
                            </div>

                            <div class="col">
                                <label class="form-lable">Qty</label>
                                <input type="number" name="drink_qty" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Compute</button>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card">
                <div class="card-body">
                    <?php if ($_POST && $error_message == "") { ?>
                        <p>
                            Name: <?= $name ?>
                        </p>

                        <p>
                            Meal: <?= $meal_name ?>
                            <?= $meal_qty . ' x ' . $meal_price . ' = ' . $meal_total ?>
                        </p>

                        <p>
                            Drink: <?= $drink_name ?>
                            <?= $drink_qty . ' x ' . $drink_price . ' = ' . $drink_total ?>
                        </p>

                        <p>
                            Grand Total: <?= $grand_total ?>
                        </p>
                    <?php } else { ?>
                        <p>
                            Please make your order properly!
                        </p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</form>

<?php include_once '../partials/foot.php' ?>