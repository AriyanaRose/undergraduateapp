<?php

require_once "../app/Config/Paths.php";
require_once APP_DIR . "Config/Router.php";

get($_ENV["PROJECT_PATH"] . 'home', 'app/Controllers/Homepage.php');


//http://localhost/undergraduateapp/registration 
get($_ENV["PROJECT_PATH"] . 'registration', 'app/Controllers/Registration.php');
post($_ENV["PROJECT_PATH"] . 'registration', 'app/Controllers/Registration.php');

//http://localhost/undergraduateapp/login 
get($_ENV["PROJECT_PATH"] . 'login', 'app/Controllers/Login.php');
post($_ENV["PROJECT_PATH"] . 'login', 'app/Controllers/Login.php');

//http://localhost/undergraduateapp/logout 
get($_ENV["PROJECT_PATH"] . 'logout', 'app/Controllers/Logout.php');
post($_ENV["PROJECT_PATH"] . 'logout', 'app/Controllers/Logout.php');

//http://localhost/undergraduateapp/admin/add-product
get($_ENV["PROJECT_PATH"] . 'admin/add-product', 'app/Controllers/admin/Adminproduct.php');
post($_ENV["PROJECT_PATH"] . 'admin/add-product', 'app/Controllers/admin/Adminproduct.php');

//http://http://localhost/undergraduateapp/store
get($_ENV["PROJECT_PATH"] . 'store', 'app/Controllers/Store.php');
post($_ENV["PROJECT_PATH"] . 'store', 'app/Controllers/Store.php');


//http://http://localhost/undergraduateapp/details
get($_ENV["PROJECT_PATH"] . 'details/$id', 'app/Controllers/Details.php');
post($_ENV["PROJECT_PATH"] . 'details/$id', 'app/Controllers/Details.php');


//http://http://localhost/undergraduateapp/templates 
get($_ENV["PROJECT_PATH"] . 'templates', 'app/Controllers/Templates.php');
post($_ENV["PROJECT_PATH"] . 'templates', 'app/Controllers/Templates.php');


//http://http://localhost/undergraduateapp/contactus
get($_ENV["PROJECT_PATH"] . 'contactus', 'app/Controllers/Contactus.php');
post($_ENV["PROJECT_PATH"] . 'contactus', 'app/Controllers/Contactus.php');

//http://http://localhost/undergraduateapp/emailsub
get($_ENV["PROJECT_PATH"] . 'emailsub', 'app/Controllers/Emailsub.php');
post($_ENV["PROJECT_PATH"] . 'emailsub', 'app/Controllers/Emailsub.php');

//http://http://localhost/undergraduateapp/thankyou
get($_ENV["PROJECT_PATH"] . 'thankyousub', 'app/Controllers/Thankyousub.php');
post($_ENV["PROJECT_PATH"] . 'thankyousub', 'app/Controllers/Thankyousub.php');

//http://http://localhost/undergraduateapp/aboutus
get($_ENV["PROJECT_PATH"] . 'aboutus', 'app/Controllers/Aboutus.php');
post($_ENV["PROJECT_PATH"] . 'aboutus', 'app/Controllers/Aboutus.php');

//http://http://localhost/undergraduateapp/blog
get($_ENV["PROJECT_PATH"] . 'blog', 'app/Controllers/Blog.php');
post($_ENV["PROJECT_PATH"] . 'blog', 'app/Controllers/Blog.php');

//http://http://localhost/undergraduateapp/blogpape
get($_ENV["PROJECT_PATH"] . 'blogpage', 'app/Controllers/Blogpage.php');
post($_ENV["PROJECT_PATH"] . 'blogpage', 'app/Controllers/Blogpage.php');

//http://http://localhost/undergraduateapp/faqs
get($_ENV["PROJECT_PATH"] . 'faqs', 'app/Controllers/Faqs.php');
post($_ENV["PROJECT_PATH"] . 'faqs', 'app/Controllers/Faqs.php');

//http://http://localhost/undergraduateapp/cart
get($_ENV["PROJECT_PATH"] . 'cart', 'app/Controllers/Cart.php');
post($_ENV["PROJECT_PATH"] . 'cart', 'app/Controllers/Cart.php');

//http://http://localhost/undergraduateapp/checkout
get($_ENV["PROJECT_PATH"] . 'checkout', 'app/Controllers/Checkout.php');
post($_ENV["PROJECT_PATH"] . 'checkout', 'app/Controllers/Checkout.php');

//http://http://localhost/undergraduateapp/checkout/stripe
get($_ENV["PROJECT_PATH"] . 'checkout/stripe', 'app/Controllers/Checkout-stripe.php');
post($_ENV["PROJECT_PATH"] . 'checkout/stripe', 'app/Controllers/Checkout-stripe.php');

//http://http://localhost/undergraduateapp/checkout/stripe
get($_ENV["PROJECT_PATH"] . 'checkout/success/$payment/$id', 'app/Controllers/Checkout-success.php');
post($_ENV["PROJECT_PATH"] . 'checkout/success/$payment/$id', 'app/Controllers/Checkout-success.php');

