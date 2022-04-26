<?php

require_once APP_DIR . "utils/code.precheckout.php";

//$wish_object->addtoWishlist(1, 1, "wishlist");
//$wish_object->removefromWishlist(1,1);


$wish_details = $wish_object->getWishlistDetails($user_id);
//debug($wish_details);



// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/wishlist.php";
require_once APP_DIR . "Views/footer.php";
