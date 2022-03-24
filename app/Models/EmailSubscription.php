<?php
class emailSubscription
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


    public function getEmailSub($inputs)
    {

        $data = [
            'email' => $inputs["email"],
        ];
        $sql = "INSERT INTO `email_subscription`
        (`sub_id`,
        `email`)
        VALUES
        (
        NULL,
        :email
        );
        ";

        $stmt= $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
}
