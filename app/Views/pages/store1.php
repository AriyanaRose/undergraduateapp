<style>
    product-grid {
        font-family: 'Open Sans', sans-serif;
        text-align: center;
    }

    .product-grid .product-image {
        position: relative;
        overflow: hidden;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid .product-image img {
        width: 100%;
        height: auto;
        transition: all 0.3s;
    }

    .product-grid .product-image:hover img {
        transform: scale(1.05);
    }

    .product-grid .product-new-label {
        color: #fff;
        background: #cd1b29;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        padding: 3px 10px 10px;
        position: absolute;
        top: 0px;
        left: 0;
        clip-path: polygon(0 0, 100% 0, 100% 75%, 15% 75%, 0 100%, 0% 25%);
    }

    .product-grid .social {
        padding: 0;
        margin: 0;
        list-style: none;
        opacity: 0;
        transform: translateY(-50%);
        position: absolute;
        top: 50%;
        left: -50px;
        transition: all 0.3s ease;
    }

    .product-grid .product-image:hover .social {
        opacity: 1;
        left: 0;
    }

    .product-grid .social li {
        margin: 5px 0;
    }

    .product-grid .social li a {
        color: #fff;
        background: #033772;
        font-size: 16px;
        line-height: 40px;
        width: 40px;
        height: 40px;
        display: block;
        position: relative;
        transition: all .3s ease;
    }

    .product-grid .social li a:hover {
        background: #1f72ce;
    }

    .product-grid .social li a:before {
        content: attr(data-tip);
        color: #fff;
        background-color: #1f72ce;
        font-size: 13px;
        font-weight: 600;
        line-height: 22px;
        padding: 9px 12px;
        white-space: nowrap;
        visibility: hidden;
        position: absolute;
        left: 100%;
        top: 0;
        transition: all 0.3s ease;
    }

    .product-grid .social li a:hover:before {
        visibility: visible;
    }

    .product-grid .product-content {
        width: 100%;
        padding: 12px 0;
        display: inline-block;
    }

    .product-grid .title {
        margin: 0 0 7px;
        font-size: 16px;
        font-weight: 600;
        text-transform: capitalize;
    }

    .product-grid .title a {
        color: #000;
        transition: all 0.4s ease-out;
    }

    .product-grid .title a:hover {
        color: #033772;
    }

    .product-grid .price {
        color: #000;
        font-size: 16px;
        font-weight: 600;
        width: calc(100% - 100px);
        margin: 0 0 10px;
        display: inline-block;
    }

    .product-grid .price span {
        color: #7a7a7a;
        font-size: 15px;
        text-decoration: line-through;
        margin-right: 5px;
        display: inline-block;
    }

    .product-grid .rating {
        padding: 0;
        margin: 0;
        list-style: none;
        display: inline-block;
        float: right;
    }

    .product-grid .rating li {
        color: #ffc500;
        font-size: 13px;
    }

    .product-grid .rating li.far {
        color: #bababa;
    }

    .product-grid .add-to-cart {
        color: #000;
        background: #fff;
        font-size: 13px;
        font-weight: 600;
        text-align: left;
        width: 75%;
        margin: 0 auto;
        border: 1px solid #033772;
        display: block;
        transition: all .3s ease;
    }

    .product-grid .add-to-cart:hover {
        color: #fff;
        background: #033772;
    }

    .product-grid .add-to-cart i {
        color: #fff;
        background-color: #033772;
        text-align: center;
        line-height: 35px;
        height: 35px;
        width: 35px;
        border-right: 1px solid #fff;
        display: inline-block;
    }

    .product-grid .add-to-cart span {
        text-align: center;
        line-height: 35px;
        height: 35px;
        width: calc(100% - 40px);
        padding: 0 6px;
        vertical-align: top;
        display: inline-block;
    }

    @media only screen and (max-width:990px) {
        .product-grid {
            margin: 0 0 30px;
        }
    }
</style>


<!-- Banner	-->

<header class="py-2 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-info text-center my-5">
            <h1 class="fw-bolder">Books</h1>
            <p class="lead mb-0"></p>
        </div>
    </div>
</header>

<!--	URL: https: http://bestjquery.com/tutorial/product-grid/demo81/
                Name: Product Grid Style : Demo 81
                Author: bestjquery
            -->


<div class="container my-5">

    <!-- Sort and Filter Buttons	-->
    <?php require_once APP_DIR . "Views/includes/store-filter.php"; ?>

    <!--images/products/theweddingcrasher.jpg -->


    <div class="row">

        <!-- Code don't delete	-->
        <?php foreach ($product_details as $data) :
            $link = "details/" . $data["product_id"];
        ?>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">
                    <div class="product-image">
                        <!-- Code don't delete	-->
                        <a href="<?php echo $link ?>" class="image">
                            <img src="<?php echo BASE_URL . $data["product_image1"] ?>">
                        </a>
                        <ul class="social">
                            <li><a href="" data-tip="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-content">
                        <h3 class="title">
                            <!-- Code don't delete	-->
                            <a href="<?php echo $link ?>"><?php echo $data["product_title"]; ?> </a>
                        </h3>
                        <h6 class="brand">
                            <!-- Code don't delete	-->
                            <a href="#"><?php echo $data["product_brand"]; ?> </a>
                        </h6>
                        <!-- Code don't delete	-->
                        <div class="price"><?php echo $data["product_price"]; ?></div>
                        <a class="add-to-cart" href="#">
                            <i class="fa fa-shopping-basket"></i> <span>ADD TO BASKET</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Code don't delete	-->
        <?php endforeach; ?>

    </div>

</div>


