<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');



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

    hr.dotted {
        border-top: 2px dotted #999;
    }


</style>

<!--	URL: https://bbbootstrap.com/snippets/bootstrap-4-simple-catalog-template-59154867
                Bootstrap 4 simple catalog template
                Author:  Anand Vunnam 
            -->

<div class="container my-1 bg-white">
    <div class="h2 font-weight-bold text-center py-3">Customer's Favourite Authors</div>
    <hr class="dotted">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/authors/paulo.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Paulo+Coelho" class="d-flex flex-column text-dark">Paulo Coelho</a> </div> 
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/authors/lisa.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Lisa+Jewell" class="d-flex flex-column text-dark">Lisa Jewell</a> </div> 
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-purple"> <img src="images/authors/roald.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Roald+Dahl" class="d-flex flex-column text-dark">Roald Dahl</a> 
                 </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-3 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-cyan"> <img src="images/authors/beth.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Beth+OLeary" class="d-flex flex-column text-dark">Beth O'Leary</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-3 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-pink"> <img src="images/authors/khalid.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Khaled+Hosseini" class="d-flex flex-column text-dark">Khaled Hosseini</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-3 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/authors/jasmine.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Jasmine+Guillory" class="d-flex flex-column text-dark">Jasmine Guillory</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-orange"> <img src="images/authors/peter.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Peter+Swanson" class="d-flex flex-column text-dark">Peter Swanson</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-green"> <img src="images/authors/chloe.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b> 
                    <a href="http://localhost/undergraduateapp/store?brand=Chloe+Gong" class="d-flex flex-column text-dark">Chloe Gong</a> 
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 my-lg-0 my-3">
            <div class="box bg-white">
                <div class="d-flex align-items-center">
                    <div class="rounded-circle mx-3 d-flex align-items-center justify-content-center pale-pista"> <img src="images/authors/eric.jpg" alt=""> </div>
                    <div class="d-flex flex-column"> <b></b>
                    <a href="" class="d-flex flex-column text-dark">Eric Jerome Dickey</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>