<?php

//require files

require_once APP_DIR . "utils/code.precheckout.php";
$completed = false;


//get cart details
$cart_details = $cart_object->getCartDetails($user_id);


//calculate total
$cart_object->calculateTotal();


//determine the payment method used

switch ($payment) {
    case 'debug':
        echo "Testing <br>";
        $data = [
            "payment" => "none",
            "payment_id" => null,
            "subtotal" => $cart_object->getSubtotal(),
            "total" => $cart_object->getTotal(),
            "total_discount_amount" => 0
        ];
        $completed = true;
        break;

    case 'stripe':
        # code...
        break;


    default:
        # code...
        break;
}



//validate if payment was completed 
if (!$completed || empty($data)) {
    echo "payment process not completed";
}

//insert order



//insert order details





//update user points

$user_object->updateTotalPoints($user_id, 500);

$cart_object->resetSessions();