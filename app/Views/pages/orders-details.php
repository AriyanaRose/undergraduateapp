<style>
    body {
        min-height: 100vh
    }

    .text-gray {
        color: #aaa
    }

    img {
        height: 190px;
        width: 120px
    }
</style>

<!--	URL: https://bbbootstrap.com/snippets/product-list-65909871
                Bootstrap 4 Product List
                Author:  BBBootstrap Team 
            -->

<div class="container my-3">
    <div class="row">
        <div class="col-lg-12 mx-auto">
        <a class="btn btn-primary btn-sm float-right" href="<?php echo BASE_URL . "orders"; ?>">Return To Orders</a>
        </div>
  
    </div>
    <br>
    <div class="row">
        <div class="col-lg-12 mx-auto">
        
            <!-- List group-->
            <ul class="list-group shadow">

                <?php foreach ($orders as $data) : ?>
                    <!-- list group item-->
                    <li class="list-group-item">
                        <!-- Custom content-->
                        <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                            <div class="media-body order-2 order-lg-1">
                                <h4 class="mt-0 font-weight-bold mb-2"><?php echo $data["product_title"] ?></h4>
                                <h5 class="font-italic text-dark mb-0 ">Author: <?php echo $data["product_brand"]; ?></h5>
                                <h5 class="font-italic text-dark mb-0 ">Format: <?php echo $data["product_format"]; ?></h5>
                                <h5 class="font-italic text-dark mb-0 ">Condition: <?php echo $data["product_condition"]; ?></h5>
                                <div class="d-flex align-items-center justify-content-between mt-1">
                                    <h6 class="font-weight-bold my-2">$<?php echo $data["order_details_price"] ?></h6>
                                </div>
                            </div><img src="<?php echo BASE_URL . $data["product_image1"]; ?>" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
                        </div> <!-- End -->
                    </li> <!-- End -->

                <?php endforeach; ?>

                <li class="list-group-item">
                    <!-- Custom content-->
                    <div class="media align-items-lg-center flex-column flex-lg-row p-3">
                        <div class="media-body order-2 order-lg-1">
                            <h3 class="text-center">Summary</h3>
                            <h5>Order No <span class="float-right"><?php echo $data["order_id"] ?></span> </h5>
                            <h5>Subtotal <span class="float-right"><?php echo $data["subtotal"] ?></span> </h5>
                            <h5>Delivery <span class="float-right">$40.00</span> </h5>
                            <h5>Total <span class="float-right"><?php echo $data["total"] ?></span> </h5>
                        </div>
                    </div>
                </li>

            </ul> <!-- End -->
        </div>
    </div>
</div>