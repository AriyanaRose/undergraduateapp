<style>
    body {
        background: white;

    }

    .bg-cover {
        background-size: cover !important;
        padding-top: 20px;
        padding-bottom: 20px;
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

    .container {
        position: centered;
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

    .btn-lg {
        background-color: #011f4b;
    }
</style>


<!--	URL: https://www.bootdey.com/snippets/view/bs4-edit-profile-page#css
                Bootstrap snippet. bs4 edit profile page
                Author:  Bootdey
            -->

<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-bullet">
            <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
            <li aria-current="page" class="breadcrumb-item active text-uppercase">My Account</li>
        </ol>
    </nav>

    <div style="background: url('images/bookself3.jpg')" class="jumbotron bg-cover text-white">
        <div class="container py-1 text-center">
            <div class="text-block">
                <h1>My Account</h1>
            </div>
        </div>
    </div>

</div>

<div class="container my-1">

    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
            <div class="card p-3">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-cog mr-1"></i><span>Overview</span></a></li>
                        <li class="nav-item"><a class="nav-link px-2 active" href="<?php echo BASE_URL ?>orders"><i class="fa fa-shopping-bag mr-1"></i><span>Orders</span></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="row">
                <div class="col mb-3">
                    <div class="card">
                        <div class="card-body">

                            <?php foreach ($user_details as $data) :  ?>
                                <div class="e-profile">
                                    <div class="row">
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h6 class="text-nowrap"><b>Customer Name</b>:</h6>
                                                <h5 class="text-nowrap"><?php echo $data["first_name"]; ?> <?php echo $data["last_name"]; ?></h5>
                                                <h6 class="text-nowrap"><b>Email Address</b>:</h6>
                                                <h5 class="text-nowrap"><?php echo $data["email"]; ?></h5>
                                                <h6 class="text-nowrap"><b>Current Shipping Address</b>:</h6>
                                                <h5 class="text-nowrap"><?php echo $data["shipping_address"]; ?></h5>

                                            </div>
                                            <div class="text-center text-sm-right">
                                                <span class="badge badge-success">User Points</span>
                                                <div class="text-dark"><?php echo $data["total_points"]; ?></small></div>
                                                <span class="badge badge-info">Membership Type</span>
                                                <div class="text-dark text-right"><?php echo $data["membership_type"]; ?></small></div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                                    </ul>
                                    <div class="tab-content pt-3">
                                        <div class="tab-pane active">
                                            <form class="form" action="" method="post">
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <div class="form-group">

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-3">
                                                                <div class="form-group">
                                                                    <label>Update Shipping Address</label>
                                                                    <textarea name="shipping_address" class="form-control" rows="5" placeholder="My Address"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <button name="add_shipping_address" type="submit" class="btn btn-lg btn-block text-light" type="submit">Save Address</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <br>
                                            <div></div>
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3">
                                                        <div class=""><b>Change Password</b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Current Password</label>
                                                                    <input name="old_password" class="form-control" type="password" placeholder="••••••">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>New Password <span class="d-none d-xl-inline">Password</span></label>
                                                                    <input name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" class="form-control" type="password" placeholder="••••••">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div></div>
                                                    <br>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button name ="add_new_password" class="btn btn-lg btn-block text-light" type="submit">Save Password</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-3 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Support</h6>
                            <p class="card-text">Get fast, free help from our friendly assistants.</p>
                            <button type="button" class="btn btn-lg btn-block text-light">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>