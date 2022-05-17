<?php

require_once APP_DIR . "utils/code.precheckout.php";

$user_details = $user_object->getUserAccount($user_id);


if (isset($_POST["shipping_address"])) {
    $user_object->addUserAddress($user_id, $_POST["shipping_address"]);
    $_SESSION["message"] = "Account has been updated";
}

if (isset($_POST["new_password"])) {
    $user_object->updateUserPassword($user_id, $_POST["old_password"], $_POST["new_password"]);
}



// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/pages/useraccount.php";
require_once APP_DIR . "Views/footer.php";
