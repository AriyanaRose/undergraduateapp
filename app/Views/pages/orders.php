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