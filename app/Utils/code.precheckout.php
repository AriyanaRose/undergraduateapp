<?php

// required files - to call files - 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Cart.php";
require_once APP_DIR . "utils/Point.php";
require_once APP_DIR . "utils/code.isLoggedIn.php";


// create objects
$db_object = new Database();
$user_object = new User($db_object);
$cart_object = new Cart($db_object);