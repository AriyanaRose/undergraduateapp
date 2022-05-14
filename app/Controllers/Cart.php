<?php

require_once APP_DIR . "utils/code.precheckout.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_id"])) {
        $cart_object->removeFromCart($_POST["cart_id"], $user_id);
        $_SESSION["message"] = "Item removed from cart";
    }

    if (isset($_POST["cart_quantity"])) {
        header("location: " . BASE_URL . "cart");
        require_once APP_DIR . "utils/code.isLoggedIn.php";
        $cart_object->addToCart($user_id, $_POST["product_id"], $_POST["cart_quantity"]);
        $_SESSION["message"] = "Item has been added to cart";
        exit;
    }

    if (isset($_POST["update_cart"])) {

        $cart_object->addToCart($user_id, $_POST["product_id"], $_POST["cart_quantity"]);
        $_SESSION["message"] = "Cart has been updated";
        exit;
    }
}

$cart_details = $cart_object->getCartDetails($user_id);


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";

if (empty($cart_details)) {
    require_once APP_DIR . "Views/includes/cart-noresults.php";
} else {
    require_once APP_DIR . "Views/pages/cart.php";
}


require_once APP_DIR . "Views/footer.php";
