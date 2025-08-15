<?php include_once '../partials/head.php' ?>
<?php include_once '../partials/header.php' ?>
<?php include_once '../data/crud.php' ?>
    
<form method="POST" class="m-4">
    <div class="row">
        <div class="col-6 mb-3">
            <label for="name" class="form-label">Meal</label>
            <input type="text" name="name" class="form-control" placeholder="Enter meal" />
        </div>
        <div class="col-6 mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Enter price" />
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
            </form>
            <?php foreach ($read_meals as $meal) { ?>  
                    <tr>
                    <td><?= $meal['name'] ?></td>
                    <td><?= $meal['price'] ?></td>
                    <td class="p-2">
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<?php include_once '../partials/foot.php' ?>