<?php

require_once APP_DIR . "utils/code.precheckout.php";

$admin_customerlist = $administrator_object->getAllUsers();

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/admin-customers.php";
require_once APP_DIR . "Views/footer.php";
