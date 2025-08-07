<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- SEO -->
    <meta name="title" content="My Web Page">
    <meta name="description" content="This is a sample web page.">
    <meta name="keywords" content="HTML, CSS, JavaScript">

    <!-- Link to external CSS file -->
    <!-- <link rel="stylesheet" href="style.css"> -->

    <!-- Link to Bootstrap CSS - CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'Classes/Order.php';

        include_once 'data/order.php';
    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">PHP Practice</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Calculator</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">CRUD</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

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
                                    <input name="meal" class="form-control">
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

    <!--
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input name="name" class="form-control">
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="meal" class="form-label">Meal</label>
                            <input name="name" class="form-control">
                        </div>
                        <div class="col">
                            <label for="meal_qty" class="form-label">Qty</label>
                            <input name="meal_qty" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="drink" class="form-label">Drink</label>
                            <input name="drink" class="form-control">
                        </div>
                        <div class="col">
                            <label for="drink_qty" class="form-label">Qty</label>
                            <input name="drink_qty" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <p>Name: Name here</p>
                    <p>Meal: Meal odered</p>
                    <p>qty x price = $</p>
                    <p>Drinks: Meal odered</p>
                    <p>qty x price = $</p>
                </div>
            </div>
        </div>
    </div>
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>