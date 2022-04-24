<style>
    .details-img {
        height: 600px;
    }
</style>


<div class="container my-5">

    <div class="row">

        <div class="col-md-6">

            <img class="img-fluid details-img" src="<?php echo BASE_URL . $data["product_image1"] ?>" alt="">

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
                                <input type="number" value="1" name="cart_quantity" class="form-control" id="usr">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button name="add_to_wishlist" type="submit" class="btn btn-outline-danger btn-lg"> Add to Wish List <i class="fa fa-heart"></i></button>
                            <button name="add_to_cart" type="submit" class="btn btn-outline-success btn-lg">Add to Basket <i class="fa fa-shopping-basket"></i></button>

                        </div>
                    </div>
                </form>
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