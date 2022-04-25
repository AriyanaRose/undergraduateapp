<?php

class Wishlist
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

    public function getWishlistDetails($user_id)
    {

        $sql = "
        SELECT *
        FROM wishlist, products
        WHERE wishlist.product_id = products.product_id
        AND wishlist.user_id = ?
        AND wishlist.wish_status = 'wishlist'
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$user_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function addtoWishlist($user_id, $product_id,)
    {

        $data = [
            "user_id" => $user_id,
            "product_id" => $product_id,

        ];

        $sql = "INSERT INTO `undergradapp`.`wishlist`
        (`wish_id`,
        `user_id`,
        `product_id`,
        `wish_created`,
        `wish_status`)
        VALUES
        (
        null,
        :user_id,
        :product_id,
        current_timestamp(),
        'wishlist'
        );
        ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }


    public function removefromWishlist($wish_id, $user_id)
    {
        $sql = "DELETE FROM wishlist WHERE wish_id = ? AND user_id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$wish_id, $user_id]);
    }
}
