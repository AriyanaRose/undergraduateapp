<?php


//require files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/EmailSubscription.php";


//create objects
$db_object = new Database();
$emailSubscription_object = new EmailSubscription($db_object);



if (isset($_POST["emailsub"])) {
    $emailSubscription_object->getEmailSub($_POST);
}


//load views

// required views
require_once APP_DIR . "Views/header.php";
require APP_DIR . "Views/pages/emailsub.php";
require_once APP_DIR . "Views/footer.php";
