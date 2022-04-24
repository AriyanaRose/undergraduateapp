<style>
    .bg-inverse {
        background-color: #292b2c !important;
    }

    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

    /* Carousel base class */
    .carousel {
        margin-bottom: 4rem;
    }

    /* Since positioning the image, we need to help out the caption */
    .carousel-caption {
        z-index: 10;
        bottom: 3rem;
    }

    /* Declare heights because of positioning of img element */
    .carousel-item {
        height: 32rem;
        background-color: #777;
    }

    .carousel-item>img {
        position: absolute;
        top: 0;
        left: 0;
        min-width: 100%;
        height: 32rem;
    }


    /* MARKETING CONTENT
-------------------------------------------------- */

    /* Center align the text within the three columns below the carousel */
    .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .marketing h2 {
        font-weight: normal;
    }

    .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
    }


    /* Featurettes
------------------------- */

    .featurette-divider {
        margin: 5rem 0;
        /* Space out the Bootstrap <hr> more */
    }

    /* Thin out the marketing headings */
    .featurette-heading {
        font-weight: 300;
        line-height: 1;
        letter-spacing: -.05rem;
    }


    /* RESPONSIVE CSS
-------------------------------------------------- */

    @media (min-width: 40em) {

        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
    }

    @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
    }
</style>

<!--	URL: https://bootsnipp.com/snippets/Q0z7E
               "Carousel template bootstrap lacodeid"
                Author:  Juan86
            -->

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1>Reward Points</h1>
                    <p>Sign up for an account today and earn 200 Points to redeem at Checkout</p>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL ?>registration" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>