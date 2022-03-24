<?php


//require files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/EmailSubscription.php";


//create objects
$db_object = new Database();
$emailSubscription_object = new EmailSubscription($db_object);



if (isset($_POST["email"])) {
    echo "you clicked a button";
    $emailSubscription_object->getEmailSub($_POST);
}
