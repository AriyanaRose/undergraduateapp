<style>

    .card-big-shadow {
        max-width: 320px;
        position: relative;
    }

    .coloured-cards .card {
        margin-top: 30px;
    }

    .card[data-radius="none"] {
        border-radius: 0px;
    }

    .card {
        border-radius: 8px;
        box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
        background-color: #FFFFFF;
        color: #252422;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }


    .card[data-background="image"] .title,
    .card[data-background="image"] .stats,
    .card[data-background="image"] .category,
    .card[data-background="image"] .description,
    .card[data-background="image"] .content,
    .card[data-background="image"] .card-footer,
    .card[data-background="image"] small,
    .card[data-background="image"] .content a,
    .card[data-background="color"] .title,
    .card[data-background="color"] .stats,
    .card[data-background="color"] .category,
    .card[data-background="color"] .description,
    .card[data-background="color"] .content,
    .card[data-background="color"] .card-footer,
    .card[data-background="color"] small,
    .card[data-background="color"] .content a {
        color: #FFFFFF;
    }

    .card.card-just-text .content {
        padding: 50px 65px;
        text-align: center;
    }

    .card .content {
        padding: 20px 20px 10px 20px;
    }

    .card[data-color="blue"] .category {
        color: black;
    }

    .card .category,
    .card .label {
        font-size: 14px;
        margin-bottom: 0px;
    }

    .card-big-shadow:before {
        background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
        background-position: center bottom;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        bottom: -12%;
        content: "";
        display: block;
        left: -12%;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 0;
    }

    h4,
    .h4 {
        font-size: 1.5em;
        color: black;
        font-weight: 600;
        line-height: 1.2em;
    }

    h6,
    .h6 {
        font-size: 0.9em;
        color: black;
        font-weight: 600;
        text-transform: uppercase;
    }

    .card .description {
        font-size: 16px;
        color: black;
    }

    .content-card {
        margin-top: 30px;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    /*======== COLORS ===========*/

    .card[data-color="black"] {
        background: black;
    }

    .card[data-color="black"] .description {
        color: #506568;
    }

    .card[data-color="blue"] {
        background: navy;
    }

    .card[data-color="blue"] .description {
        color: #506568;
    }

    .card[data-color="green"] {
        background: green;
    }

    .card[data-color="green"] .description {
        color: #60773d;
    }

    .card[data-color="green"] .category {
        color: #92ac56;
    }

    .card[data-color="yellow"] {
        background: magenta;
    }

    .card[data-color="yellow"] .description {
        color: #b25825;
    }

    .card[data-color="yellow"] .category {
        color: #d88715;
    }

    .card[data-color="brown"] {
        background: brown;
    }

    .card[data-color="brown"] .description {
        color: #75442e;
    }

    .card[data-color="brown"] .category {
        color: #a47e65;
    }

    .card[data-color="purple"] {
        background: purple;
    }

    .card[data-color="purple"] .description {
        color: #3a283d;
    }

    .card[data-color="purple"] .category {
        color: #5a283d;
    }

    .card[data-color="orange"] {
        background: orangered;
    }

    .card[data-color="orange"] .description {
        color: #772510;
    }

    .card[data-color="orange"] .category {
        color: #e95e37;
    }

    /* Bottom right text */
    .text-block {
        position: centered;
        bottom: 20px;
        right: 20px;
        background-color: black;
        color: white;
        padding-left: 20px;
        padding-right: 20px;
    }

    .bg-cover {
        background-size: cover !important;
        padding-top: 30px;
        padding-bottom: 30px;
    }
</style>


<!--	URL: https://www.bootdey.com/snippets/view/Note-cards#css
                Bootstrap snippet. Note cards
                Author:   Bootdey
            -->

<div>
    <div style="background: url('images/bookself1.jpg')" class="jumbotron bg-cover text-white">
        <div class="container py-1 text-center">
            <div class="text-block">
                <h1>Admin Dashboard</h1>
            </div>
        </div>
    </div>
</div>


<div class="container bootstrap snippets bootdeys">

    <div class="row">
        <div class="col-md-12 col-sm-12 content-card">
            <div class="card-big ">
                <div class="card card-just-text" data-background="color" data-color="black" data-radius="none">
                    <div class="content">
                        <h6 class="category"></h6>
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin-analytics">Analytics</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

    </div>
    <div class="row">
        <div class="col-md-4 col-sm-3 content-card">
            <div class="card-big ">
                <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                    <div class="content">
                        <h6 class="category"></h6>
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin-productlisting">Product Listing</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big text-dark">
                <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                    <div class="content">
                        <h6 class="category"></h6>
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin/add-product">Add Products</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big text-dark">
                <div class="card card-just-text" data-background="color" data-color="yellow" data-radius="none">
                    <div class="content">
                        <h6 class="category"></h6>
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin-customers">Customer Listing</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big">
                <div class="card card-just-text" data-background="color" data-color="brown" data-radius="none">
                    <div class="content">
                        <h6 class="category"></h6>
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin-orders">Order Listing</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big">
                <div class="card card-just-text" data-background="color" data-color="purple" data-radius="none">
                    <div class="content">
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin-emailsub">Email Subscription Listing</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>

        <div class="col-md-4 col-sm-6 content-card">
            <div class="card-big">
                <div class="card card-just-text" data-background="color" data-color="orange" data-radius="none">
                    <div class="content">
                        <h6 class="category"></h6>
                        <h4 class="title"><a href="<?php echo BASE_URL ?>admin-contactus">Contact Us Listing</a></h4>
                    </div>
                </div> <!-- end card -->
            </div>
        </div>
    </div>




</div>