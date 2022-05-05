<?php


class Adminproduct extends Product
{

    public function addProduct($inputs)
    {

        $data = [
            'product_title' => $inputs["product_title"],
            'product_brand' => $inputs["product_brand"],
            'product_description' => $inputs["product_description"],
            'product_price' => $inputs["product_price"],
            'product_discount_amount' => $inputs["product_discount_amount"],
            'product_quantity' => $inputs["product_quantity"],
            'product_image1' => $inputs["product_image1"],
            'product_status' => $inputs["product_status"],
            'product_category' => $inputs["product_category"],
            'product_format' => $inputs["product_format"],
            'product_condition' => $inputs["product_condition"],
            'product_type' => $inputs["product_type"],
            'product_subcategory' => $inputs["product_subcategory"],
        ];


        $sql = "INSERT INTO `undergradapp`.`products`
        (`product_id`,
        `product_title`,
        `product_brand`,
        `product_description`,
        `product_price`,
        `product_discount_amount`,
        `product_quantity`,
        `product_image1`,
        `product_created`,
        `product_status`,
        `product_category`,
        `product_format`,
        `product_condition`,
        `product_type`,
        `product_subcategory`)

        VALUES
        (
        NULL,
        :product_title,
        :product_brand,
        :product_description,
        :product_price,
        :product_discount_amount,
        :product_quantity,
        :product_image1,
        current_timestamp(),
        :product_status,
        :product_category,
        :product_format,
        :product_condition,
        :product_type,
        :product_subcategory
        );  
        ";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
}
