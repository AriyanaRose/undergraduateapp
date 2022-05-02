<?php

require_once APP_DIR . "utils/code.precheckout.php";

$admin_email = $administrator_object->getAllEmailSubs();

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/admin-email.php";
require_once APP_DIR . "Views/footer.php";
