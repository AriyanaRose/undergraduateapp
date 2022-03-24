<?php

// required files - to call files - database and product files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);

$product_details = $product_object->getProductDetails($id);
//debug($product_details);


foreach ($product_details as $data) {
    # code...
}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/details.php";
require_once APP_DIR . "Views/footer.php";
