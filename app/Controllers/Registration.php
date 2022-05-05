<?php

// required files - to call files - database and user files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);

if (isset($_POST["registration"])) {
    header("location: " . BASE_URL . "thankyouregister");
    exit;
}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/registration.php";
require_once APP_DIR . "Views/footer.php";