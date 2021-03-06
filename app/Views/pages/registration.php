<style>
    .login,
    .image {
        min-height: 100vh
    }

    .bg-image {
        background-image: url('images/REGISTER.jpg');
        background-size: cover;
        background-position: center center
    }

    .btn-block {
        background-color: #011f4b;
    }
</style>

<!--	URL: https://bbbootstrap.com/snippets/full-page-login-image-81339621
                Bootstrap 4 Full page login form with image
                Author:  BBBootstrap Team 
            -->


<div class="container-fluid">
    <div class="row no-gutter">
        <div class="col-md-6 d-none d-md-flex bg-image"></div>
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-xl-6 mx-auto">
                            <h3 class="display-4">Let's Get You Started</h3> <br>
                            <form action="registration" method="post">
                                <div class="form-group mb-3"> <input name="first_name" id="inputFirstName" type="text" placeholder="First Name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> </div>
                                <div class="form-group mb-3"> <input name="last_name" id="inputLastName" type="text" placeholder="Last Name" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> </div>
                                <div class="form-group mb-3"> <input name="email" id="inputEmail" type="email" placeholder="Email address" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4"> </div>
                                <div class="form-group mb-3"> <input name="password" id="inputPassword" type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-danger"><br> </div>
                                <div class="custom-control custom-checkbox mb-3"> <input id="customCheck1" type="checkbox" checked class="custom-control-input"> <label for="customCheck1" class="custom-control-label">By clicking Register you agree to our Terms and Conditions and Privacy Policy</label> </div> <button name="registration" type="submit" class="btn btn-block text-light">Register</button>
                                <div class="text-center d-flex justify-content-between mt-4">
                                    <p><a href="<?php echo BASE_URL ?>login" class=" text-danger"> <u>Already have an account? Login Here</u></a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script type='text/javascript'>
    (function(I, L, T, i, c, k, s) {
        if (I.iticks) return;
        I.iticks = {
            host: c,
            settings: s,
            clientId: k,
            cdn: L,
            queue: []
        };
        var h = T.head || T.documentElement;
        var e = T.createElement(i);
        var l = I.location;
        e.async = true;
        e.src = (L || c) + '/client/inject-v2.min.js';
        h.insertBefore(e, h.firstChild);
        I.iticks.call = function(a, b) {
            I.iticks.queue.push([a, b]);
        };
    })(window, 'https://cdn-v1.intelliticks.com/prod/common', document, 'script', 'https://app.intelliticks.com', 'FT2or4wSmBq8tw9QC_c', {});
</script>