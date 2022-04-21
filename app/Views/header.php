<?php require APP_DIR . "Controllers/EmailSub.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Raleway">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php require_once APP_DIR . "Views/header-contents.php"; ?>

    <style>
        body {
            background: #FFFFFF;
            font-family: 'Varela Round', sans-serif;
        }

        .form-inline {
            display: inline-block;
        }

        .navbar-header.col {
            padding: 0 !important;
        }

        .navbar {
            background: #fff;
            padding-left: 16px;
            padding-right: 16px;
            border-bottom: 1px solid #d6d6d6;
            box-shadow: 0 0 4px rgba(0, 0, 0, .1);
        }

        .nav-link {
            margin: 0 5px;
        }

        .nav-link img {
            border-radius: 50%;
            width: 36px;
            height: 36px;
            margin: -8px 0;
            float: left;
            margin-right: 10px;
        }

        .navbar .navbar-brand {
            color: #555;
            padding-left: 0;
            font-size: 20px;
            padding-right: 50px;
            font-family: 'Raleway', sans-serif;
        }

        .navbar .navbar-brand b {
            font-weight: bold;
            color: #011f4b;
        }

        .navbar .navbar-nav a:hover,
        .navbar .navbar-nav a:focus {
            color: #011f4b !important;
        }

        .navbar .navbar-nav a.active,
        .navbar .navbar-nav a.active:hover {
            color: #011f4b !important;
            background: transparent !important;
        }

        .search-box {
            position: relative;
        }

        .search-box input.form-control {
            padding-right: 35px;
            border-radius: 0;
            padding-left: 0;
            border-width: 0 0 1px 0;
            box-shadow: none;
        }

        .search-box input.form-control:focus {
            border-color: #011f4b;
        }

        .search-box .input-group-text {
            min-width: 35px;
            border: none;
            background: transparent;
            position: absolute;
            right: 0;
            z-index: 9;
            padding: 7px 0 7px 7px;
            height: 100%;
        }

        .search-box i {
            color: #a0a5b1;
            font-size: 19px;
        }

        .navbar .nav-item i {
            font-size: 18px;
        }

        .navbar .dropdown-item i {
            font-size: 16px;
            min-width: 22px;
        }

        .navbar .nav-item.show>a {
            background: none !important;
        }

        .navbar .dropdown-menu {
            border-radius: 1px;
            border-color: #e5e5e5;
            box-shadow: 0 2px 8px rgba(0, 0, 0, .05);
        }

        .navbar .dropdown-menu a {
            color: #777;
            padding: 8px 20px;
            line-height: normal;
            font-size: 15px;
        }

        .navbar .navbar-form {
            margin-right: 0;
            margin-left: 0;
            border: 0;
        }

        @media (min-width: 992px) {
            .form-inline .input-group {
                width: 250px;
                margin-right: 30px;
            }
        }

        @media (max-width: 991px) {
            .form-inline {
                display: block;
                margin-bottom: 10px;
                margin-top: 0;
            }

            .input-group {
                width: 100%;
            }
        }
    </style>
</head>

<!--	URL: https://www.tutorialrepublic.com/snippets/preview.php?topic=bootstrap&file=elegant-navbar-with-social-media-icons
                Bootstrap Elegant Navbar with Social Media Icons
                Author: Tutorial Republic
            -->


<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="<?php echo BASE_URL ?>home">Quills&<b>Pages</b></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Collection of nav links, forms, and other content for toggling -->
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
        <div class="navbar-nav">
            <a href="<?php echo BASE_URL ?>home" class="nav-item nav-link">Home</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown">About Us</a>
                <div class="dropdown-menu">
                    <a href="<?php echo BASE_URL ?>aboutus" class="dropdown-item">About Us</a>
                    <a href="<?php echo BASE_URL ?>contactus" class="dropdown-item">Contact Us</a>
                    <a href="<?php echo BASE_URL ?>faqs" class="dropdown-item">FAQs</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="<?php echo BASE_URL ?>store" " class=" nav-item nav-link">Books and Comics</a>
                <div class="dropdown-menu">
                    <a href="<?php echo BASE_URL ?>store" class="dropdown-item">Books</a>
                    <a href="#" class="dropdown-item">Comics</a>
                    <a href="#" class="dropdown-item">Rare</a>
                    <a href="#" class="dropdown-item">Collectibles</a>
                </div>
            </div>
            <a href="<?php echo BASE_URL ?>blog" class="nav-item nav-link">Blog</a>
        </div>


        <div class="navbar-nav ml-auto">

            <div class="navbar-form-wrapper">
                <form action="store" method="get" class="navbar-form form-inline">
                    <div class="input-group search-box">
                        <input name="search" type="text" class="form-control"">
                            <div class=" input-group-append">
                        <span class="input-group-text">
                            <button type="submit" class="btn btn-default"> <i class="material-icons">&#xE8B6;</i> </button>
                        </span>
                    </div>
            </div>

        </div>
        </form>
        <a href="#" class="nav-item nav-link"><i class="fa fa-envelope"></i></a>
        <a href="#" class="nav-item nav-link"><i class="fa fa-bell"></i></a>
        <a href="<?php echo BASE_URL ?>wishlist" class="nav-item nav-link"><i class="fa fa-heart"></i></a>
        <a href="<?php echo BASE_URL ?>cart" class="nav-item nav-link"><i class="fa fa-shopping-basket"></i></a>
    </div>


    <div class="nav-item dropdown">
        <a href="#" class="nav-item nav-link dropdown-toggle" data-toggle="dropdown"> Hi
            <?php

            if (isset($_SESSION["current_user"]["user_id"])) {
                echo $_SESSION["current_user"]["first_name"];
            } else {
                echo "Reader";
            } ?>
        </a>
        <div class="dropdown-menu">
            <a href="<?php echo BASE_URL ?>registration" class="dropdown-item">Create Account</a>
            <a href="#" class="dropdown-item">My Account</a>
            <a href="#" class="dropdown-item">Orders</a>
            <a href="#" class="dropdown-item">Wish List </a>
            <a href="<?php echo BASE_URL ?>login" class="dropdown-item">Log In </a>
        </div>
    </div>
    </div>
</nav>