//http://http://localhost/undergraduateapp/wishlist
get($_ENV["PROJECT_PATH"] . 'wishlist', 'app/Controllers/Wishlist.php');
post($_ENV["PROJECT_PATH"] . 'wishlist', 'app/Controllers/Wishlist.php');

//http://http://localhost/undergraduateapp/thankyou
get($_ENV["PROJECT_PATH"] . 'thankyoucontactus', 'app/Controllers/Thankyoucontactus.php');
post($_ENV["PROJECT_PATH"] . 'thankyoucontactus', 'app/Controllers/Thankyoucontactus.php');

//http://http://localhost/undergraduateapp/useraccount
get($_ENV["PROJECT_PATH"] . 'useraccount', 'app/Controllers/Useraccount.php');
post($_ENV["PROJECT_PATH"] . 'useraccount', 'app/Controllers/Useraccount.php');

//http://http://localhost/undergraduateapp/rewards
get($_ENV["PROJECT_PATH"] . 'rewards', 'app/Controllers/Rewards.php');
post($_ENV["PROJECT_PATH"] . 'rewards', 'app/Controllers/Rewards.php');

//http://http://localhost/undergraduateapp/rewards
get($_ENV["PROJECT_PATH"] . 'membership', 'app/Controllers/Membership.php');
post($_ENV["PROJECT_PATH"] . 'membership', 'app/Controllers/Membership.php');

//http://http://localhost/undergraduateapp/orders
get($_ENV["PROJECT_PATH"] . 'orders', 'app/Controllers/Orders.php');
post($_ENV["PROJECT_PATH"] . 'orders', 'app/Controllers/Orders.php');

//http://http://localhost/undergraduateapp/orders/details
get($_ENV["PROJECT_PATH"] . 'orders/details/$id', 'app/Controllers/Order-details.php');
post($_ENV["PROJECT_PATH"] . 'orders/details/$id', 'app/Controllers/Order-details.php');

//http://localhost/undergraduateapp/admin-emailsub
get($_ENV["PROJECT_PATH"] . 'admin-emailsub', 'app/Controllers/Admin-email.php');
post($_ENV["PROJECT_PATH"] . 'admin-emailsub', 'app/Controllers/Admin-email.php');

//http://localhost/undergraduateapp/admin-contactus
get($_ENV["PROJECT_PATH"] . 'admin-contactus', 'app/Controllers/Admin-contactus.php');
post($_ENV["PROJECT_PATH"] . 'admin-contactus', 'app/Controllers/Admin-contactus.php');

//http://localhost/undergraduateapp/admin-orders
get($_ENV["PROJECT_PATH"] . 'admin-orders', 'app/Controllers/Admin-orders.php');
post($_ENV["PROJECT_PATH"] . 'admin-orders', 'app/Controllers/Admin-orders.php');

//http://localhost/undergraduateapp/admin-customers
get($_ENV["PROJECT_PATH"] . 'admin-customers', 'app/Controllers/Admin-customers.php');
post($_ENV["PROJECT_PATH"] . 'admin-customers', 'app/Controllers/Admin-customers.php');

//http://localhost/undergraduateapp/admin-productlisting
get($_ENV["PROJECT_PATH"] . 'admin-productlisting', 'app/Controllers/Admin-productlisting.php');
post($_ENV["PROJECT_PATH"] . 'admin-productlisting', 'app/Controllers/Admin-productlisting.php');


//http://localhost/undergraduateapp/admin-dashboard
get($_ENV["PROJECT_PATH"] . 'admin-dashboard', 'app/Controllers/Admin-dashboard.php');
post($_ENV["PROJECT_PATH"] . 'admin-dashboard', 'app/Controllers/Admin-dashboard.php');

//http://localhost/undergraduateapp/admin-dashboard
get($_ENV["PROJECT_PATH"] . 'checkout-confirmation', 'app/Controllers/Check-confirmation.php');
post($_ENV["PROJECT_PATH"] . 'checkout-confirmation', 'app/Controllers/Check-confirmation.php');

// ##################################################
// ##################################################
// ##################################################

// Static GET
// In the URL -> http://localhost
// The output -> Index
// get(PROJECT_FOLDER, 'app/Controllers/Homepage.php');
get('/', 'app/Controllers/Homepage.php');
// get(PROJECT_FOLDER . 'login', 'app/Controllers/Login.php');




// Dynamic GET. Example with 1 variable
// The $id will be available in user.php
//get('/user/$id', 'index.php');

// Dynamic GET. Example with 2 variables
// The $name will be available in user.php
// The $last_name will be available in user.php
//get('/user/$name/$last_name', 'user.php');

// Dynamic GET. Example with 2 variables with static
// In the URL -> http://localhost/product/shoes/color/blue
// The $type will be available in product.php
// The $color will be available in product.php
//get('/product/$type/color/:color', 'product.php');

// Dynamic GET. Example with 1 variable and 1 query string
// In the URL -> http://localhost/item/car?price=10
// The $name will be available in items.php which is inside the views folder
//get('/item/$name', 'views/items.php');


// ##################################################
// ##################################################
// ##################################################
// any can be used for GETs or POSTs

// For GET or POST
// The 404.php which is inside the views folder will be called
// The 404.php has access to $_GET and $_POST
any('/404', 'app/views/404.php');
