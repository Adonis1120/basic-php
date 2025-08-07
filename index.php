<?php //include_once 'partials/head.php' ?>
<?php //include_once 'partials/header.php' ?>

<?php
    /*
    if ($_SERVER['REQUEST_METHOD'] == "GET") {
        $page = basename($_SERVER['PHP_SELF']);

        if ($page == 'index.php') {
            $page = 'home.php';
        }

        $path = 'pages/' . $page;

        if (file_exists($path)) {
            include_once $path;
        } else {
            echo "File does not exist!";
        }
    } else {
        include_once 'pages/home.php';
    }
    */
?>

<?php //include_once 'partials/foot.php' ?>

<?php

$page = $_GET['page'] ?? 'home';
$page_file = __DIR__ . "/pages/{$page}.php";

if (file_exists($page_file)) {
    ob_start();
    include $page_file;
    $slot = ob_get_clean();
    include 'layout.php';
} else {
    http_response_code(404);
    echo "Page not found.";
}