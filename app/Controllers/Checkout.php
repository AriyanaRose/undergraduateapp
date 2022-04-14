<?php

require_once APP_DIR . "utils/code.precheckout.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_id"])) {
        $cart_object->removeFromCart($_POST["cart_id"], $user_id);
    }
}

$cart_details = $cart_object->getCartDetails($user_id);

$cart_object->calculateTotal();


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/checkout.php";
require_once APP_DIR . "Views/footer.php";
