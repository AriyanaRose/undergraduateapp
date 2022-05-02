<?php

require_once APP_DIR . "utils/code.precheckout.php";

$admin_orders = $administrator_object->getAllOrders();

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/admin-order.php";
require_once APP_DIR . "Views/footer.php";
