<?php

// required files - to call files - database and product files 
require_once APP_DIR . "Config/Database.php";
//require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";

// create objects
$db_object = new Database();
//$user_object = new User($db_object);
$product_object = new Product($db_object);

//debug ($_GET);

//$product_details = $product_object->getAllProducts();


//debug($product_details);

if($_SERVER ["REQUEST_METHOD"] == "GET"){
    if (!empty($_GET)){
         $product_details = $product_object->getBestSeller();
    } else{

        $product_details = $product_object->getBestSeller();
    }
}

// required views
require_once APP_DIR . "Views/header.php";
require APP_DIR . "Views/pages/Homepage.php";
require_once APP_DIR . "Views/footer.php";