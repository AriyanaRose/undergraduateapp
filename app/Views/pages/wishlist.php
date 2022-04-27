<style>
    .bg-cover {
        background-size: cover !important;
        opacity: 0.5
    }

    body {
        background-color: #f8f9fa;
    }

    @import url();


    .container-fluid {
        margin-top: 70px
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.40rem
    }

    .img-sm {
        width: 100px;
        height: 150px
    }

    .itemside .info {
        padding-left: 15px;
        padding-right: 7px
    }

    .table-shopping-cart .price-wrap {
        line-height: 1.2
    }

    .table-shopping-cart .price {
        font-weight: bold;
        margin-right: 5px;
        display: block
    }

    .text-muted {
        color: #969696 !important
    }

    a {
        text-decoration: none !important
    }

    .card {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0px
    }

    .itemside {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%
    }

    .dlist-align {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex
    }

    [class*="dlist-"] {
        margin-bottom: 5px
    }

    .coupon {
        border-radius: 1px
    }

    .price {
        font-weight: 600;
        color: #212529
    }

    .btn.btn-out {
        outline: 1px solid #fff;
        outline-offset: -5px
    }

    .btn-main {
        border-radius: 2px;
        text-transform: capitalize;
        font-size: 15px;
        padding: 10px 19px;
        cursor: pointer;
        color: #fff;
        width: 100%
    }

    .btn-light {
        color: #ffffff;
        background-color: #F44336;
        border-color: #f8f9fa;
        font-size: 12px
    }

    .btn-light:hover {
        color: #ffffff;
        background-color: #F44336;
        border-color: #F44336
    }

    .btn-apply {
        font-size: 11px
    }

    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }
</style>

<!--	
                URL: https://bootstrapious.com/p/bootstrap-products-list
               Bootstrap 4 simple ecommerce shopping cart with coupon code input text
                Author: Ask SNB
            -->


<div style="background: url('images/bannerbookends.jpg')" class="jumbotron bg-cover text-white">
</div>

<div class="container my-5 bg-white">
    <nav aria-label="breadcrumb">
    </nav>
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>store" class="text-uppercase">Store</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Wishlist</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <button name="add_to_cart" type="submit" class="btn btn-primary btn-sm float-right">Continue Shopping</button>
        </div>
    </div>
    <br>
    <div class="row">
        <aside class="col-lg-12">
            <div class="card">
                <div class="table-responsive">
                    <table class="table table-borderless table-shopping-cart">
                        <thead class="text-muted">
                            <tr class="small text-uppercase">
                                <th scope="col">Product</th>
                                <th scope="col" width="120">Quantity</th>
                                <th scope="col" width="120">Price</th>
                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($wish_details as $data) : ?>
                                <tr>
                                    <td>
                                        <figure class="itemside align-items-center">
                                            <div class="aside"><img src="<?php echo $data["product_image1"] ?>" class="img-sm"></div>
                                            <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true"><?php echo $data["product_title"] ?></a>
                                                <p class="text-muted small">Author: <?php echo $data["product_brand"] ?> <br> Condition: <?php echo $data["product_condition"] ?> <br> Format: <?php echo $data["product_format"] ?> <br> Status: <?php echo $data["product_status"] ?></p>

                                            </figcaption>
                                        </figure>
                                    </td>
                                    <td>
                                    <form action="cart" method="post">
                                        <div class="form-group">
                                            <input type="number" value="1" name="cart_quantity" class="form-control" id="usr">
                                            <input name="product_id" value="<?php echo $data["product_id"]; ?>" type="hidden">
                                        </div>
                                    <td>
                                        <div class="price-wrap"> <var class="price">$<?php echo $data["product_price"] ?></var> </div>
                                    </td>
                                    
                                        <td class="text-right d-none d-md-block"> <button name="add_to_cart" type="submit" class="btn btn-md btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-trash"></i></button> <button href="" name="add_to_cart" type="submit" class="btn btn-light" data-abc="true"> Add to Basket</button> </td>
                                    </form>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </aside>
    </div>
</div>