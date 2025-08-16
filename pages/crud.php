<?php include_once '../partials/head.php' ?>
<?php include_once '../partials/header.php' ?>
<?php include_once '../data/crud.php' ?>

<?php if ($message != '') { ?>
    <div class="card m-4 p-4">
        <?= $message ?>
    </div>
<?php } ?>
    
<form method="POST" class="m-4">
    <div class="row">
        <input type="text" name="edit_id" value="<?= $selected_meal['id'] ?? '' ?>" hidden>
        <div class="col-6 mb-3">
            <label for="name" class="form-label">Meal</label>
            <input type="text" name="name" class="form-control" placeholder="Enter meal" value="<?= $selected_meal['name'] ?? '' ?>" />
        </div>
        <div class="col-6 mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter price" value="<?= $selected_meal['price'] ?? '' ?>" />
        </div>
    </div>
    <div class="d-flex align-items-end flex-column mb-3">
        <button name="btn_save" type="submit" class="btn btn-primary justify-self-end">Save</button>
    </div>
</form>
       
<div class="m-4">
    <table class="table">
        <thead>
            <tr>
                <th>Meal</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach ($read_meals as $meal) { ?>  
                    <tr>
                        <form method="POST">
                            <td><?= $meal['name'] ?></td>
                            <td><?= $meal['price'] ?></td>
                            <td class="p-2">
                                <input type="text" name="<?= 'id'?>" value="<?= $meal['id'] ?>" hidden>
                                <button name="btn_edit" class="btn btn-primary">Edit</button>
                                <button name="btn_delete" class="btn btn-danger">Delete</button>
                            </td>
                        </form>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once '../partials/foot.php' ?>