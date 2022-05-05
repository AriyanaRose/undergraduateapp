<?php

// required files - to call files - database and user files 
require_once APP_DIR . "Config/Database.php";
require_once APP_DIR . "Models/User.php";
require_once APP_DIR . "Models/Product.php";
require_once APP_DIR . "Models/admin/Adminproduct.php";


// create objects
$db_object = new Database();
$user_object = new User($db_object);
$product_object = new Adminproduct($db_object);

if (isset($_POST["add_product"])) {

    require_once APP_DIR . "Utils/upload.php";

    // check if files were selected

    if (isSelected(["product_image1"])) {

        // check if file names did not have an error
        $product_image1 = getFilename("product_image1", "products");

        if (
            $product_image1 != "error" 
        ) {
            $_POST['product_image1'] = $product_image1;

            $product_object->addProduct($_POST);
            upload("product_image1", "$product_image1");
        }

        // add new names to $_POST

        // upload

    } else {
        echo "Please select product images to upload";
    }
}

// load views
require_once APP_DIR . "Views/header.php";
require_once APP_DIR . "Views/pages/add-product.php";
require_once APP_DIR . "Views/footer.php";