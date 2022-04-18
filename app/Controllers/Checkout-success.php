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


//set points info
$points_used = $cart_object->getPointsUsed();
$points_gained = $cart_object->getPointsGained();
$points_discount_amount = $cart_object->getPointsDiscountAmount();
$total_points = ($cart_object->getUserTotalPoints() + $points_gained) - $points_used;



//insert order



//insert order details





//update user points
echo $total_points;
$user_object->updateTotalPoints($user_id, $total_points);
$user_object->setTotalPoints($points_gained);

$cart_object->resetSessions();
