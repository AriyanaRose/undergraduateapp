<style>
    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }

    .breadcrumb {
        background-color: white;
    }

    .card-0 {
        min-height: 110vh;
        color: white;
        border: 0px;
    }

    p {
        font-size: 15px;
        line-height: 25px !important;
        font-weight: 500;

    }

    .container {
        padding-top: 10px !important;
        border-radius: 20px;
    }

    .btn {
        letter-spacing: 1px;
    }

    select:active {
        box-shadow: none !important;
        outline-width: 0 !important;

    }

    select:after {
        box-shadow: none !important;
        outline-width: 0 !important;

    }

    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 0px !important;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px;
        resize: none;

    }

    select:focus,
    input:focus {
        box-shadow: none !important;
        border: 1px solid #2196F3 !important;
        outline-width: 0 !important;
        font-weight: 400
    }

    label {
        margin-bottom: 2px;
        font-weight: bolder;
        font-size: 14px;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0
    }

    button:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        outline-width: 0
    }

    .form-control {
        height: calc(2em + .75rem + 3px);
    }

    .inner-card {
        margin: 79px 0px 70px 0px;
    }

    .card-0 {
        margin-top: 100px;
        margin-bottom: 100px;
    }


    #file {
        border: 2px dashed #92b0b3 !important;

    }

    .color input {
        background-color: #f1f1f1;
    }

    .files:before {
        position: absolute;
        bottom: 60px;
        left: 0;
        width: 100%;
        content: attr(data-before);
        color: #000;
        font-size: 12px;
        font-weight: 600;
        text-align: center;
    }


    #file {
        display: inline-block;
        width: 100%;
        padding: 95px 0 0 100%;
        background: url('https://i.imgur.com/VXWKoBD.png') top center no-repeat #fff;
        background-size: 55px 55px;
    }
</style>


<!--	URL: https://bbbootstrap.com/snippets/request-quote-form-upload-file-16888421
                        Bootstrap 4 request a quote form with upload file
                        Author: BBBootstrap Team
            
            -->


<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>admin-dashboard" class="text-uppercase">Dashboard</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">Add Products</li>
    </ol>
</nav>


<div class="container my-1 ">
    <div class="row justify-content-center round">

        <div class="col-lg-10 col-md-12 ">
            <form action="add-product" method="post" >
                <div class="card shadow-lg card-1">
                    <div class="card-body inner-card">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="form-group"><label>Title</label><input name="product_title" type="text" class="form-control"> </div>
                                <div class="form-group"> <label>Category</label> <select class="form-control" type="text" name="product_category">
                                        <option></option>
                                        <option>Adult Fantasy</option>
                                        <option>Children</option>
                                        <option>Fantasy</option>
                                        <option>Fiction</option>
                                        <option>Grapic Novel</option>
                                        <option>Manga</option>
                                        <option>Mythology & Tales</option>
                                        <option>Romance</option>
                                        <option>Thriller/Mystery</option>
                                        <option>YA</option>
                                    </select> </div>
                                <div class="form-group"> <label>Format</label> <input name="product_format" type="text" class="form-control"> </div>
                                <div class="form-group"> <label>Status</label> <input name="product_status" type="text" class="form-control"> </div>
                                <div class="form-group"> <label>Quantity</label> <input name="product_quantity" type="text" class="form-control"> </div>
                                <div class="form-group"><label>Discount Amount</label> <input name="product_discount_amount" type="text" class="form-control"> </div>
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12">
                                <div class="form-group"> <label>Author</label> <input name="product_brand" type="text" class="form-control"> </div>
                                <div class="form-group"> <label>Sub-Category</label> <select select class="form-control" type="text" name="product_subcategory">
                                        <option></option>
                                        <option>Best Seller</option>
                                        <option>Box Set</option>
                                        <option>Coming Soon</option>
                                        <option>Frequently Purchased</option>
                                        <option>New Arrivals</option>
                                        <option>Staff Picks</option>
                                        <option>Turned into Film/TV</option>
                                    </select></div>
                                <div class="form-group"> <label>Condition</label> <input name="product_condition" type="text" class="form-control"> </div>
                                <div class="form-group"> <label>Type</label> <input name="product_type" type="text" class="form-control"> </div>
                                <div class="form-group"> <label>Price</label> <input name="product_price" type="text" class="form-control"> </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10 col-12">
                                <div class="form-group"> <label for="exampleFormControlTextarea2">Description</label> <textarea input type="text" name="product_description" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="5"></textarea></div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <p><input type="file" name="product_image1"></p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-12 col-lg-10 col-12">
                                <div class="row justify-content-end mb-5">
                                    <div class="col-lg-4 col-auto "><button type="submit" name="add_product" class="btn btn-primary btn-block"><small class="font-weight-bold">Submit</small></button> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


    </div>
</div>
</div>