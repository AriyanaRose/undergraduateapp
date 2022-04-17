<style>
    .shopping-cart {
        padding-bottom: 50px;
        font-family: 'Montserrat', sans-serif;
    }

    .shopping-cart.dark {
        background-color: #f6f6f6;
    }

    .shopping-cart .content {
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.075);
        background-color: white;
    }

    .shopping-cart .block-heading {
        padding-top: 50px;
        margin-bottom: 40px;
        text-align: center;
    }

    .shopping-cart .block-heading p {
        text-align: center;
        max-width: 420px;
        margin: auto;
        opacity: 0.7;
    }

    .shopping-cart .dark .block-heading p {
        opacity: 0.8;
    }

    .shopping-cart .block-heading h1,
    .shopping-cart .block-heading h2,
    .shopping-cart .block-heading h3 {
        margin-bottom: 1.2rem;
        color: #3b99e0;
    }

    .shopping-cart .items {
        margin: auto;
    }

    .shopping-cart .items .product {
        margin-bottom: 20px;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .shopping-cart .items .product .info {
        padding-top: 0px;
        text-align: center;
    }

    .shopping-cart .items .product .info .product-name {
        font-weight: 600;
    }

    .shopping-cart .items .product .info .product-name .product-info {
        font-size: 14px;
        margin-top: 15px;
    }

    .shopping-cart .items .product .info .product-name .product-info .value {
        font-weight: 400;
    }

    .shopping-cart .items .product .info .quantity .quantity-input {
        margin: auto;
        width: 80px;
    }

    .shopping-cart .items .product .info .price {
        margin-top: 15px;
        font-weight: bold;
        font-size: 22px;
    }

    .shopping-cart .summary {
        border-top: 2px solid #5ea4f3;
        background-color: #f7fbff;
        height: 100%;
        padding: 30px;
    }

    .shopping-cart .summary h3 {
        text-align: center;
        font-size: 1.3em;
        font-weight: 600;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .shopping-cart .summary .summary-item:not(:last-of-type) {
        padding-bottom: 10px;
        padding-top: 10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .shopping-cart .summary .text {
        font-size: 1em;
        font-weight: 600;
    }

    .shopping-cart .summary .price {
        font-size: 1em;
        float: right;
    }

    .shopping-cart .summary button {
        margin-top: 20px;
    }

    @media (min-width: 768px) {
        .shopping-cart .items .product .info {
            padding-top: 25px;
            text-align: left;
        }

        .shopping-cart .items .product .info .price {
            font-weight: bold;
            font-size: 22px;
            top: 17px;
        }

        .shopping-cart .items .product .info .quantity {
            text-align: center;
        }

        .shopping-cart .items .product .info .quantity .quantity-input {
            padding: 4px 10px;
            text-align: center;
        }
    }
</style>



<!--	URL: https://epicbootstrap.com/snippets/shopping-cart
                Shopping Cart
                Author:  Epicbootstrap
            -->



<section class="shopping-cart dark">
    <div class="container">
        <div class="block-heading">
            <h2>Checkout</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in, mattis vitae leo.</p>
        </div>
        <div class="content">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="items">
                        <?php foreach ($cart_details as $data) : ?>
                            <div class="product">
                                <div class="row">
                                    <div class="col-md-2">
                                        <img class="img-fluid mx-auto d-block image" src="<?php echo $data["product_image1"] ?>">
                                    </div>
                                    <div class="col-md-10">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-md-5 product-name">
                                                    <div class="product-name">
                                                        <a href="#"> <?php echo $data["product_title"] ?> </a>
                                                        <div class="product-info">
                                                            <div>Author: <span class="value"><?php echo $data["product_brand"] ?></span></div>
                                                            <div>Format: <span class="value"><?php echo $data["product_format"] ?></span></div>
                                                            <div>Condition: <span class="value"><?php echo $data["product_condition"] ?></span></div>
                                                        </div>
                                                        <div class="d flex">
                                                            <form action="cart" method="post">
                                                                <button class="btn btn-danger btn-sm" name="remove_from_cart" type="submit">Remove</button>
                                                                <input type="hidden" name="cart_id" value="<?php echo $data["cart_id"] ?>">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 quantity">
                                                    <label for="quantity">Quantity:</label>
                                                    <input id="quantity" type="number" value="<?php echo $data["cart_quantity"] ?>" class="form-control quantity-input">
                                                </div>
                                                <div class="col-md-3 price">
                                                    <span>$<?php echo $data["product_price"] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="summary">
                        <h3>Summary</h3>


                        <div class="summary-item"><span class="text">Subtotal</span><span class="price">$ <?php echo $cart_object->getSubtotal(); ?> </span></div>

                        <div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
                        <div class="summary-item"><span class="text">Shipping</span><span class="price">$40</span></div>

                        <div class="summary-item"><span class="text">Total</span><span class="price">$<?php echo $cart_object->getTotal(); ?> </span></div>

                        <?php require_once APP_DIR . "views/includes/checkout-points.php" ?>

                        <button type="button" class="btn btn-primary btn-lg btn-block">Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>