<?php

require_once APP_DIR . "utils/code.precheckout.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["remove_from_wish"])) {
        $wish_object->removefromWishlist($_POST["wish_id"], $user_id);
        $_SESSION["message"] = "Item removed from wishlist";
    }

    if (isset($_POST["add_to_cart"])) {
        header("location: " . BASE_URL . "cart");
        require_once APP_DIR . "utils/code.isLoggedIn.php";
        $cart_object->addToCart($user_id, $_POST["product_id"], $_POST["cart_quantity"]);
        $wish_object->removefromWishlist($_POST["wish_id"], $user_id);
        $_SESSION["message"] = "Item has been added to wishlist";
        exit;
    }
}


$wish_details = $wish_object->getWishlistDetails($user_id);


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";

if (empty($wish_details)) {
    require_once APP_DIR . "Views/includes/wish-noresults.php";
} else {
    require_once APP_DIR . "Views/pages/wishlist.php";
}


require_once APP_DIR . "Views/footer.php";
