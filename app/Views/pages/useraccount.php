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

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container my-1">

    <div class="row flex-lg-nowrap">
        <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
            <div class="card p-3">
                <div class="e-navlist e-navlist--active-bg">
                    <ul class="nav">
                        <li class="nav-item"><a class="nav-link px-2 active" href="#"><i class="fa fa-id-card-o mr-1"></i><span>Overview</span></a></li>
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
                                        <div class="col-12 col-sm-auto mb-3">
                                            <div class="mx-auto" style="width: 140px;">
                                                <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; background-color: rgb(233, 236, 239);">
                                                    <span style="color: rgb(166, 168, 170); font: bold 8pt Arial;">140x140</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                                            <div class="text-center text-sm-left mb-2 mb-sm-0">
                                                <h4 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $data["first_name"]; ?> <?php echo $data["last_name"]; ?></h4>
                                                <h6 class="pt-sm-2 pb-1 mb-0 text-nowrap"><?php echo $data["email"]; ?></h6>
                                                <div class="mt-2">
                                                    <button class="btn btn-primary" type="button">
                                                        <i class="fa fa-fw fa-camera"></i>
                                                        <span>Change Photo</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="text-center text-sm-right">
                                                <span class="badge badge-success">User Points</span>
                                                <div class="text-dark"><small><?php echo $data["membership_type"]; ?></small></div>
                                                <div class="text-dark"><small><?php echo $data["total_points"]; ?></small></div>
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
                                                                    <label>Shipping Address</label>
                                                                    <textarea class="form-control" rows="5" placeholder="My Address"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col d-flex justify-content-end">
                                                                <button name="address" type="submit" class="btn btn-primary" type="submit">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>

                                            <div></div>
                                            <form action="">
                                                <div class="row">
                                                    <div class="col-12 col-sm-6 mb-3">
                                                        <div class="mb-2"><b>Change Password</b></div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>Current Password</label>
                                                                    <input class="form-control" type="password" placeholder="••••••">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="form-group">
                                                                    <label>New Password <span class="d-none d-xl-inline">Password</span></label>
                                                                    <input class="form-control" type="password" placeholder="••••••">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div></div>
                                                    <br>
                                                </div>
                                                <div class="row">
                                                    <div class="col d-flex justify-content-end">
                                                        <button class="btn btn-primary" type="submit">Save Changes</button>
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
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="px-xl-3">
                                <button class="btn btn-block btn-secondary">
                                    <i class="fa fa-sign-out"></i>
                                    <span>Logout</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title font-weight-bold">Support</h6>
                            <p class="card-text">Get fast, free help from our friendly assistants.</p>
                            <button type="button" class="btn btn-primary">Contact Us</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>