<style>
    body {
        background: white;
    }

    /* Bullet */
    .breadcrumb-bullet .breadcrumb-item+.breadcrumb-item::before {
        content: '•';
    }

    .breadcrumb {
        background-color: white;
    }
</style>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-bullet">
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>home" class="text-uppercase">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo BASE_URL ?>useraccount" class="text-uppercase">My Account</a></li>
        <li aria-current="page" class="breadcrumb-item active text-uppercase">My Orders</li>
    </ol>
</nav>

<div class="container my-3">
    <h2 class="text-center">Order History</h2>
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