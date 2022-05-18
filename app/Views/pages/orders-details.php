<style>
    .cancel {
        text-decoration: none
    }

    .bg-pay {
        background-color: #eee;
        border-radius: 2px
    }

    .com-color {
        color: #8f37aa !important
    }

    .radio {
        cursor: pointer
    }

    label.radio input {
        position: absolute;
        top: 0;
        left: 0;
        visibility: hidden;
        pointer-events: none
    }

    label.radio div {
        padding: 7px 14px;
        border: 2px solid #8f37aa;
        display: inline-block;
        color: #8f37aa;
        border-radius: 3px;
        text-transform: uppercase;
        width: 100%;
        margin-bottom: 10px
    }

    label.radio input:checked+div {
        border-color: #8f37aa;
        background-color: #8f37aa;
        color: #fff
    }

    .fw-500 {
        font-weight: 400
    }

    .lh-16 {
        line-height: 16px
    }
</style>

<!--	*URL: https://bbbootstrap.com/snippets/bootstrap-order-confirmation-invoice-bill-template-49857128
        Bootstrap 5 Order confirmation invoice/bill template
        Author :  BBBootstrap Team 
            -->

<div class="container my-2">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <a class="btn btn-primary btn-sm float-right" href="<?php echo BASE_URL . "orders"; ?>">Return To Orders</a>
        </div>

    </div>
    <br>
    <div class="row d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="invoice p-3">
                    <h5 class="text-center">Order Confirmation</h5>
                    <span class="font-weight-bold d-block mt-4">Hello,
                        <?php

                        if (isset($_SESSION["current_user"]["user_id"])) {
                            echo $_SESSION["current_user"]["first_name"];
                        } else {
                            echo "Reader";
                        } ?> !
                    </span>
                    <span>You order has been confirmed and will be shipped in next two days!</span>
                    <br>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <?php foreach ($orders as $data) : ?>
                                <tbody>
                                    <tr>
                                        <td width="20%">

                                            <img src="<?php echo BASE_URL . $data["product_image1"]; ?>" width="90">

                                        </td>

                                        <td width="60%">
                                            <span class="font-weight-bold"><?php echo $data["product_title"] ?></span>
                                            <div class="product-qty">
                                                <span>Author: <?php echo $data["product_brand"]; ?></span>
                                            </div>
                                            <div class="product-qty">
                                                <span>Format: <?php echo $data["product_format"]; ?></span>
                                            </div>
                                            <div class="product-qty">
                                                <span>Condition: <?php echo $data["product_condition"]; ?></span>
                                            </div>
                                            <div class="product-qty">
                                                <span>Quantity: <?php echo $data["order_details_quantity"]; ?></span>
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right">
                                                <span class="font-weight-bold">$<?php echo $data["order_details_price"] ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            <?php endforeach; ?>
                        </table>

                    </div>

                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left">

                                                <span class="text-muted">Shipping Fee</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span>$40</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left">

                                                <span class="text-muted">Subtotal</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span>$<?php echo $data["subtotal"] ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left">
                                                <span class="text-muted">Discount</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span class="text-success">$<?php echo $data["total_discount_amount"] ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left">

                                                <span class="font-weight-bold">Total</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span class="font-weight-bold">$<?php echo $data["total"] ?></span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Order Date</span>
                                            <span><?php echo $data["order_created"]; ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Order No</span>
                                            <span><?php echo $data["order_id"] ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2">
                                            <span class="d-block text-muted">Shiping Address</span>
                                            <span> <?php

                                                    if (isset($_SESSION["current_user"]["user_id"])) {
                                                        echo $_SESSION["current_user"]["shipping_address"];
                                                    } else {
                                                        echo "Reader";
                                                    } ?> </span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <p>We will be sending shipping confirmation email when your order is shipped successfully!</p>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                    <span>Quills & Parchment Team</span>
                </div>
                <div class="d-flex justify-content-between footer p-3">
                    <span>Need Help? visit our <a href="<?php echo BASE_URL ?>contactus"> help center</a></span>
                </div>
            </div>
        </div>
    </div>
</div>