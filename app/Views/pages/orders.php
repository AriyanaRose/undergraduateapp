<style>
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

<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>useraccount" class="text-uppercase">My Account</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">My Orders</li>
    </ol>
</nav>

<div style="background: url('images/bookself6.jpg')" class="jumbotron bg-cover text-white">
    <div class="container py-1 text-center">
        <div class="text-block">
            <h1>My Order History</h1>
        </div>
    </div>
</div>


<div class="container my-1">

    <p></p>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Order No</th>
                <th>Date</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($orders as $data) :  ?>


                <tr>
                    <td><?php echo $data["order_id"]; ?></td>
                    <td><?php echo $data["order_created"]; ?></td>
                    <td><?php echo $data["total"]; ?></td>
                    <td>
                        <a href="orders/details/<?php echo $data["order_id"]; ?>"> <i class="fa fa-eye"></i> Details</a>
                    </td>

                </tr>


            <?php endforeach; ?>


        </tbody>
    </table>
</div>