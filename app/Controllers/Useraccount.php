<?php

require_once APP_DIR . "utils/code.precheckout.php";

$user_details = $user_object->getUserAccount($user_id);

//$user_address = $user_object->addUserAddress($user_id);


//if (isset($_POST["shipping_address"])) {
    //$user_object->addUserAddress($_POST);
    //header("location: " . BASE_URL . "thankyouregister");
    //exit;
//}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/useraccount.php";
require_once APP_DIR . "Views/footer.php";
