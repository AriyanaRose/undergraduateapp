<style>
    .details-img {
        height: 700px;
        width: auto;
    }

    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }

    .breadcrumb {
        background-color: white;
    }

    .bg-cover {
        background-size: cover !important;
        padding-top: 30px;
        padding-bottom: 30px;
    }

    body {
        min-height: 100vh;
    }


    .container {
        position: centered;
    }

    /* Bottom right text */
    .text-block {
        position: centered;
        bottom: 20px;
        right: 20px;
        background-color: black;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }

    .btn-lg {
        background-color: #011f4b;
    }
</style>


<nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-bullet">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>store" class="text-uppercase">Store</a></li>
            <li aria-current="page" class="breadcrumb-item active text-uppercase">Details</li>
        </ol>
    </nav>


<div class="container my-0">


    <form method="post">
        <div class="row">
            <div class="col-md-12">
                <button name="add_to_wishlist" type="submit" class="btn btn-danger btn-sm float-right "><i class="fa fa-heart"></i></button>
            </div>
        </div>
    </form>

    <div class="row">

        <div class="col-md-6">
            <img class="img-fluid details-img float-left" src="<?php echo BASE_URL . $data["product_image1"] ?>" alt="">
        </div>



        <div class="col-md-6">

            <h4><strong>Name:</strong> <?php echo $data["product_title"]; ?></strong></h3>
                <h5><strong> Author:</strong> <?php echo $data["product_brand"]; ?></h5>
                <h6><strong>Genre:</strong> <?php echo $data["product_category"]; ?></h6>
                <h6><strong>Format:</strong> <?php echo $data["product_format"]; ?></h6>
                <h6><strong>Condition:</strong> <?php echo $data["product_condition"]; ?></h6>
                <h6><strong>Stock:</strong> <?php echo $data["product_quantity"]; ?></h6>
                <h6><strong>Status:</strong> <?php echo $data["product_status"]; ?></h6>
                <h5>$<?php echo $data["product_price"]; ?></h5>
                <div></div>
                <form method="post">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group">
                                <input type="number" min="0" value="1" name="cart_quantity" class="form-control" id="usr">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button name="add_to_cart" type="submit" class="btn btn-lg text-light">Add to Basket</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <p class="font-weight-bold mb-0">About this Book </p>
                            <p class="text-wrap"> <?php echo $data["product_description"] ?> </p>
                        </div>
                    </div>

                </div>

        </div>
    </div>

</div>

<BR>
</BR>
<!-- Authors	-->

<?php require_once APP_DIR . "Views/includes/product-reviews.php"; ?>