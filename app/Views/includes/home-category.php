<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    body {
        background-color: #F5F5F5
    }

    .box {
        padding: 15px 15px;
        transition: all .4s ease-in-out;
        cursor: pointer background-color #f8f8f8;
    }

    .box:hover {
        box-shadow: 2px 2px 10px #a5a5a5;
        transform: scale(1.03)
    }

    a:hover {
        text-decoration: none
    }

    p.text-muted {
        margin: 0;
        font-size: 0.9rem
    }

    b {
        font-size: 1.12rem
    }

    .rounded-circle {
        width: 60px;
        height: 60px;
        background-color: red
    }

    .blue {
        background-color: #bedcfa;
        transform: rotateZ(90deg)
    }

    .pale-blue {
        background-color: #eff8ff
    }

    .pale-orange {
        background-color: #ffe5b9
    }

    .pale-purple {
        background-color: #e8e8e8
    }

    .pale-cyan {
        background-color: #cffffe
    }

    .pale-pink {
        background-color: #ffe4e4
    }

    .pale-pale {
        background-color: #f4eeff
    }

    .pale-green {
        background-color: #a0ffe6
    }

    .pale-pista {
        background-color: #dbf6e9
    }
</style>

<!--	URL: https://bbbootstrap.com/snippets/bootstrap-4-simple-catalog-template-59154867
                Bootstrap 4 simple catalog template
                Author:  Anand Vunnam 
            -->

<div class="container my-5 bg-white">
    <div class="h4 font-weight-bold text-center py-3">Featured Genres</div>
    <div class="row">
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 text-center d-flex align-items-center justify-content-center blue"> <img src="images/icons/adultfantasy.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Adult Fantasy</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/icons/children.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Children</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-purple"> <img src="images/icons/fantasy.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Fantasy</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-3 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-cyan"> <img src="images/icons/romance.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Romance</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-3 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-pink"> <img src="images/icons/thrillers.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Thriller/Mystery</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-3 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/icons/mythology.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Mythology & Tales</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/icons/fiction.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Fiction</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-green"> <img src="images/icons/comic.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Comics</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-pista"> <img src="images/icons/YA.png" alt=""> </div>
                    <div class="d-flex flex-column"> <b>Young Adult</b> <a href="#">
                        </a> </div>
                </div>
            </div>
        </div>
    </div>
</div>