<?php

class Administrator
{
    protected $pdo = null;

    /**
     * Constructor that takes pdo connection
     */
    public function __construct(Database $pdo)
    {
        if (!isset($pdo->pdo)) return null;
        $this->pdo = $pdo->pdo;
    }


    public function getAllProductsListing()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllOrders()
    {
        $sql = "SELECT * FROM orders";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getOrderDetails($order_id)
    {
        $sql = "
        SELECT *
        FROM orders, order_details, products, users
        WHERE orders.order_id = order_details.order_id
        AND order_details.product_id = products.product_id
        AND orders.user_id = ?
        AND orders.order_id = ?
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$order_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllEmailSubs()
    {
        $sql = "SELECT * FROM email_subscription ORDER BY sub_id ASC ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllContactUs()
    {
        $sql = "SELECT * FROM contact_us ORDER BY contact_id ASC ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getAllUsers()
    {
        $sql = "SELECT * FROM users WHERE user_type = 'customer' ORDER BY user_id ASC ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function adminLogin($inputs)
    {
        $sql = "SELECT * FROM users WHERE email = ? AND user_type = 'admin' ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$inputs['email']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($inputs['password'], $user['password'])) {
            echo "valid!";
            $user["password"] = null;
            $_SESSION["admin_user"] = $user;
            return true;
        }
        return false;
    }
}
