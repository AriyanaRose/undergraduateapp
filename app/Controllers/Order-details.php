<?php

require_once APP_DIR . "utils/code.precheckout.php";


$orders = $order_object->getUserOrderDetails($user_id, $id);


// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/orders-details.php";
require_once APP_DIR . "Views/footer.php";
