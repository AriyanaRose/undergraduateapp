<?php

require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Wishlist.php";


$db_object = new Database();
$user_object = new User($db_object);
$wish_object = new Wishlist($db_object);

//$wish_object->addtoWishlist(1, 1, "wishlist");
//$wish_object->removefromWishlist(1,1);


$wish_details = $wish_object->getWishlistDetails(1);
//debug($wish_details);



// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/wishlist.php";
require_once APP_DIR . "Views/footer.php";
