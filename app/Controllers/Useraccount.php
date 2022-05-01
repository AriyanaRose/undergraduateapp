<?php

require_once APP_DIR . "utils/code.precheckout.php";

$user_details = $user_object->getUserAccount($user_id);


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/useraccount.php";
require_once APP_DIR . "Views/footer.php";
