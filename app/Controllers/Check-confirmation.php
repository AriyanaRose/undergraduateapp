<?php



//check if confirmation id exist
//if(isset($_SESSION["confirmation"])){
//$id = $_SESSION["confirmation"];
//}else{
//echo "No confirmation id found";
//exit;
//}

//function to load order details
$orders = $order_object->getUserOrderDetails($user_id, $id);

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/orders-details.php";
require_once APP_DIR . "Views/footer.php";
