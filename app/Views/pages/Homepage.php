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

    .jumbotron-fluid {
        background-color: #011f4b;
    }
</style>

<!--	URL: http://www.prepbootstrap.com/bootstrap-template/faq-example
                Bootstrap FAQ Bootsrap Frequently Asked Questions
                Author:  PrepBootstrap
            -->


<!-- Home Carousel	-->
<?php require_once APP_DIR . "Views/includes/home-cara.php"; ?>

<!-- Category	-->
<?php require_once APP_DIR . "Views/includes/home-category.php"; ?>
<!-- Authors	-->
<?php require_once APP_DIR . "Views/includes/home-authors.php"; ?>

<!-- New Arrivals	-->
<div class="container my-1 bg-white">
    <h2 class="h2 font-weight-bold text-center py-1">New Arrivals</h2>
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

<!-- Coming Soon	-->
<div class="container my-1 bg-white">
    <h2 class="h2 font-weight-bold text-center py-1">Coming Soon</h2>
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

<!-- Featured using Random	-->
<div class="container my-1 bg-white">
    <h2 class="h2 font-weight-bold text-center py-1">Featured Products</h2>
    <hr class="dotted">
    <div class="row">
        <!-- Code don't delete	-->
        <?php foreach ($product_featured as $data) :
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


<!-- Featured using Random	-->
<div class="container my-1 bg-white">
    <h2 class="h2 font-weight-bold text-center py-1">Best Sellers</h2>
    <hr class="dotted">
    <div class="row">
        <!-- Code don't delete	-->
        <?php foreach ($product_best as $data) :
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



<script type='text/javascript'>
    (function(I, L, T, i, c, k, s) {
        if (I.iticks) return;
        I.iticks = {
            host: c,
            settings: s,
            clientId: k,
            cdn: L,
            queue: []
        };
        var h = T.head || T.documentElement;
        var e = T.createElement(i);
        var l = I.location;
        e.async = true;
        e.src = (L || c) + '/client/inject-v2.min.js';
        h.insertBefore(e, h.firstChild);
        I.iticks.call = function(a, b) {
            I.iticks.queue.push([a, b]);
        };
    })(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'FT2or4wSmBq8tw9QC_c', {});
</script>