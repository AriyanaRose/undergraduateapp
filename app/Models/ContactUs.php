<?php

class ContactUs
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


    public function getMesssage($inputs)
    {


        $data = [
            'first_name' => $inputs["first_name"],
            'last_name' => $inputs["last_name"],
            'email' => $inputs["email"],
            'message_sub' => $inputs["message_sub"],
            'message_sent' => $inputs["message_sent"]

        ];



        $sql = "INSERT INTO `undergradapp`.`contact_us`
        (`contact_id`,
        `first_name`,
        `last_name`,
        `email`,
        `message_sub`,
        `message_sent`,
        `message_date`)
        VALUES
        (
        NULL,
        :first_name,
        :last_name,
        :email,
        :message_sub,
        :message_sent,
        current_timestamp()

        );
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
}
