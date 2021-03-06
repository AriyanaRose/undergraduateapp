<?php

// required files - to call files - database and product files 
require_once APP_DIR . "Config/Database.php";
//require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";

// create objects
$db_object = new Database();
//$user_object = new User($db_object);
$product_object = new Product($db_object);


// Testing


// end test


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (!empty($_GET)) {
        $product_details = $product_object->filterProducts($_GET);
    } else {

        $product_details = $product_object->getAllProducts();
    }
}




// load views
require_once APP_DIR . "Views/header.php";

if (empty($product_details)) {
    require_once APP_DIR . "Views/includes/noresults.php";
} else {
    require_once APP_DIR . "Views/pages/store.php";
}
require_once APP_DIR . "Views/footer.php";
