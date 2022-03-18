<?php

//require files
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/ContactUs.php";


//create objects
$db_object = new Database();
$contactus_object = new ContactUs($db_object);

debug($_POST);

if (isset($_POST["contactus"])) {
    $contactus_object->getMesssage($_POST);
}


// required views
require_once APP_DIR . "Views/header.php";
require APP_DIR . "Views/pages/contactus.php";
require_once APP_DIR . "Views/footer.php";
