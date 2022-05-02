<?php

require_once APP_DIR . "utils/code.precheckout.php";

$admin_contactus = $administrator_object->getAllContactUs();

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/admin-contactus.php";
require_once APP_DIR . "Views/footer.php";
