<?php

// required files - to call files - 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Cart.php";
require_once APP_DIR . "utils/code.isLoggedIn.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);
$cart_object = new Cart($db_object);

//$cart_object->addToCart(1,1,2,);
//$cart_object->addToCart(2,2,2,);
//cart_object->removeFromCart(1,1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_id"])) {
        $cart_object->removeFromCart($_POST["cart_id"], $user_id);
    }
}

$cart_details = $cart_object->getCartDetails($user_id);
//debug($cart_details);

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/cart.php";
require_once APP_DIR . "Views/footer.php";
