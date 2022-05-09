<?php

// required files - to call files - database and product files 
require_once APP_DIR . "Config/Database.php";
//require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";

// create objects
$db_object = new Database();
//$user_object = new User($db_object);
$product_object = new Product($db_object);



//debug($product_details);

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET)) {
        $product_details = $product_object->getComingSoon();
    } else {

        $product_details = $product_object->getComingSoon();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET)) {
        $product_new = $product_object->getNewArrivals();
    } else {

        $product_new = $product_object->getNewArrivals();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET)) {
        $product_featured = $product_object->getRandomProducts();
    } else {

        $product_featured = $product_object->getRandomProducts();
    }
}


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET)) {
        $product_best = $product_object->getBestSellingProducts();
    } else {

        $product_best = $product_object->getBestSellingProducts();
    }
}


// required views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require APP_DIR . "Views/pages/Homepage.php";
require_once APP_DIR . "Views/footer.php";
