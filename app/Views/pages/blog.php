<style>
    .bg-cover {
        background-size: cover !important;
     
    }

    body {
        min-height: 100vh;
    }

    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }

    .breadcrumb {
        background-color: white;
    }
</style>





<!--	URL: https://startbootstrap.com/template/blog-home
                        startbootstrap-blog-home
            
            -->

<!-- Page header with logo and tagline-->

<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-bullet">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active text-uppercase">Blog</li>
        </ol>
    </nav>

    <div style="background: url('images/bookself1.jpg')" class="jumbotron bg-cover text-white">
        <div class="container py-3 text-center">

        </div>
    </div>
</div>


<!-- Page content-->
<div class="container">

    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" src="images/blog6.jpg" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">May 5th,2022</div>
                    <h2 class="card-title">The Flatshare by Beth O'Leary - Review</h2>
                    <h6><a href="#!">Romance</a></h6>
                    <p class="card-text"></p>
                    <a class="btn btn-primary" href="<?php echo BASE_URL ?>blogpage">Read more →</a>
                </div>
            </div>
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="images/blog2.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">April 30th, 2022</div>
                            <h6 class="card-title h4">Upcoming Thrillers June 2022</h6>
                            <h6><a href="#!">Thriller & Mystery</a></h6>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="images/blog3.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">April 10th, 2022</div>
                            <h2 class="card-title h4">Upcoming Thrillers May 2022</h2>
                            <h6><a href="#!">Thriller & Mystery</a></h6>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="images/blog4.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">April 15th, 2022</div>
                            <h2 class="card-title h4">Best Summer Beach Reads Part 2</h2>
                            <h6><a href="#!">Romance</a></h6>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" src="images/blog5.jpg" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted">April 5th, 2022</div>
                            <h2 class="card-title h4">Best Summer Beach Reads Part 1</h2>
                            <h6><a href="#!">Romance</a></h6>
                            <a class="btn btn-primary" href="#!">Read more →</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search here..." aria-label="Enter search here..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Thriller & Mystery</a></li>
                                <li><a href="#!">Romance</a></li>
                                <li><a href="#!">Fantasy</a></li>
                                <li><a href="#!">Adult Fantasy</a></li>
                                <li><a href="#!">Fiction</a></li>
                                <li><a href="#!">Mythology & Tales</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Coming Soon</a></li>
                                <li><a href="#!">Best Seller</a></li>
                                <li><a href="#!">Staff Picks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>