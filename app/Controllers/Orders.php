<?php

require_once APP_DIR . "utils/code.precheckout.php";


$orders = $order_object->getUserOrders($user_id);

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/orders.php";
require_once APP_DIR . "Views/footer.php";
