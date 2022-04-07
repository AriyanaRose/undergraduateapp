<?php

// required files - to call files - database and product files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";
require_once APP_DIR . "Models/Cart.php";


// create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);
$cart_object = new Cart($db_object);

$product_details = $product_object->getProductDetails($id);
//debug($product_details);


//debug($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_quantity"])) {
        echo "you clicked a button";
        require_once APP_DIR . "utils/code.isLoggedIn.php";
        $cart_object->addToCart($user_id, $id, $_POST["cart_quantity"]);
    }
}

foreach ($product_details as $data) {
    # code...
}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/details.php";
require_once APP_DIR . "Views/footer.php";
