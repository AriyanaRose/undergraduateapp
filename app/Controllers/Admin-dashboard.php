<?php

require_once APP_DIR . "utils/code.precheckout.php";

// is user an admin
if (!$administrator_object->isAdmin()) {
    $_SESSION["message"] = "Access Denied";
    header("location: " . BASE_URL . 'login');
    exit;
}


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/includes/alerts.php";
require_once APP_DIR . "Views/admin-dashboard.php";
require_once APP_DIR . "Views/footer.php";
