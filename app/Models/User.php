<?php

class User
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


    public function register($inputs)
    {
        $data = [
            'first_name' => $inputs["first_name"],
            'last_name' => $inputs["last_name"],
            'email' => $inputs["email"],
            'password' => password_hash($inputs["password"], PASSWORD_DEFAULT)
        ];


        $sql = "INSERT INTO `undergradapp`.`users`
        (`user_id`,
        `first_name`,
        `last_name`,
        `email`,
        `password`,
        `user_created`,
        `user_type`)
        VALUES
        (
            NULL,
            :first_name,
            :last_name,
            :email,
            :password,
            current_timestamp(),
            'customer'
        );
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }

    public function login($inputs)
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$inputs['email']]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($inputs['password'], $user['password'])) {
            echo "valid!";
            $user["password"] = null;
            $_SESSION["current_user"] = $user;
            return true;
        }
        return false;
    }


    public function showName()
    {

        echo "Ariyana";
    }


    public function updateTotalPoints($user_id, $total_points)
    {

        $sql = "UPDATE users SET total_points = ? WHERE user_id =?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$total_points, $user_id]);
    }

    public function setTotalPoints($new_points)
    {
        $_SESSION["current_user"]["total_points"] = $new_points;
    }

    public function getUserAccount($user_id)
    {
        $sql = "SELECT * FROM users WHERE user_id =?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addUserAddress($user_id, $shipping_address){
        
        $sql = "UPDATE users SET shipping_address = ? WHERE user_id =?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$shipping_address, $user_id]);

    }


}
