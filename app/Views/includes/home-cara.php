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
        height: 100%;
        /* opacity: 0.2; */
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
            <img class="first-slide" src="images/home142.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-left">
                    <h1 class="text-white">
                        <bold>Why choose Us?</bold>
                    </h1>
                    <h2 class="text-white">
                        <bold>We offer members reward points</bold>
                    </h2>
                    <h4 class="text-white">Sign up for an account today and earn 200 Points and for every $1 spent earn 1 point to redeem at checkout. See reward points section for more details.</h4>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL ?>registration" role="button">Sign up today</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="second-slide" src="images/home112.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="text-white text-left">
                        <bold>Why choose Us?</bold>
                    </h1>
                    <h2 class="text-white text-left">
                        <bold>We offer a wide range of new and used books and comics to suit every interest and pocket.</bold>
                    </h2>
                    <h4 class="text-white text-left">Whether you love adventure, mystery, manga or romance we have an extensive selection to satisfy your inner biblophile.</h4>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL ?>store" role="button">See books and comics</a></p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="third-slide" src="images/home181.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-right">
                    <h1 class="text-white text-left">
                        <bold>Why choose Us?</bold>
                    </h1>
                    <h2 class="text-white text-left">
                        <bold>Don't see something you like? Want to customize an order? We are happy to facilitate your requests.</bold>
                    </h2>
                    <h4 class="text-white text-left">Fill out a contact form and one of our book wizards will contact you in shortly to discuss your purchasing needs.</h4>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo BASE_URL ?>contactus" role="button">Contact Us</a></p>
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