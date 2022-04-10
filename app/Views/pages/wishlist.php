<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

    body {
        background-color: #eeeeee;
        font-family: 'Open Sans', serif;
        font-size: 14px
    }

    .container-fluid {
        margin-top: 70px
    }

    .card-body {
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.40rem
    }

    .img-sm {
        width: 80px;
        height: 80px
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
</style>

<!--	
                URL:https://bbbootstrap.com/snippets/simple-shopping-cart-coupon-code-input-text-39165166
               Bootstrap 4 simple ecommerce shopping cart with coupon code input text
                Author: Ask SNB

            -->

<div class="container my-5">
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
                            <tr>
                                <td>
                                    <figure class="itemside align-items-center">
                                        <div class="aside"><img src="https://i.imgur.com/1eq5kmC.png" class="img-sm"></div>
                                        <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">Tshirt with round nect</a>
                                            <p class="text-muted small"> SIZE: L <br> Brand: MAXTRA <br> Brand: MAXTRA</p>
                                        </figcaption>
                                    </figure>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <input type="number" value="1" name="cart_quantity" class="form-control" id="usr">
                                    </div>
                                <td>
                                    <div class="price-wrap"> <var class="price">$10.00</var> </div>
                                </td>
                                <td class="text-right d-none d-md-block"> <a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip" data-abc="true"> <i class="fa fa-trash"></i></a> <a href="" class="btn btn-light" data-abc="true"> Add to Cart</a> </td>
                            </tr>
                        </tbody>


                    </table>
                </div>
            </div>
        </aside>

    </div>
</div>