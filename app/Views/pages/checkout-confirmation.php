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

<div class="container mt-5 mb-5">

    <div class="row d-flex justify-content-center">

        <div class="col-md-8">

            <div class="card">


                <div class="text-left logo p-2 px-5">

                    <img src="https://i.imgur.com/2zDU056.png" width="50">


                </div>

                <div class="invoice p-5">

                    <h5>Your order Confirmed!</h5>

                    <span class="font-weight-bold d-block mt-4">Hello, Chris</span>
                    <span>You order has been confirmed and will be shipped in next two days!</span>

                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                        <table class="table table-borderless">

                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Order Date</span>
                                            <span>12 Jan,2018</span>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Order No</span>
                                            <span>MT12332345</span>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Payment</span>
                                            <span><img src="https://img.icons8.com/color/48/000000/mastercard.png" width="20" /></span>

                                        </div>
                                    </td>

                                    <td>
                                        <div class="py-2">

                                            <span class="d-block text-muted">Shiping Address</span>
                                            <span>414 Advert Avenue, NY,USA</span>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>





                    </div>




                    <div class="product border-bottom table-responsive">

                        <table class="table table-borderless">

                            <tbody>
                                <tr>
                                    <td width="20%">

                                        <img src="https://i.imgur.com/u11K1qd.jpg" width="90">

                                    </td>

                                    <td width="60%">
                                        <span class="font-weight-bold">Men's Sports cap</span>
                                        <div class="product-qty">
                                            <span class="d-block">Quantity:1</span>
                                            <span>Color:Dark</span>

                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right">
                                            <span class="font-weight-bold">$67.50</span>
                                        </div>
                                    </td>
                                </tr>


                                <tr>
                                    <td width="20%">

                                        <img src="https://i.imgur.com/SmBOua9.jpg" width="70">

                                    </td>

                                    <td width="60%">
                                        <span class="font-weight-bold">Men's Collar T-shirt</span>
                                        <div class="product-qty">
                                            <span class="d-block">Quantity:1</span>
                                            <span>Color:Orange</span>

                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right">
                                            <span class="font-weight-bold">$77.50</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                        </table>



                    </div>



                    <div class="row d-flex justify-content-end">

                        <div class="col-md-5">

                            <table class="table table-borderless">

                                <tbody class="totals">

                                    <tr>
                                        <td>
                                            <div class="text-left">

                                                <span class="text-muted">Subtotal</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span>$168.50</span>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="text-left">

                                                <span class="text-muted">Shipping Fee</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span>$22</span>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="text-left">

                                                <span class="text-muted">Tax Fee</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span>$7.65</span>
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
                                                <span class="text-success">$168.50</span>
                                            </div>
                                        </td>
                                    </tr>


                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left">

                                                <span class="font-weight-bold">Subtotal</span>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <span class="font-weight-bold">$238.50</span>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>



                    </div>


                    <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                    <span>Nike Team</span>





                </div>


                <div class="d-flex justify-content-between footer p-3">

                    <span>Need Help? visit our <a href="#"> help center</a></span>
                    <span>12 June, 2020</span>

                </div>




            </div>

        </div>

    </div>

</div>