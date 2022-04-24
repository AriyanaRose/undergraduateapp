<style>
    img,
    figure {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
    }


    .product-grid {
        text-align: center;
    }

    .product-grid .product-image {
        overflow: hidden;
        position: relative;
    }

    .product-grid .product-image a.image {
        display: block;
    }

    .product-grid .product-image img {
        width: 50%;
        height: 50%;
        transition: all 0.05s ease 0s;
    }

    .product-grid:hover .product-image img {
        transform: scale(1.1);
    }

    .product-grid .product-sale-label {
        color: #fff;
        background-color: #b83616;
        font-size: 12px;
        text-transform: capitalize;
        padding: 3px 18px;
        position: absolute;
        top: 0px;
        right: 0px;
    }

    .product-grid .product-links {
        background-color: #b83616;
        padding: 7px 10px;
        margin: 0;
        list-style: none;
        opacity: 0;
        transform: translateY(-50%);
        position: absolute;
        top: 50%;
        right: 0;
        transition: all 0.3s ease 0s
    }

    .product-grid:hover .product-links {
        opacity: 1;
    }

    .product-grid .product-links li {
        margin: 0 0 7px;
        transform: translateX(30px);
        transition: all 0.3s ease 0s;
    }

    .product-grid .product-links li:nth-child(2) {
        transition: all 0.3s ease 0.05s;
    }

    .product-grid .product-links li:nth-child(3) {
        transition: all 0.3s ease 0.1s;
    }

    .product-grid .product-links li:nth-child(4) {
        transition: all 0.3s ease 0.15s;
    }

    .product-grid .product-links li:last-child {
        margin: 0;
    }

    .product-grid:hover .product-links li {
        transform: translateX(0);
    }

    .product-grid .product-links li a {
        color: #fff;
        font-size: 20px;
        position: relative;
        transition: all 0.3s ease 0s;
    }

    .product-grid .product-links li a:hover {
        color: #fff;
        text-shadow: 3px 3px 0 rgba(255, 255, 255, 0.2);
    }

    .product-grid .product-links li a:before,
    .product-grid .product-links li a:after {
        content: attr(data-tip);
        color: #fff;
        background: #000;
        font-size: 10px;
        font-weight: 500;
        line-height: 18px;
        text-shadow: none;
        padding: 5px 5px;
        white-space: nowrap;
        display: none;
        transform: translateY(-50%);
        position: absolute;
        right: 45px;
        top: 50%;
        transition: all 250ms ease-in-out 0s;
    }

    .product-grid .product-links li a:after {
        content: '';
        height: 10px;
        width: 10px;
        padding: 0;
        transform: translateY(-50%) rotate(45deg);
        right: 41px;
        z-index: -1;
    }

    .product-grid .product-links li a:hover:before,
    .product-grid .product-links li a:hover:after {
        display: block;
    }

    .product-grid .product-content {
        text-align: left;
        padding: 10px 10px;
    }

    .product-grid .title {
        font-size: 16px;
        font-weight: 500;
        text-transform: capitalize;
        margin: 0 0 6px;
    }

    .product-grid .title a {
        color: #222;
        transition: all 0.3s ease 0s;
    }

    .product-grid .title a:hover {
        color: #b83616;
    }

    .product-grid .price {
        color: #b83616;
        font-size: 10px;
        font-weight: 700;
        margin: 0 0 4px;
    }

    .product-grid .price span {
        color: #666;
        font-size: 14px;
        font-weight: 400;
        text-decoration: line-through;
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

    @media screen and (max-width: 990px) {
        .product-grid {
            margin: 0 0 30px;
        }
    }

    .bg-cover {
        background-size: cover !important;
        opacity: 0.5
    }

    body {
        min-height: 100vh;
    }

    .btn-lg {
        background-color: #011f4b;
    }

    hr.dotted {
        border-top: 2px dotted #999;
    }

    .jumbotron-fluid{
        background-color: #011f4b;
    }
</style>

<!--	URL: http://www.prepbootstrap.com/bootstrap-template/faq-example
                Bootstrap FAQ Bootsrap Frequently Asked Questions
                Author:  PrepBootstrap
            -->


<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 text-center text-white">Hello,
            <?php

            if (isset($_SESSION["current_user"]["user_id"])) {
                echo $_SESSION["current_user"]["first_name"];
            } else {
                echo "Welcome to Quills & Pages";
            } ?> !
    </div>
</div>

<body>
    <div class="container my-5 bg-white">
        <!-- Heading Row-->
        <div class="row gx-4 gx-lg-5 align-items-center my-5">
            <div class="col-lg-7 bg-dark">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/homepage1.png" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="images/homepage2.png" alt="Chicago">
                        </div>
                        <div class="carousel-item">
                            <img src="images/homepage3.png" alt="New York">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>

                </div>

            </div>
            <div class="col-lg-5 bg-white">
                <p class="font-weight-light"></p>
                <p class="font-weight-light">We specialize in a wide range of new and used books and comics to meet the needs of every reader</p>
                <p class="font-weight-light">Sign up for an account today and earn 200 points to redeem at checkout!</p>
                <div></div>
                <p class="font-weight-light">Do see something you like? Want to customize your order? Want to request a special item? Contact us and our friendly staff are waiting to accomodate your needs!</p>
                <a class="btn btn-primary text-center" href="<?php echo BASE_URL ?>store">Shop Here</a>
                <br>
            </div>
        </div>
    </div>

    <!-- Category	-->
    <?php require_once APP_DIR . "Views/includes/home-category.php"; ?>
    <!-- Authors	-->
    <?php require_once APP_DIR . "Views/includes/home-authors.php"; ?>
 


    <div class="container my-5 bg-white">
        <h2 class="h4 font-weight-bold text-center py-3">New Arrivals</h2>
        <hr class="dotted">
        <div class="row">
            <!-- Code don't delete	-->
            <?php foreach ($product_new as $data) :
                $link = "details/" . $data["product_id"];
            ?>
                <div class="col-lg-3 w-100">
                    <div class="product-grid">
                        <div class="product-image">
                            <!-- Code don't delete	-->
                            <a href="<?php echo $link ?>" class="image">
                                <img src="<?php echo BASE_URL . $data["product_image1"] ?>">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5 class="title font-weight-bold text-center text-sm">
                                <!-- Code don't delete	-->
                                <a href="<?php echo $link ?>"><?php echo $data["product_title"]; ?> </a>
                            </h5>
                            <h6 class="brand font-weight-light text-center">
                                <!-- Code don't delete	-->
                                <a><?php echo $data["product_brand"]; ?> </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <!-- Code don't delete	-->
            <?php endforeach; ?>
        </div>
    </div>


    <div class="container my-5 bg-white">
        <h2 class="h4 font-weight-bold text-center py-3">Coming Soon</h2>
        <hr class="dotted">

        <div class="row">
            <!-- Code don't delete	-->
            <?php foreach ($product_details as $data) :
                $link = "details/" . $data["product_id"];
            ?>
                <div class="col-md-3 w-100">
                    <div class="product-grid">
                        <div class="product-image">
                            <!-- Code don't delete	-->
                            <a href="<?php echo $link ?>" class="image">
                                <img src="<?php echo BASE_URL . $data["product_image1"] ?>">
                            </a>
                        </div>
                        <div class="product-content">
                            <h5 class="title font-weight-bold text-center text-sm">
                                <!-- Code don't delete	-->
                                <a href="<?php echo $link ?>"><?php echo $data["product_title"]; ?> </a>
                            </h5>
                            <h6 class="brand font-weight-light text-center">
                                <!-- Code don't delete	-->
                                <a><?php echo $data["product_brand"]; ?> </a>
                            </h6>
                        </div>
                    </div>
                </div>
                <!-- Code don't delete	-->
            <?php endforeach; ?>
        </div>
    </div>