<?php

require_once APP_DIR . "utils/code.precheckout.php";

//$cart_object->addToCart(1,1,2,);
//$cart_object->addToCart(2,2,2,);
//cart_object->removeFromCart(1,1);
//debug($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_id"])) {
        $cart_object->removeFromCart($_POST["cart_id"], $user_id);
    }

    if (isset($_POST["cart_quantity"])) {
        header("location: " . BASE_URL . "cart");
        require_once APP_DIR . "utils/code.isLoggedIn.php";
        $cart_object->addToCart($user_id, $_POST["product_id"], $_POST["cart_quantity"]);
    }
}

$cart_details = $cart_object->getCartDetails($user_id);
//debug($cart_details);

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/cart.php";
require_once APP_DIR . "Views/footer.php";
