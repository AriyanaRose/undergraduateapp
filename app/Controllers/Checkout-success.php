<?php

//require files

require_once APP_DIR . "utils/code.precheckout.php";
$completed = false;


//get cart details
$cart_details = $cart_object->getCartDetails($user_id);


//check if cart is empty
if (empty($cart_details)) {
    echo "Cart is empty";
    exit;
}

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
        $payment_object = new Stripehelper();
        $checkout_order = $payment_object->getCheckoutOrder($id);
        debug($checkout_order);
        $completed = $payment_object->isCheckoutCompleted($checkout_order);
        $data = $payment_object->getPaymentDetails($checkout_order);
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
$order_id = $order_object->insertOrder(
    $user_id,
    $data["subtotal"],
    $data["total"],
    $data["total_discount_amount"],
    $data["payment"],
    $data["payment_id"],
);



//insert order details
$order_object->insertOrderDetails($cart_details, $order_id);




//update user points
echo $total_points;
$user_object->updateTotalPoints($user_id, $total_points);
$user_object->setTotalPoints($points_gained);
$cart_object->resetSessions();
