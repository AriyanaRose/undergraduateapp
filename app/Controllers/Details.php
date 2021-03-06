<?php

// required files - to call files - database and product files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";
require_once APP_DIR . "Models/Cart.php";
require_once APP_DIR . "Models/Wishlist.php";



// create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Product($db_object);
$cart_object = new Cart($db_object);
$wish_object = new Wishlist($db_object);

$product_details = $product_object->getProductDetails($id);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["cart_quantity"])) {

        require_once APP_DIR . "utils/code.isLoggedIn.php";
        $cart_object->addToCart($user_id, $id, $_POST["cart_quantity"]);
        $_SESSION["message"] = "Item has been added to cart";

        header("location: " . BASE_URL . "cart");
        exit;
    }
}

foreach ($product_details as $data) {
    # code...
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["add_to_wishlist"])) {
        header("location: " . BASE_URL . "wishlist");
        require_once APP_DIR . "utils/code.isLoggedIn.php";
        $wish_object->addtoWishlist($user_id, $id, $_POST["add_to_wishlist"]);
        $_SESSION["message"] = "Item has been added to wishlist";
        exit;
    }
}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/details.php";
require_once APP_DIR . "Views/footer.php";
