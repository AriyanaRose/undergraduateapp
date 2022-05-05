<?php

// required files - to call files - database and user files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);


if (isset($_POST["login"])) {

    if ($user_object->login($_POST)) { 
        $_SESSION["message"] = "You have have been successfully logged in!";
        header("location: " . BASE_URL . "home");
        exit;
    } else {
        $_SESSION["message"] = "You have entered an incorrect email or password, please re-enter and try again";
    }
}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/login.php";
require_once APP_DIR . "Views/footer.php";
