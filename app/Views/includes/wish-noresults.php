<style>

    .card {
        margin-bottom: 15px;
        border: 0;
        -webkit-transition: all .3s ease;
        transition: all .3s ease;
        letter-spacing: .5px;
        border-radius: 8px;
        -webkit-box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
        box-shadow: 1px 5px 24px 0 rgba(68, 102, 242, .05);
    }

    .card .card-header {
        background-color: #fff;
        border-bottom: none;
        padding: 24px;
        border-bottom: 1px solid #f6f7fb;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
    }



    .card .card-body {
        padding: 15px;
        background-color: transparent;
    }

    .btn-primary,
    .btn-primary.disabled,
    .btn-primary:disabled {
        background-color: #4466f2 !important;
        border-color: #4466f2 !important;
    }


    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }

    .breadcrumb {
        background-color: white;
    }

    body {
        background-color: white;
    }

    .btn {
        background-color: #011f4b;
    }
</style>

<!--	URL: https://bbbootstrap.com/snippets/bootstrap-empty-cart-template-25715727
                Bootstrap 4 empty cart template
                Author:  BBBootstrap Team
            -->


<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-bullet">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active text-uppercase">Cart
            <li>
        </ol>
    </nav>

</div>

<div class="container  my-1">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body cart">
                    <div class="col-sm-12 empty-cart-cls text-center">
                        <img src="images/wishlist-noresults.jpg" width="900" height="900" class="img-fluid">
                        <a href="<?php echo BASE_URL ?>store" class="btn cart-btn-transform m-3 text-white" data-abc="true">Continue Shopping</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>