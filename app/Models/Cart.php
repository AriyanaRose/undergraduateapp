<?php

class Cart
{

    protected $pdo = null;
    private $subtotal = 0;
    private $total = 0;
    private $cart_details = array();

    /**
     * Constructor that takes pdo connection
     */
    public function __construct(Database $pdo)
    {
        if (!isset($pdo->pdo)) return null;
        $this->pdo = $pdo->pdo;
        $this->setSessions();
    }


    public function getCartDetails($user_id)
    {

        $sql = "
        SELECT *
        FROM cart, products
        WHERE cart.product_id = products.product_id
        AND cart.user_id = ?
        AND cart.cart_status = 'cart'
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($result as $product) {
            $this->subtotal += $product["product_price"] * $product["cart_quantity"];
        }

        $this->cart_details = $result;

        return $result;
    }


    public function addToCart($user_id, $product_id, $cart_quantity)
    {

        if ($this->isInCart($user_id, $product_id)) {
            // echo "Item is in the cart";
            // exit;
            $this->updateCart($user_id, $product_id, $cart_quantity);
            return;
        }

        $data = [
            "user_id" => $user_id,
            "product_id" => $product_id,
            "cart_quantity" => $cart_quantity
        ];

        $sql = "INSERT INTO `undergradapp`.`cart`
        (`cart_id`,
        `user_id`,
        `product_id`,
        `cart_created`,
        `cart_quantity`,
        `cart_status`)
        VALUES
        (
        null,
        :user_id,
        :product_id,
        current_timestamp,
        :cart_quantity,
        'cart'
        );
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    public function isInCart($user_id, $product_id)
    {
        $sql = "SELECT * FROM cart where user_id = ? AND product_id = ? AND cart_status = 'cart'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user_id, $product_id]);
        return $stmt->fetchColumn();
    }


    public function removeFromCart($cart_id, $user_id)
    {
        $sql = "DELETE FROM cart WHERE cart_id = ? AND user_id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cart_id, $user_id]);
    }


    public function updateCart($user_id, $product_id, $cart_quantity)
    {
        $sql = "UPDATE cart SET cart_quantity = ? WHERE cart.user_id = ? AND product_id =?;";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$cart_quantity, $user_id, $product_id]);
    }


    public function getSubtotal()
    {
        return $this->subtotal;
    }

    public function getTotal()
    {
        return $this->total;
    }

    public function calculateTotal()
    {
        //total is 100
        //discount as int [10,0,5]
        //additional cost [20,5]
        $total = $this->subtotal;
        $amount_to_add = [0, 0, 40, 0];
        $amount_to_subtract = [$_SESSION["checkout"]["points_discount_amount"], 0, 0];

        $total = $this->calculateAmountOff($total, $amount_to_subtract);
        $total = $this->calculateAmountAdded($total, $amount_to_add);
        $this->total = $total;
    }


    public function calculateAmountOff($total, $array_of_values)
    {
        //  
        $amount = array_sum($array_of_values);
        return $total - $amount;
    }

    public function calculateAmountAdded($total, $array_of_values)
    {
        //
        $amount = array_sum($array_of_values);
        return $total + $amount;
    }

    public function setSessions()
    {
        $names = [
            "points_used",
            "points_gained",
            "points_discount_amount"
        ];

        foreach ($names as $key) {
            if (empty($_SESSION["checkout"][$key])) {
                $_SESSION["checkout"][$key] = 0;
            }
        }
    }


    public function resetSessions()
    {
        unset($_SESSION["checkout"]);
    }


    //=================================================
    //POINTS
    //=================================================

    public function setPointsUsed($points_used)
    {
        //convert points to dollars
        $points_discount_amount = POINT::getDiscountAmount($points_used);

        //check if the user's points redeemed is not greater than cart subtotal

        if ($points_discount_amount >= $this->subtotal) {
            $this->resetPoints();
            $_SESSION["message"] = "You can not redeem points higher than the subtotal value";
            return;
        }

        //if user has enough points then discount can be applied
        if ($_SESSION["current_user"]["total_points"] >= $points_used) {
            //can exchange
            $_SESSION["checkout"]["points_used"] = $points_used;
            $_SESSION["checkout"]["points_discount_amount"] = POINT::getDiscountAmount($points_used);
            $_SESSION["message"] = "Points Redeemed and Discount Applied";
        } else {
            //cannot exchnage
            $_SESSION["message"] = "You do not have enough points for this action";
            return;
        }
    }

    public function resetPoints()
    {

        $_SESSION["checkout"]["points_used"] = 0;
        $_SESSION["checkout"]["points_discount_amount"] = 0;
    }


    public function setUserTotalPoints()
    {
        //

    }


    public function getUserTotalPoints()
    {
        return $_SESSION["current_user"]["total_points"];
    }


    public function getPointsGained()
    {
        return POINT::getPoints($this->total);
    }


    public function getPointsUsed()
    {

        return $_SESSION["checkout"]["points_used"];
    }


    public function getPointsDiscountAmount()
    {
        return $_SESSION["checkout"]["points_discount_amount"];
    }


    
    //=================================================
    //POINTS
    //=================================================



}
