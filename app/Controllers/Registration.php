<?php

// required files - to call files - database and user files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";

// create objects
$db_object = new Database();
$user_object = new User($db_object);

if (isset($_POST["registration"])) {
    if(!$user_object->isUniqueEmail($_POST["email"])){
        $user_object->register($_POST);
        header("location: " . BASE_URL . "thankyouregister");
        exit;
    } else{
        $_SESSION["message"] = "An account with this email already exists, please login or use another email";
    }
    

}





// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/registration.php";
require_once APP_DIR . "Views/footer.php";
