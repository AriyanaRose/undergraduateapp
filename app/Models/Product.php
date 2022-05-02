<?php

class Product
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

    public function getAllProducts()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getComingSoon()
    {
        $sql = "SELECT * FROM products WHERE product_subcategory = 'Coming Soon' ORDER BY product_brand ASC LIMIT 8";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getNewArrivals()
    {
        $sql = "SELECT * FROM products WHERE product_subcategory = 'New Arrivals' ORDER BY product_brand ASC LIMIT 8";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getAllCategories()
    {
        $sql = "SELECT DISTINCT product_category FROM products  ORDER BY product_category ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getAllBrands()
    {
        $sql = "SELECT DISTINCT product_brand FROM products ORDER BY product_brand ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }


    public function getProductDetails($product_id)
    {

        $sql = "SELECT * FROM products WHERE product_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$product_id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }



    public function filterProducts($inputs)
    {

        $sql = " SELECT * FROM products WHERE product_id > 0";


        foreach ($inputs as $key => $value) {

            if (empty($value)) {
                continue;
            }

            switch ($key) {

                case 'search':
                    $sql .= " AND product_title LIKE '%$value%' ";
                    break;

                case 'category':
                    $sql .= " AND product_category = '$value' ";
                    break;

                case 'format':
                    $sql .= " AND product_format ='$value' ";
                    break;

                case 'brand':
                    $sql .= " AND product_brand ='$value' ";
                    break;

                case 'format':
                    $sql .= " AND product_format ='$value' ";
                    break;

                case 'condition':
                    $sql .= " AND product_condition ='$value' ";
                    break;

                case 'subcategory':
                    $sql .= " AND product_subcategory ='$value' ";
                    break;


                case 'order':
                    $sql .= $this->orderBy($value);
                    break;

                default:
                    # code...
                    break;
            }
        }


        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function orderBy($value)
    {
        switch ($value) {
            case 'order-title':
                return " ORDER BY product_title ASC";
                break;
            case 'order-title-desc':
                return " ORDER BY product_title DESC";
                break;
            case 'order-price':
                return " ORDER BY product_price ASC";
                break;
            case 'order-price-desc':
                return " ORDER BY product_price DESC";
                break;

            default:
                # code...
                break;
        }
    }
}
