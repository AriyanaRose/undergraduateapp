<?php

require_once APP_DIR . "utils/code.precheckout.php";

$admin_productlist = $administrator_object->getAllProductsListing();

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/admin-productlisting.php";
require_once APP_DIR . "Views/footer.php";
