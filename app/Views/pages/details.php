
<style>

.details-img{
    height: 600px;
}
</style>

<ul class="breadcrumb">
  <li class="breadcrumb-item"><a href="#">Photos</a></li>
  <li class="breadcrumb-item"><a href="#">Summer 2017</a></li>
  <li class="breadcrumb-item"><a href="#">Italy</a></li>
  <li class="breadcrumb-item active">Rome</li>
</ul>


<div class="container my-5">

    <div class="row">

        <div class="col-md-6">

            <img class="img-fluid details-img" src="<?php echo BASE_URL . $data["product_image1"] ?>" alt="">

        </div>



        <div class="col-md-6">

            <h3>Name: <?php echo $data["product_title"]; ?></h3>
            <h4>Author: <?php echo $data["product_brand"]; ?></h4>
            <h6>Genre: <?php echo $data["product_category"]; ?></h6>
            <h6>Format: <?php echo $data["product_format"]; ?></h6>
            <h6>Condition: <?php echo $data["product_condition"]; ?></h6>
            <h6>Stock: <?php echo $data["product_quantity"]; ?></h6>
            <h6>Status: <?php echo $data["product_status"]; ?></h6>
            <h4>$<?php echo $data["product_price"]; ?></h4>



            <form method="post">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <input type="number" value="1" name="cart_quantity" class="form-control" id="usr">
                        </div>

                    </div>
                    <div class="col-md-10">
                        <button name="add_to_cart" type="submit" class="btn btn-danger btn-lg">Add to Basket</button>
                    </div>
                </div>

            </form>

            <div class="row">
                <div class="col-md-12">
                    <p class="font-weight-bold mb-0">About this Book </p>
                    <p class="text-wrap"> <?php echo $data["product_description"] ?> </p>
                </div>
            </div>

        </div>

    </div>













</div>